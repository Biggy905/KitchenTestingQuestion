<?php

namespace common\queries;

use common\components\db\SoftDeleteQueryTrait;
use common\entities\Token;
use yii\db\ActiveQuery;

/**
 * @method Token|array|null one($db = null)
 * @method Token[]|array all($db = null)
 * @method Token[]|array each($batchSize = 100, $db = null)
 */
final class TokenQuery extends ActiveQuery
{
    use SoftDeleteQueryTrait;

    public function byToken(string $token): ActiveQuery
    {
        return $this->andWhere(
            [
                Token::tableName() . '.token' => $token,
            ]
        );
    }
}
