<?php

namespace common\controllers;

use common\components\WebController;
use common\services\BookService;
use common\services\UserService;
use Yii;
use yii\web\Response;

final class BookController extends WebController
{
    public function __construct(
        $id,
        $module,
        private readonly BookService $bookService,
        private readonly UserService $userService,
        $config = []
    ) {
        parent::__construct($id, $module, $config);
    }

    public function beforeAction($action)
    {
        if (
            !empty($_COOKIE['refresh_token'])
            && $this->userService->checkToken($_COOKIE['refresh_token'])
        ) {
            return parent::beforeAction($action);
        }

        return $this->redirect(['index/index']);
    }

    public function actionItem(int $id): string
    {
        $item = $this->bookService->item($id);

        return $this->render('item', ['item' => $item]);
    }

    public function actionList(int $page, int $limit): string
    {
        $list = $this->bookService->list(
            [
                'page' => $page,
                'limit' => $limit
            ]
        );

        return $this->render('list', $list);
    }

    public function actionCreate(): string|Response
    {
        if ($this->request->isPost) {
            $request = $this->request->getBodyParams();

            $this->bookService->create($request);

            return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
        }

        return $this->render('create');
    }

    public function actionUpdate(int $id): string|Response
    {
        $item = $this->bookService->item($id);

        if ($this->request->isPost) {
            $request = $this->request->getBodyParams();

            $this->bookService->update(array_merge_recursive(['id' => $id],$request));

            return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
        }

        return $this->render('update', ['item' => $item]);
    }

    public function actionDelete(int $id): Response
    {
        if ($this->request->isDelete) {
            $this->bookService->delete($id);
        }

        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }
}
