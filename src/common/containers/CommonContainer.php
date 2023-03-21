<?php

namespace common\containers;

use common\forms\AddBookForm;
use common\forms\AuthForm;
use common\forms\FilterForm;
use common\forms\IdForm;
use common\forms\RegistrationForm;
use common\forms\TokenForm;
use common\repositories\BookRepositoryInterface;
use common\repositories\databases\BookRepositoriy;
use common\repositories\databases\TokenRepository;
use common\repositories\databases\UserRepository;
use common\repositories\TokenRepositoryInterface;
use common\repositories\UserRepositoryInterface;
use common\services\AuthentificationService;
use common\services\BookService;
use common\services\JwtService;
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
            RegistrationForm::class => RegistrationForm::class,
            AuthForm::class => AuthForm::class,
            IdForm::class => IdForm::class,
            FilterForm::class => FilterForm::class,

            BookService::class => BookService::class,
            UserService::class => UserService::class,
            AuthentificationService::class => AuthentificationService::class,
            JwtService::class => JwtService::class,
        ];
    }
}
