<?php

require_once __DIR__ . '/vendor/yiisoft/yii2/Yii.php';
require __DIR__ .'/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = \Dotenv\Dotenv::createUnsafeImmutable(
    dirname( __DIR__, 2),
    ['.env'],
    false
);
$dotenv->load();
