<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../../admin/config/bootstrap.php';

use yii\web\Application;
use yii\helpers\ArrayHelper;
use Dotenv\Dotenv;

(Dotenv::createUnsafeImmutable(
    Yii::getAlias('@root'),
    ['.env'],
    false
))->load();

$config = ArrayHelper::merge(
    require __DIR__ . '/../../common/config/base.php',
    require __DIR__ . '/../../admin/config/main.php',
);

try {
    (new Application($config))->run();
} catch (\yii\base\InvalidConfigException $e) {

}
