<?php

namespace infotech\diadoc\Auth\Interfaces;

use infotech\diadoc\Auth\TokenSet;

interface TokenStorageInterface
{
    public function load(): ?TokenSet;

    public function save(TokenSet $tokens): void;

    public function lock(int $timeout): bool;

    public function unlock(): void;
}
