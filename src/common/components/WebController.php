<?php

namespace common\components;


use Yii;
use yii\base\View;
use yii\filters\AccessControl;

abstract class WebController extends \yii\web\Controller
{
    protected static array $accessControl;

    public $layout = '@app/views/layouts/main';

    private $view;
    private $viewPath = '@app/views/';


//    public function behaviors(): array
//    {
//        $behaviors = parent::behaviors();
//
//        $behaviors['access']['class'] = AccessControl::class;
//        $behaviors['access']['rules'] = static::$accessControl;
//
//        return $behaviors;
//    }

    public function setView($view): void
    {
        $this->view = $view;
    }

    public function getView(): View
    {
        if ($this->view === null) {
            $this->view = Yii::$app->getView();
        }

        return $this->view;
    }
}
