<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form method="patch" action="<?= \yii\helpers\Url::to([$item['id'] . '/book/update'])?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="publicherInput">Автор</label>
                        <input name="publisher" type="text" class="form-control" id="publicherInput" value="<?= $item['publisher']?>" placeholder="<?= $item['publisher']?>">
                    </div>
                    <div class="form-group">
                        <label for="nameInput">Наименование книги</label>
                        <input name="title" type="text" class="form-control" id="nameInput" value="<?= $item['title']?>" placeholder="<?= $item['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="publishHouseInput">Издательский дом</label>
                        <input name="publish_house" type="text" class="form-control" id="publishHouseInput" value="<?= $item['publish_house']?>" placeholder="<?= $item['publish_house']?>">
                    </div>
                    <div class="form-group">
                        <label for="countBookInput">Тираж</label>
                        <input name="count_book" type="text" class="form-control" id="countBookInput" value="<?= $item['count_book']?>" placeholder="<?= $item['count_book']?>">
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

<script>

</script>