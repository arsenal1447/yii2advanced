<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'password' => 'zxx123456',
            'database' => 0,
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'github' => [
                    'class' => 'yii\authclient\clients\GitHub',
                    'clientId' => 'github_client_id',
                    'clientSecret' => 'github_client_secret',
                    'viewOptions' => [
                        'popupWidth' => 820,
                        'popupHeight' => 600,
                    ]
                 ],
            ],
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

//         //需要去除indx.php  打开此注释
//         'urlManager' => [
//             'enablePrettyUrl' => true,
//             'showScriptName'=>false,
//             'rules' => [
//                     '<alias:login|logout|about|tags|getstart|signup|contact|users|markdown|at-users>' => 'site/<alias>',//涉及到at功能
// //                     '<alias:search>' => 'topic/default/<alias>',
//                     'member/<username:\w+>' => 'ad-user/show',
//                     'member/<username:\w+>/<alias:point|post|favorite>' => 'ad-user/<alias>',
// //                     '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
// //                     'member/<action>/<type:\w+>/<id:\d+>' => 'user/action/<action>',
// //                     'tag/<tag:\w+>' => 'topic/default/index/',
// //                     'node/<node:[0-9a-zA-Z\-]+>' => 'topic/default/index',
// //                     'topic/<id:[0-9a-zA-Z\-]+>' => 'topic/default/view',
// //                     '<module>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',
//             ],
//         ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'as afterLogin' => 'frontend\behaviors\AfterLoginBehavior',
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
