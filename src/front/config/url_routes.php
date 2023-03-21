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
    ],
    [
        'verb' => ['get'],
        'pattern' => '/<id>/book',
        'route' => 'book/item',
    ],
    [
        'verb' => ['get'],
        'pattern' => '/<page:\d+>/<limit:\d+>/books',
        'route' => 'book/list',
    ],
    [
        'verb' => ['get', 'post'],
        'pattern' => '/book/create',
        'route' => 'book/create',
    ],
];
