<?php

use yii\widgets\LinkPager;

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-3">
            <a href="<?= \yii\helpers\Url::to(['book/create'])?>">Создать</a>
        </div>
        <?php foreach($list as $item) {?>
        <div class="col-md-4">
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
                <div class="card-footer">
                    <a href="<?= \yii\helpers\Url::to([$item['id'] . '/book'])?>">Посмотреть</a>
                </div>
            </div>
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
</div>
