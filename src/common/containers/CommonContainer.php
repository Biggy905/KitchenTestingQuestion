<?php

namespace common\containers;

use common\forms\AddBookForm;
use common\forms\TokenForm;
use common\repositories\BookRepositoryInterface;
use common\repositories\databases\BookRepositoriy;
use common\repositories\databases\TokenRepository;
use common\repositories\databases\UserRepository;
use common\repositories\TokenRepositoryInterface;
use common\repositories\UserRepositoryInterface;
use common\services\BookService;
use common\services\UserService;

final class CommonContainer
{
    public static function getContainers(): array
    {
        return [
            BookRepositoryInterface::class => BookRepositoriy::class,
            UserRepositoryInterface::class => UserRepository::class,
            TokenRepositoryInterface::class => TokenRepository::class,

            TokenForm::class => TokenForm::class,
            AddBookForm::class => AddBookForm::class,

            BookService::class => BookService::class,
            UserService::class => UserService::class,
        ];
    }
}
