<?php

$db = require __DIR__ . '/db.php';
$params = require __DIR__ . '/params.php';
$containers = require  __DIR__ . '/containers.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => $db,
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
    ],
    'params' => $params,
    'container' => [
        'singletons' => $containers,
        'definitions' => [],
    ],
];

return $config;
