<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-3">
            <a href="<?= \yii\helpers\Url::to(['book/create'])?>">Создать</a>
            <a href="<?= \yii\helpers\Url::to([ $item['id'] . '/book/update'])?>">Редактировать</a>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $item['title']?></h3>
                </div>
                <div class="card-body">
                    <h4><b>Автор:</b> <?= $item['publisher']?></h4>
                    <h4><b>Издательский дом:</b> <?= $item['publish_house']?></h4>
                    <p><b>Тираж:</b> <?= $item['count_book']?></p>
                    <p><b>Создан:</b> <?= $item['created_at']?></p>
                </div>
            </div>
        </div>
    </div>
</div>
