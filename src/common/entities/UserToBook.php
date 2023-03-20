<?php

namespace common\entities;

use common\components\db\SoftDeleteTrait;
use common\components\Model;
use common\helpers\DateTimeHelpers;
use common\queries\UserToBookQuery;
use yii\behaviors\TimestampBehavior;

final class UserToBook extends Model
{
    use SoftDeleteTrait {
        SoftDeleteTrait::find as public findTrait;
    }

    public static function tableName(): string
    {
        return 'user_to_books';
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

    public static function find(): UserToBookQuery
    {
        return (new UserToBookQuery(get_called_class()))->andWhere(self::findTrait()->where);
    }
}
