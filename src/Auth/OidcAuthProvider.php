<?php

namespace infotech\diadoc\Auth;

use infotech\diadoc\Auth\Interfaces\AuthProviderInterface;
use infotech\diadoc\Auth\Interfaces\TokenStorageInterface;
use infotech\diadoc\Exception\AuthProviderException;

class OidcAuthProvider implements AuthProviderInterface
{
    private ?TokenSet $tokens = null;

    public function __construct(
        private OidcClient $client,
        private TokenStorageInterface $storage,
        private int $expirationLeeway = 60,
        private int $lockTimeout = 10,
    ) {
    }

    /**
     * @throws AuthProviderException
     */
    public function getAuthorizationHeader(): string
    {
        return 'Bearer ' . $this->getAccessToken();
    }

    /**
     * @throws AuthProviderException
     */
    public function getAccessToken(): string
    {
        $tokens = $this->tokens ?? $this->storage->load();

        if ($tokens === null) {
            throw new AuthProviderException(
                'Diadoc is not connected: no refresh token stored, initial authorization is required',
            );
        }

        if (!$tokens->hasUsableAccessToken($this->expirationLeeway)) {
            $tokens = $this->refreshWithLock($tokens);
        }

        $this->tokens = $tokens;

        if ($tokens->accessToken === null) {
            throw new AuthProviderException('Access token is not available');
        }

        return $tokens->accessToken;
    }

    public function forget(): void
    {
        $this->tokens = null;
    }

    /**
     * @throws AuthProviderException
     */
    private function refreshWithLock(TokenSet $known): TokenSet
    {
        if (!$this->storage->lock($this->lockTimeout)) {
            $fresh = $this->storage->load();

            if ($fresh !== null && $fresh->hasUsableAccessToken($this->expirationLeeway)) {
                return $fresh;
            }

            throw new AuthProviderException('Unable to acquire lock for token refresh');
        }

        try {
            $current = $this->storage->load() ?? $known;

            if ($current->hasUsableAccessToken($this->expirationLeeway)) {
                return $current;
            }

            $refreshed = $this->client->refresh($current->refreshToken);

            $this->storage->save($refreshed);

            return $refreshed;
        } finally {
            $this->storage->unlock();
        }
    }
}
