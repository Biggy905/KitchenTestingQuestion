<div class="row">
    <div class="col-12 p-3">
        <a href="<?= \yii\helpers\Url::to(['book/list'], ['page' => 1, 'limit' => 12])?>">Вернуться к списку</a>
    </div>
    <div class="col-5">
        <h2>Название: <?= $item['title'] ?? '';?></h2>
        <h2>Автор: <?= $item['publisher'] ?? '';?></h2>
        <h4>Издательский дом: <?= $item['publish_house'] ?? '';?></h4>
        <p>Тираж: <?= $item['count_book'] ?? '';?></p>
        <p>Создано: <?= $item['created_at'] ?? '';?></p>
    </div>
</div>