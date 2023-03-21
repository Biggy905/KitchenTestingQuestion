<?php

namespace front\tests\unit\traits;

use common\components\ParameterBag;
use common\forms\RegistrationForm;
use common\forms\TokenForm;
use common\repositories\databases\TokenRepository;
use common\repositories\databases\UserRepository;
use common\services\AuthentificationService;
use common\services\JwtService;
use common\services\UserService;
use Yiisoft\Validator\Validator;

trait LoadContainerTrait
{
    protected function grabFixture(string $nameFixture): array
    {
        return ($this->tester->grabFixture($nameFixture))->data;
    }

    protected function parameterBag(): ParameterBag
    {
        return new \common\components\ParameterBag(
            [
                'jwt' => [
                    'domain' => getenv('JWT_DOMAIN') ?? '',
                    'key' => getenv('JWT_KEY') ?? '',
                    'expire' => [
                        'access' => (int)(getenv('JWT_EXPIRE_ACCESS') ?? 0),
                        'refresh' => (int)(getenv('JWT_EXPIRE_REFRESH') ?? 0),
                    ],
                    'algorithm' => getenv('JWT_ALGORITHM') ?? 'HS256',
                ],
            ]
        );
    }

    protected function validator()
    {
        return new Validator();
    }

    protected function formToken(): TokenForm
    {
        return new TokenForm(
            $this->validator(),
        );
    }

    protected function formRegistration(): RegistrationForm
    {
        return new RegistrationForm(
            $this->validator(),
        );
    }

    protected function serviceAuthentification(): AuthentificationService
    {
        return new AuthentificationService(
            $this->parameterBag(),
            $this->repositoryUser(),
            $this->repositoryToken(),
            $this->serviceJwt(),
        );
    }

    protected function serviceJwt(): JwtService
    {
        return new JwtService(
            $this->parameterBag(),
        );
    }

    protected function serviceUser(): UserService
    {
        return new UserService(
            $this->repositoryUser(),
            $this->serviceAuthentification(),
            $this->formToken(),
            $this->formRegistration(),
        );
    }

    protected function repositoryToken(): TokenRepository
    {
        return new TokenRepository();
    }

    protected function repositoryUser(): UserRepository
    {
        return new UserRepository();
    }
}