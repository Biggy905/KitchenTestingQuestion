<?php

namespace common\repositories;

use common\entities\Token;

interface TokenRepositoryInterface
{
    public function findOneByToken(string $refreshToken): ?Token;

    public function existsOneByToken(string $refreshToken): bool;

    public function create(Token $token): Token;

    public function delete(Token $token): void;
}