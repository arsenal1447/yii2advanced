<?php
namespace backend\assets;

use yii\web\AssetBundle;

class BackendAsset extends AssetBundle
{
//    public $sourcePath = '@bower/';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'backend\assets\FrontAsset',
        'backend\assets\MestuAsset',
        'backend\assets\AdminAsset',
    ];
}
