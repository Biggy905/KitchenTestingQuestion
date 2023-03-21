<?php

namespace common\forms;

use common\components\form\AbstractForm;
use Yiisoft\Validator\Rule\Required;
use Yiisoft\Validator\Rule\StringValue;

final class AuthForm extends AbstractForm
{
    public string $user;
    public string $password;

    public function rules(): array
    {
        return [
            'user' => [
                new Required(),
                new StringValue(),
            ],
            'password' => [
                new Required(),
                new StringValue(),
            ],
        ];
    }
}
