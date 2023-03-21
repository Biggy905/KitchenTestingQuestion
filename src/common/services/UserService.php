<?php

namespace common\services;


use common\entities\User;
use common\enums\UserStatus;
use common\forms\AuthForm;
use common\forms\FilterForm;
use common\forms\IdForm;
use common\forms\RegistrationForm;
use common\forms\TokenForm;
use common\groups\UserItemGroup;
use common\groups\UserListGroup;
use common\repositories\databases\TokenRepository;
use common\repositories\databases\UserRepository;
use DomainException;
use yii\data\Pagination;

final class UserService
{
    public function __construct(
        private readonly UserRepository $repository,
        private readonly TokenRepository $tokenRepository,
        private readonly AuthentificationService $authentificationService,
        private readonly TokenForm $tokenForm,
        private readonly RegistrationForm $registrationForm,
        private readonly AuthForm $authForm,
        private readonly IdForm $idForm,
        private readonly FilterForm $filterForm,
    ) {

    }

    public function signUser(array $request): string
    {
        $form = $this->authForm;
        $form->setAttributes($request);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $user = $this->repository->findByUser($form->user);
        if (!$user){
            throw new DomainException('Пользователь не найден!');
        }

        if ($user->status !== UserStatus::ACTIVE->value) {
            throw new DomainException('User is not active');
        }

        return $this->authentificationService->authorizeById($user);
    }

    public function signToken(array $request): string
    {
        $form = $this->tokenForm;
        $form->setAttributes($request);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            throw new DomainException('Ошибка валидации');
        }

        $token = $this->tokenRepository->findOneByToken($form->token);
        if (!$token){
            throw new DomainException('Пользователь не найден!');
        }

        $user = $this->repository->findByToken($form->token);
        if (!$user){
            throw new DomainException('Пользователь не найден!');
        }

        if ($user->status !== UserStatus::ACTIVE->value) {
            throw new DomainException('Пользователь не активный!');
        }

        return $this->authentificationService->authorizeById($user);
    }

    public function checkToken(string $token): bool
    {
        return $this->tokenRepository->existsOneByToken($token);
    }

    public function registrationToConsole(array $request): array
    {
        $form = $this->registrationForm;
        $form->setAttributes($request);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $user = new User();
        $user->username = $form->user;
        $user->password_hash = \Yii::$app->security->generatePasswordHash($form->password);
        $user->password_reset_token = \Yii::$app->security->generateRandomString(32);
        $user->auth_key = \Yii::$app->security->generateRandomString(32);
        $user->status = UserStatus::ACTIVE->value;

        $cleanUser = $this->repository->create($user);

        return UserItemGroup::toArray($cleanUser);
    }


    public function item(int $id): array
    {
        $form = $this->idForm;
        $form->setAttributes(['id' => $id]);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $item = $this->repository->findOneById($form->id);
        if (!$item) {
            throw new \DomainException('Данного пользователя не нашли!');
        }

        return UserItemGroup::toArray($item);
    }

    public function list(array $filters): array
    {
        $form = $this->filterForm;
        $form->setAttributes($filters);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $list = $this->repository->findAll($filters)->all();

        return [
            'list' => UserListGroup::toArray($list),
            'pagination' => $this->pagination($filters)
        ];
    }

    public function pagination(array $filters): Pagination
    {
        $auctions = $this->repository->findAll($filters);

        $limit = $filters['limit'] ?? 10;

        if ($limit < 1 || $limit >= 25) {
            $limit = 10;
        }

        $pagination = new Pagination(
            [
                'defaultPageSize' => 10,
                'pageSize' => $limit,
                'totalCount' => $auctions->count(),
                'pageSizeParam' => false,
                'forcePageParam' => false,
            ]
        );

        return $pagination;
    }
}
