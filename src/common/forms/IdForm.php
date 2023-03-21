<?php

namespace common\forms;

use common\components\form\AbstractForm;
use Yiisoft\Validator\Rule\Integer;

final class IdForm extends AbstractForm
{
    public int $id;

    public function rules(): array
    {
        return [
            'id' => [
                new Integer(min: 1),
            ],
        ];
    }
}
