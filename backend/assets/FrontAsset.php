<?php
namespace backend\assets;

use yii\web\AssetBundle;

class FrontAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
