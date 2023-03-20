<?php

namespace common\controllers;

use common\components\WebController;
use Yii;

final class IndexController extends WebController
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionReport(): string
    {
        return $this->render('report');
    }

    public function actionError(): ?string
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }

        return null;
    }
}
