<?php

namespace infotech\diadoc\Auth\Interfaces;

interface AuthProviderInterface
{
    public function getAuthorizationHeader(): string;
}
