<?php

namespace front\tests\unit\services;

use common\services\UserService;
use console\fixtures\UserFixtures;
use front\tests\unit\traits\LoadContainerTrait;

final class UserTest extends \Codeception\Test\Unit
{
    use LoadContainerTrait;

    protected UserService $userService;

    public function _fixtures(): array
    {
        return [
            'users' => UserFixtures::class,
        ];
    }

    public function _before(): void
    {
        $this->userService = $this->serviceUser();
    }

    public function testSign(): void
    {

    }
}
