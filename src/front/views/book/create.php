<form method="post" action="<?= \yii\helpers\Url::to(['book/create'])?>">
    <div class="mb-3">
        <label for="publicherInput" class="form-label">Автор</label>
        <input name="publisher" type="text" class="form-control" id="publicherInput">
    </div>
    <div class="mb-3">
        <label for="nameInput" class="form-label">Наименование книги</label>
        <input name="title" type="text" class="form-control" id="nameInput">
    </div>
    <div class="mb-3">
        <label for="publishHouseInput" class="form-label">Издательский дом</label>
        <input name="publish_house" type="text" class="form-control" id="publishHouseInput">
    </div>
    <div class="mb-3">
        <label for="countBookInput" class="form-label">Тираж</label>
        <input name="count_book" type="text" class="form-control" id="countBookInput">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Сохранить</button>
    </div>
    <input name="<?= Yii::$app->request->csrfParam; ?>" type="hidden" value="<?= Yii::$app->request->csrfToken; ?>"/>
</form>
