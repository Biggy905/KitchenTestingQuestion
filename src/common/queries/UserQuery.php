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
}
