<?php

namespace common\queries;

use common\components\db\SoftDeleteQueryTrait;
use common\entities\User;
use yii\db\ActiveQuery;

/**
 * @method User|array|null one($db = null)
 * @method User[]|array all($db = null)
 * @method User[]|array each($batchSize = 100, $db = null)
 */
final class UserQuery extends ActiveQuery
{
    use SoftDeleteQueryTrait;

    public function byId(int $id): ActiveQuery
    {
        return $this->andWhere(
            [
                User::tableName() . '.id' => $id,
            ]
        );
    }

    public function byUser(string $user): ActiveQuery
    {
        return $this->andWhere(
            [
                User::tableName() . '.username' => $user,
            ]
        );
    }

    public function byToken(string $token): ActiveQuery
    {
        return $this->andWhere(
            [
                User::tableName() . '.auth_key' => $token,
            ]
        );
    }
}
