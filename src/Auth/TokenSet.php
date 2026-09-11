<?php

namespace infotech\diadoc\Auth;

class TokenSet
{
    public function __construct(
        public string $refreshToken,
        public ?string $accessToken = null,
        public ?int $expiresAt = null,
    ) {
    }

    public function hasUsableAccessToken(int $leeway = 0): bool
    {
        if ($this->accessToken === null || $this->accessToken === '') {
            return false;
        }

        if ($this->expiresAt === null) {
            return true;
        }

        return $this->expiresAt - $leeway > time();
    }
}
