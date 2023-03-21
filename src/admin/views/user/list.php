<?php

use yii\widgets\LinkPager;

?>
<div class="container-fluid">
    <div class="row">
        <?php foreach($list as $item) {?>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $item['username']?></h3>
                </div>
                <div class="card-body">
                    <h4><b>Статус:</b> <?= $item['status']?></h4>
                    <p><b>Создан:</b> <?= $item['created_at']?></p>
                </div>
                <div class="card-footer">
                    <a href="<?= \yii\helpers\Url::to([$item['id'] . '/user'])?>">Посмотреть</a>
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
