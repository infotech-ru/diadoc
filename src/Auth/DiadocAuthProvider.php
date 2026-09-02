<?php

namespace infotech\diadoc\Auth;

use infotech\diadoc\Auth\Interfaces\AuthProviderInterface;

class DiadocAuthProvider implements AuthProviderInterface
{
    public function __construct(
        private string $apiClientId,
        private ?string         $token = null,
    ) {
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function getAuthorizationHeader(): string
    {
        $header = sprintf('DiadocAuth ddauth_api_client_id=%s', $this->apiClientId);

        if ($this->token !== null && $this->token !== '') {
            $header .= sprintf(', ddauth_token=%s', $this->token);
        }

        return $header;
    }
}
