<?php

namespace common\forms;

use common\components\form\AbstractForm;
use Yiisoft\Validator\Rule\Required;
use Yiisoft\Validator\Rule\StringValue;

final class TokenForm extends AbstractForm
{
    public string $token;

    public function rules(): array
    {
        return [
            'token' => [
                new Required(),
                new StringValue(),
            ]
        ];
    }
}
