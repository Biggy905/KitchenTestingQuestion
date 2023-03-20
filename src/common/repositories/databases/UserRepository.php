<?php

namespace common\repositories\databases;

use common\entities\User;
use common\repositories\UserRepositoryInterface;
use LogicException;

final class UserRepository implements UserRepositoryInterface
{
    public function findOneById(int $id): ?User
    {
        return User::find()->byToken($id)->one();
    }

    public function findByToken(string $token): ?User
    {
        return User::find()->byToken($token)->one();
    }

    public function create(User $user): User
    {
        if (!$user->save()){
            throw new LogicException('Не удалось сохранить!');
        }

        return $user;
    }

    public function update(User $user): User
    {
        if (!$user->save()){
            throw new LogicException('Не удалось обновить!');
        }

        return $user;
    }
}
