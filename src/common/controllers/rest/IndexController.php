<?php

namespace common\controllers\rest;

use common\components\RestController;

final class IndexController extends RestController
{
    public function actionIndex(): array
    {
        return $this->response([]);
    }
}
