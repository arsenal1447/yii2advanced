<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'language' => 'zh-CN',//配置中文,希望成功
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        //rbac权限
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        //需要去除indx.php  打开此注释
        'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName'=>false,
                'rules' => [
                        '<alias:login|logout|about|tags|getstart|signup|contact|users|markdown|at-users>' => 'site/<alias>',//涉及到at功能
                        //                     '<alias:search>' => 'topic/default/<alias>',
                        'member/<username:\w+>' => 'ad-user/show',
                        'member/<username:\w+>/<alias:point|post|favorite>' => 'ad-user/<alias>',
                        //                     '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                //                     'member/<action>/<type:\w+>/<id:\d+>' => 'user/action/<action>',
                //                     'tag/<tag:\w+>' => 'topic/default/index/',
                //                     'node/<node:[0-9a-zA-Z\-]+>' => 'topic/default/index',
                //                     'topic/<id:[0-9a-zA-Z\-]+>' => 'topic/default/view',
                //                     '<module>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',
                ],
        ],
    ],
    'modules' => [
        //'user' => [
            //'class' => 'frontend\modules\user\Module',
        //],
        //'topic' => [
            //'class' => 'frontend\modules\topic\Module',
        //],
        //'nav' => [
            //'class' => 'frontend\modules\nav\Module',
        //],
//         'tweet' => [
//             'class' => 'frontend\modules\tweet\Module',
//         ],
    ],
    'params' => $params,
];
