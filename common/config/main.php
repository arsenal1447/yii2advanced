<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'password' => 'zxx123456',
            'database' => 0,
        ],
        'cache'=>[
            'class'=>'yii\redis\Cache'
        ],
        'session'=>[
            'class'=>'yii\redis\Session'
        ],
            
        //需要去除indx.php  打开此注释
//         'urlManager' => [
//             'enablePrettyUrl' => true,
//             'showScriptName'=>false
//         ],
    ],
    'timeZone'=>'Asia/Chongqing',//设置时区
    'modules' => [
            'topic' => [
                    'class' => 'frontend\modules\topic\Module',
            ],
            'nav' => [
                    'class' => 'frontend\modules\nav\Module',
            ],
    ],
];
