<?php

$routes = require __DIR__ . '/url_routes.php';

$config = [
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'common\controllers',
    'aliases' => [
        '@bower' => '@psr/bower-asset',
        '@npm'   => '@psr/npm-asset',
        '@lte' => '@psr/almasaeed2010',
    ],
    'components' => [
        'user' => [
            'identityClass' => \common\components\UserIdentity::class,
            'enableAutoLogin' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'tkNuFj3xbU-lAy-670b3c4dxhh2NA_sl',
        ],
        'controllers' => [
            'class' => \common\components\WebController::class,
            'view' => Yii::getAlias('@app') . '/views/',
        ],
        'errorHandler' => [
            'errorAction' => 'index/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info', 'debug'],
                ],
            ],
        ],
        'urlManager' => [
            'enableStrictParsing' => true,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix' => '.html',
            'rules' => $routes,
        ],
    ],
];

return $config;
