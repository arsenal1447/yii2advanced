<?php
namespace backend\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $sourcePath = '@bower/sb-admin-2-assets/dist';
    public $css = [
        'css/sb-admin-2.css',
//        'font-awesome/css/font-awesome.min.css',
//        'metisMenu/dist/metisMenu.min.css',
    ];
    public $js = [
//        'metisMenu/dist/metisMenu.min.js',
        'js/sb-admin-2.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
