<?php

namespace common\forms;

use common\components\form\AbstractForm;

final class TokenForm extends AbstractForm
{
    public string $token;

    public function rules(): array
    {
        return [

        ];
    }
}
