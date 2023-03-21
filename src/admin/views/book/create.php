<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="<?= \yii\helpers\Url::to(['book/create'])?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="publicherInput">Автор</label>
                        <input name="publisher" type="text" class="form-control" id="publicherInput">
                    </div>
                    <div class="form-group">
                        <label for="nameInput">Наименование книги</label>
                        <input name="title" type="text" class="form-control" id="nameInput">
                    </div>
                    <div class="form-group">
                        <label for="publishHouseInput">Издательский дом</label>
                        <input name="publish_house" type="text" class="form-control" id="publishHouseInput">
                    </div>
                    <div class="form-group">
                        <label for="countBookInput">Тираж</label>
                        <input name="count_book" type="text" class="form-control" id="countBookInput">
                    </div>
                    <input name="<?= Yii::$app->request->csrfParam; ?>" type="hidden" value="<?= Yii::$app->request->csrfToken; ?>"/>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>