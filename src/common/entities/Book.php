<?php

namespace common\entities;

use common\components\db\SoftDeleteTrait;
use common\components\Model;
use common\helpers\DateTimeHelpers;
use common\queries\BookQuery;
use yii\behaviors\TimestampBehavior;

/**
 * @property int $id
 * @property string $title
 * @property string $publisher
 * @property string $publish_house
 * @property int $count_book
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
final class Book extends Model
{
    use SoftDeleteTrait {
        SoftDeleteTrait::find as public findTrait;
    }

    public static function tableName(): string
    {
        return 'books';
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

    public static function find(): BookQuery
    {
        return (new BookQuery(get_called_class()))->andWhere(self::findTrait()->where);
    }
}
