<?php

namespace infotech\diadoc\Auth;

use infotech\diadoc\Exception\AuthProviderException;
use Random\RandomException;

class OidcClient
{
    public const DEFAULT_IDENTITY_URL = 'https://identity.kontur.ru/';
    public const AUTHORIZE_RESOURCE = 'connect/authorize';
    public const TOKEN_RESOURCE = 'connect/token';
    public const SCOPE_PRODUCTION = 'openid profile email offline_access Diadoc.PublicAPI';
    public const SCOPE_STAGING = 'openid profile email offline_access Diadoc.PublicAPI.Staging';

    public function __construct(
        private string $clientId,
        private string $clientSecret,
        private string $identityUrl = self::DEFAULT_IDENTITY_URL,
        private int $timeout = 20,
    ) {
    }

    /**
     * @throws RandomException
     */
    public static function generateRandomString(): string
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }

    public function buildAuthorizationUrl(string $redirectUri, string $state, ?string $nonce = null, string $scope = self::SCOPE_PRODUCTION,): string
    {
        return $this->buildUri(self::AUTHORIZE_RESOURCE) . '?' . http_build_query([
            'response_type' => 'code',
            'client_id' => $this->clientId,
            'scope' => $scope,
            'redirect_uri' => $redirectUri,
            'state' => $state,
            'nonce' => $nonce ?? self::generateRandomString(),
        ]);
    }

    public function exchangeCode(string $code, string $redirectUri): TokenSet
    {
        return $this->toTokenSet($this->requestToken([
            'grant_type' => 'authorization_code',
            'code' => $code,
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'redirect_uri' => $redirectUri,
        ]));
    }

    public function refresh(string $refreshToken): TokenSet
    {
        return $this->toTokenSet(
            $this->requestToken([
                'grant_type' => 'refresh_token',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'refresh_token' => $refreshToken,
            ]),
            $refreshToken,
        );
    }

    private function buildUri(string $resource): string
    {
        return rtrim($this->identityUrl, '/') . '/' . $resource;
    }

    /**
     * @throws AuthProviderException
     */
    private function toTokenSet(array $payload, ?string $fallbackRefreshToken = null): TokenSet
    {
        $accessToken = $payload['access_token'] ?? null;

        if (!is_string($accessToken) || $accessToken === '') {
            throw new AuthProviderException('Token endpoint returned no access_token');
        }

        $refreshToken = $payload['refresh_token'] ?? null;

        if (!is_string($refreshToken) || $refreshToken === '') {
            $refreshToken = $fallbackRefreshToken;
        }

        if ($refreshToken === null || $refreshToken === '') {
            throw new AuthProviderException(
                'Token endpoint returned no refresh_token, check that offline_access scope is requested',
            );
        }

        $expiresIn = $payload['expires_in'] ?? null;

        return new TokenSet(
            $refreshToken,
            $accessToken,
            is_numeric($expiresIn) ? time() + (int)$expiresIn : null,
        );
    }

    /**
     * @throws AuthProviderException
     */
    private function requestToken(array $params): array
    {
        $ch = curl_init($this->buildUri(self::TOKEN_RESOURCE));

        if ($ch === false) {
            throw new AuthProviderException('Unable to initialize request to token endpoint');
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);

        $response = curl_exec($ch);
        $errno = curl_errno($ch);
        $error = curl_error($ch);
        $statusCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($errno !== 0 || !is_string($response)) {
            throw new AuthProviderException(sprintf('Curl error: (%s) %s', $errno, $error), $errno);
        }

        if ($statusCode !== 200) {
            throw new AuthProviderException(
                sprintf('Token endpoint responded with %d: %s', $statusCode, $response),
                $statusCode,
            );
        }

        $payload = json_decode($response, true);

        if (!is_array($payload)) {
            throw new AuthProviderException('Token endpoint returned malformed JSON');
        }

        return $payload;
    }
}
