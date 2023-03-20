<?php

use \common\containers\BaseContainer;
use \common\containers\CommonContainer;

$baseConfig = BaseContainer::getContainers();
$commonConfig = CommonContainer::getContainers();

$config = array_merge_recursive(
    $baseConfig,
    $commonConfig,
);

return $config;
