<?php

$routes = require __DIR__ . '/url_routes.php';

$config = [
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'common\controllers',
    'components' => [
        'user' => [
            'identityClass' => \common\components\UserIdentity::class,
            'enableAutoLogin' => true,
            //'loginUrl' => '/user/sign-up.html',
        ],
        'request' => [
            'cookieValidationKey' => 'IJMmEWMukvTFJBHuchcM5kWvXnqNroCE',
        ],
        'controllers' => [
            'class' => \common\components\WebController::class,
            'view' => Yii::getAlias('@app') . '/views/',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
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
