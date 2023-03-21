<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $item['username']?></h3>
                </div>
                <div class="card-body">
                    <h4><b>Статус:</b> <?= $item['status']?></h4>
                    <p><b>Создан:</b> <?= $item['created_at']?></p>
                </div>
            </div>
        </div>
    </div>
</div>
