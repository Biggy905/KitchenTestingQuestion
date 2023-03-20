<?php

namespace common\services;

use common\enums\UserStatus;
use common\forms\TokenForm;
use common\repositories\databases\UserRepository;
use DomainException;

final class UserService
{
    public function __construct(
        private readonly UserRepository $repository,
        private readonly AuthentificationService $authentificationService,
        private readonly TokenForm $tokenForm,
    ) {

    }

    public function sign(array $request)
    {
        $form = $this->tokenForm;
        $form->setAttributes($request);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            throw new \DomainException('Ошибка валидации');
        }

        $user = $this->repository->findByToken($form->token);
        if (!$user){
            throw new \DomainException('Пользователь не найден!');
        }

        if ($user->status !== UserStatus::ACTIVE->value) {
            throw new DomainException('User is not active');
        }

        return $this->authentificationService->authorizeById($user->id);
    }
}
