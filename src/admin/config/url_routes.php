<?php

return[
    [
        'verb' => ['get'],
        'pattern' => '/',
        'route' => 'index/admin-sign',
    ],
    [
        'verb' => ['get'],
        'pattern' => '/<id:\d+>/book',
        'route' => 'book/item',
    ],
    [
        'verb' => ['get'],
        'pattern' => '/<page:\d+>/<limit:\d+>/books',
        'route' => 'book/list',
    ],
    [
        'verb' => ['get', 'post'],
        'pattern' => 'book/create',
        'route' => 'book/create',
    ],
    [
        'verb' => ['get', 'patch'],
        'pattern' => '/<id:\d+>/book/update',
        'route' => 'book/update',
    ],
    [
        'verb' => ['delete'],
        'pattern' => '/<id:\d+>/book',
        'route' => 'book/delete',
    ],
    [
        'verb' => ['get'],
        'pattern' => '/<id:\d+>/user',
        'route' => 'user/item',
    ],
    [
        'verb' => ['get'],
        'pattern' => '/<page:\d+>/<limit:\d+>/users',
        'route' => 'user/list',
    ],
    [
        'verb' => ['get', 'post'],
        'pattern' => 'user/create',
        'route' => 'user/create',
    ],
    [
        'verb' => ['get', 'patch'],
        'pattern' => 'user/update',
        'route' => 'user/update',
    ],
    [
        'verb' => ['delete'],
        'pattern' => '/<id:\d+>/user',
        'route' => 'user/delete',
    ],
];
