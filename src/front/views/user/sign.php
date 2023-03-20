<form method="post" action="<?= \yii\helpers\Url::to(['user/sign-in'])?>">
    <div class="mb-3">
        <label for="exampleFormControlInput" class="form-label">Токен</label>
        <input name="token" type="text" class="form-control" id="exampleFormControlInput">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Отправить токен</button>
    </div>
    <input name="<?= Yii::$app->request->csrfParam; ?>" type="hidden" value="<?= Yii::$app->request->csrfToken; ?>"/>
</form>
