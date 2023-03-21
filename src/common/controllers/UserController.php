<?php

namespace common\controllers;

use common\components\WebController;
use common\services\AuthentificationService;
use common\services\UserService;
use yii\helpers\Url;
use yii\web\Response;
use Yii;

final class UserController extends WebController
{
    public function __construct(
        $id,
        $module,
        private readonly AuthentificationService $authentificationService,
        private readonly UserService $service,
        $config = []
    ) {
        parent::__construct($id, $module, $config);
    }

    public function actionFormSignIn(): string
    {
        return $this->render('sign');
    }

    public function actionSignIn(): string|Response
    {
        if($this->request->isPost) {
            $request = $this->request->getBodyParams();
            $sign = $this->service->signToken($request);
            if ($sign) {
                $this->redirect(['book/list']);
            }
        }

        return $this->redirect(Url::to(['user/form-sign-in']));
    }

    public function actionSignOut(): Response
    {
        $refreshToken = (string) $this->request->cookies->getValue('refresh_token', '');
        $this->authentificationService->signOut($refreshToken);

        return $this->goHome();
    }

    public function actionItem(int $id): string
    {
        $item = $this->service->item($id);

        return $this->render('item', ['item' => $item]);
    }

    public function actionList(int $page, int $limit): string
    {
        $list = $this->service->list(
            [
                'page' => $page,
                'limit' => $limit
            ]
        );

        return $this->render('list', $list);
    }
}
