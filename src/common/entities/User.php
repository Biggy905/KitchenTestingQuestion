<?php

namespace common\entities;

use common\components\db\SoftDeleteTrait;
use common\components\Model;
use common\helpers\DateTimeHelpers;
use common\queries\UserQuery;
use yii\behaviors\TimestampBehavior;

/**
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property string $access_token
 * @property string $data
 * @property string $status
 * @property string $logged_at
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
final class User extends Model
{
    use SoftDeleteTrait {
        SoftDeleteTrait::find as public findTrait;
    }

    public static function tableName(): string
    {
        return 'users';
    }

    public function behaviors(): array
    {
        return [
            'DefaultTimestampBehaviour' => [
                'class' => TimestampBehavior::class,
                'value' => DateTimeHelpers::createDateTime(),
            ],
        ];
    }

    public static function find(): UserQuery
    {
        return (new UserQuery(get_called_class()))->andWhere(self::findTrait()->where);
    }
}
