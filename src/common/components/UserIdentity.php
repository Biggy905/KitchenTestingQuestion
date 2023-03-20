<?php

namespace common\components;

use common\modules\user\repositories\databases\AccountUsersRepository;
use yii\base\BaseObject;
use yii\web\IdentityInterface;

final class UserIdentity extends BaseObject implements IdentityInterface
{
    private static AccountUsersRepository $userRepository;
    private static $user;

    public function __construct(
        private readonly AccountUsersRepository $repository,
        array                                   $config = []
    ) {
        parent::__construct($config);
        self::$userRepository = $this->repository;
    }

    public static function findIdentity($id): ?UserIdentity
    {
        UserIdentity::$user = UserIdentity::$userRepository->findId($id);

        return isset(UserIdentity::$user->id)
            ? new self(UserIdentity::$userRepository, UserIdentity::$user->toArray())
            : null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    public function getId(): int
    {
        return UserIdentity::$user->id;
    }

    public function getAuthKey(): ?string
    {
        return UserIdentity::$user->authKey;
    }

    public function validateAuthKey($authKey): bool
    {
        return UserIdentity::$user->authKey === $authKey;
    }
}
