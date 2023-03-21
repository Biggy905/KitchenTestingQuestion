<?php

use yii\widgets\LinkPager;

?>
<div class="row">
    <div class="col-12">
        <a href="<?= \yii\helpers\Url::to(['book/create']);?>">Создать</a>
    </div>
    <?php foreach ($list as $item) {?>
        <div class="col-3">
            <h2>Название: <?= $item['title'] ?? '';?></h2>
            <h2>Автор: <?= $item['publisher'] ?? '';?></h2>
            <h4>Издательский дом: <?= $item['publish_house'] ?? '';?></h4>
            <p>Тираж: <?= $item['count_book'] ?? '';?></p>
            <p>Создано: <?= $item['created_at'] ?? '';?></p>
        </div>
    <?php }?>

    <?php if (!empty($list)) {?>
    <div class="col-12">
        <div class="pagination justify-content-center">
            <?= LinkPager::widget([
                'pagination' => $pagination,
                'registerLinkTags' => true,
                'options' => [
                    'class' => 'pagination'
                ],
                'maxButtonCount' => 3,
                'linkOptions' => [
                    'class' => 'page-link',
                ],
                'pageCssClass' => 'page-item',
                'prevPageCssClass' => 'page-item',
                'nextPageCssClass' => 'page-item',
            ]); ?>
        </div>
    </div>
    <?php }?>
</div>