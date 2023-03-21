<?php

namespace console\fixtures;

use common\entities\User;
use yii\test\ActiveFixture;

final class UserFixtures extends ActiveFixture
{
    public $modelClass = User::class;
}
