<?php
namespace backend\assets;

use yii\web\AssetBundle;

class MestuAsset extends AssetBundle
{
    public $sourcePath = '@bower/metisMenu/dist';
    public $css = [
        'metisMenu.min.css',
    ];
    public $js = [
        'metisMenu.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
