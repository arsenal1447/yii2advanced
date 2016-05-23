<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PaceAsset extends AssetBundle
{
    public $sourcePath = '@bower/pace';
    public $css = [
        'themes/green/pace-theme-minimal.css',
    ];
    public $js = [
        'pace.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
