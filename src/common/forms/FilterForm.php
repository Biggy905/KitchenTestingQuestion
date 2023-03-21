<?php

namespace common\forms;

use common\components\form\AbstractForm;
use Yiisoft\Validator\Rule\Integer;
use Yiisoft\Validator\Rule\Length;

final class FilterForm extends AbstractForm
{
    public int $page;
    public int $limit;

    public function rules(): array
    {
        return [
            'page' => [
                new Integer(min: 1),
            ],
            'limit' => [
                new Integer(min: 1),
            ],
        ];
    }
}
