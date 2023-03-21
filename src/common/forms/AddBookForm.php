<?php

namespace common\forms;

use common\components\form\AbstractForm;
use Yiisoft\Validator\Rule\Callback;
use Yiisoft\Validator\Rule\Length;
use Yiisoft\Validator\Rule\Required;
use Yiisoft\Validator\Rule\StringValue;
use Yiisoft\Validator\Rule\Integer;
use Yiisoft\Validator\Result;
use common\entities\Book;

final class AddBookForm extends AbstractForm
{
    public $title;
    public $publisher;
    public $publish_house;
    public $count_book;

    public function rules(): array
    {
        return [
            'title' => [
                new Required(),
                new StringValue(),
                new Callback(
                    function (): Result {
                        $exists = Book::find()->byTitle($this->title)->exists();
                        if($exists) {
                            return (new Result())->addError('Это поле должно быть уникальным!');
                        }

                        return new Result();
                    }
                )
            ],
            'publisher' => [
                new Required(),
                new StringValue(),
            ],
            'publish_house' => [
                new Required(),
                new StringValue(),
            ],
            'count_book' => [
                new Integer(),
                new Length(min:1)
            ],
        ];
    }
}
