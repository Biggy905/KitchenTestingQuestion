<?php

namespace common\repositories\databases;

use common\entities\Book;
use common\entities\User;
use common\repositories\UserRepositoryInterface;
use LogicException;
use yii\db\ActiveQuery;

final class UserRepository implements UserRepositoryInterface
{
    public function findOneById(int $id): ?User
    {
        return User::find()->byId($id)->one();
    }

    public function findByUser(string $user): ?User
    {
        return User::find()->byUser($user)->one();
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

    public function findAll(array $filters = []): ActiveQuery
    {
        $query = User::find();

        $page = $filters['page'] ?? 1;
        $limit = $filters['limit'] ?? 10;

        if ($page < 1) {
            $page = 1;
        }

        if ($limit < 1 || $limit >= 25) {
            $limit = 10;
        }

        if ($page && $limit) {
            $query->limit($limit);
            $query->offset($page * $limit - $limit);
        }

        $sortFieldDirection = (string) ($filters['sort_direction'] ?? '');

        $sortDirection = match ($sortFieldDirection) {
            'asc' => 'SORT_ASC',
            default => 'SORT_DESC',
        };

        $query->orderBy(
            [
                'created_at' => $sortDirection
            ]
        );

        return $query;
    }
}
