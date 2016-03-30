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
            'password' => 'foobared',
            'database' => 0,
        ],
        'cache'=>[
            'class'=>'yii\redis\Cache'
        ],
        'session'=>[
            'class'=>'yii\redis\Session'
        ],
    ],
    'timeZone'=>'Asia/Chongqing',//设置时区
];
