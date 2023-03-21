<?php

namespace common\repositories;

use common\entities\User;
use yii\db\ActiveQuery;

interface UserRepositoryInterface
{
    public function findOneById(int $id): ?User;

    public function findByUser(string $user): ?User;

    public function findByToken(string $token): ?User;

    public function create(User $user): User;

    public function update(User $user): User;

    public function findAll(array $filters = []): ActiveQuery;
}