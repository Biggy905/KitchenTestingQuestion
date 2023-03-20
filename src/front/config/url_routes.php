<?php

return [
    [
        'verb' => ['get'],
        'pattern' => '/',
        'route' => 'index/index',
    ],
    [
        'verb' => ['get'],
        'pattern' => '/report',
        'route' => 'index/report',
    ],
    [
        'verb' => ['get'],
        'pattern' => '/sign-in',
        'route' => 'user/form-sign-in',
    ],
    [
        'verb' => ['post'],
        'pattern' => '/send-token',
        'route' => 'user/sign-in',
    ]
];
