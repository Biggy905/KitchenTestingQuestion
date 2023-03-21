<?php

namespace common\queries;

use common\components\db\SoftDeleteQueryTrait;
use common\entities\Book;
use yii\db\ActiveQuery;

/**
 * @method Book|array|null one($db = null)
 * @method Book[]|array all($db = null)
 * @method Book[]|array each($batchSize = 100, $db = null)
 */
final class BookQuery extends ActiveQuery
{
    use SoftDeleteQueryTrait;

    public function byId(int $id): ActiveQuery
    {
        return $this->andWhere(
            [
                Book::tableName() . '.id' => $id
            ]
        );
    }

    public function byTitle(string $title): ActiveQuery
    {
        return $this->andWhere(
            [
                Book::tableName() . '.title' => $title
            ]
        );
    }
}
