<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
//         'cache' => [
//             'class' => 'yii\caching\FileCache',
//         ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'password' => 'zxx123456',
            'database' => 0,
        ],
//         'redisCache'=>[
//             'class'=>'yii\redis\Cache'
//         ],
//         'session'=>[
//             'class'=>'yii\redis\Session'
//         ],
        'session' => [
                'class' => 'yii\web\DbSession',
                // 'db' => 'mydb',  // 数据库连接的应用组件ID，默认为'db'.
                'sessionTable' => 'ad_session', // session 数据表名，默认为'session'.
        ],
        'cache' => [
                'class' => 'yii\caching\FileCache',
                //'class' => 'yii\caching\ApcCache',
                'cachePath' => '@backend/runtime/cache',
        ],
        'setting' => [
                'class' => 'funson86\setting\Setting',
        ],
            
//                 需要去除indx.php  打开此注释
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'=>false
        ],

        'i18n' => [
                'translations' => [
                        'frontend*' => [
                                'class' => 'yii\i18n\PhpMessageSource',
                                'basePath' => '@common/messages',
                        ],
                        'backend*' => [
                                'class' => 'yii\i18n\PhpMessageSource',
                                'basePath' => '@common/messages',
                        ],
                        'common*' => [
                                'class' => 'yii\i18n\PhpMessageSource',
                                'basePath' => '@common/messages',
                        ],
                ],
        ],
    ],
    'timeZone'=>'Asia/Chongqing',//设置时区
    'modules' => [
            'topic' => [
                    'class' => 'frontend\modules\topic\Module',
            ],
            'nav' => [
                    'class' => 'frontend\modules\nav\Module',
            ],
            'merit' => [
                'class' => 'yiier\merit\Module',
            ],
    ],
    'controllerMap' => [
            'backup' => [
                    'class' => 'yiier\backup\controllers\BackupController',
            ]
    ]
];
