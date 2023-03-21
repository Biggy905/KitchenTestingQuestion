<?php

namespace common\forms;

use common\components\form\AbstractForm;
use common\entities\User;
use Yiisoft\Validator\Result;
use Yiisoft\Validator\Rule\Callback;
use Yiisoft\Validator\Rule\Required;
use Yiisoft\Validator\Rule\StringValue;

final class RegistrationForm extends AbstractForm
{
    public string $user;
    public string $password;

    public function rules(): array
    {
        return [
            'user' => [
                new Required(),
                new StringValue(),
                new Callback(
                    function (): Result {
                        $exists = User::find()->byUser($this->user)->exists();
                        if($exists) {
                            return (new Result())->addError('Этот пользователь занят!');
                        }

                        return new Result();
                    }
                )
            ],
            'password' => [
                new Required(),
                new StringValue(),
            ],
        ];
    }
}
