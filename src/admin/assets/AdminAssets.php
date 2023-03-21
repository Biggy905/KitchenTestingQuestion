<?php

namespace admin\assets;

use yii\web\AssetBundle;

final class AdminAssets extends AssetBundle
{
    public $sourcePath = '@lte';

    public $css =[
        'adminlte/plugins/fontawesome-free/css/all.min.css',
        'adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'adminlte/dist/css/adminlte.min.css',
    ];

    public $js = [
        'adminlte/plugins/jquery/jquery.min.js',
        'adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminlte/dist/js/adminlte.min.js',
    ];
}
