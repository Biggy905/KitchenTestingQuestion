<?php

namespace console\controllers;

use common\services\UserService;
use yii\console\Controller;

final class UserController extends Controller
{
    public function __construct(
        $id,
        $module,
        private readonly UserService $userService,
        $config = []
    ) {
        parent::__construct($id, $module, $config);
    }

    /**
     * Response token. Required parameter: string $user string $password. Example: php yii user/token username password
     */
    public function actionToken(string $user, string $password): void
    {
        $request = [
            'user' => $user,
            'password' => $password,
        ];

        $token = $this->userService->signUser($request);

        echo "Token: " . $token . "\n";
    }

    /**
     * Create User. Required parameter: string $user string $password. Example: php yii user/create username password
     */
    public function actionCreate(string $user, string $password): void
    {
        $request = [
            'user' => $user,
            'password' => $password,
        ];

        $user = $this->userService->registrationToConsole($request);

        echo 'Пользователь: ' . $user['username'] . "\n";
        echo 'Статус пользователя: ' . $user['status'] . "\n";
        echo 'Создан: ' . $user['created_at'] . "\n";
    }
}
