<?php

namespace common\repositories\databases;

use common\entities\Token;
use common\helpers\DateTimeHelpers;
use common\repositories\TokenRepositoryInterface;
use LogicException;

final class TokenRepository implements TokenRepositoryInterface
{
    public function findOneByToken(string $refreshToken): ?Token
    {
        return Token::find()->byToken($refreshToken)->one();
    }

    public function existsOneByToken(string $refreshToken): bool
    {
        return Token::find()->byToken($refreshToken)->exists();
    }

    public function create(Token $token): Token
    {
        if (!$token->save()){
            throw new LogicException('Не удалось сохранить!');
        }

        return $token;
    }

    public function delete(Token $token): void
    {
        $token->deleted_at = DateTimeHelpers::createDateTime();
        if (!$token->save()) {
            throw new LogicException('Токен не удалился!');
        }
    }
}
