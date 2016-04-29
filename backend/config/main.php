<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'user' => [
//             'identityClass' => 'common\models\User',
            'identityClass' => 'common\models\AdAdmin',
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
            'defaultRoles'=>array('guest'),//默认角色

            'itemTable' => 'ad_auth_item',//认证项表名称

            'itemChildTable' => 'ad_auth_item_child',//认证项父子关系

            'assignmentTable' => 'ad_auth_assignment',//认证项赋权关系
        ],
    ],
    'params' => $params,
];
