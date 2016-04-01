<?php
use yii\grid\GridView;
use yii\helpers\Html;
use app\models\Rbac;

echo  Html::a($type == 1 ?'添加角色':'添加权限',['create-item','type'=>$type],['class'=>'btn btn-success']);

echo "<br>";
echo "<br>";

echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' =>[
            ['class' => 'yii\grid\SerialColumn'],
//                 'description:text:名称',
                [
                    'attribute'=>'description',
                    'format'=>'html',
                    'value'=>function($model, $url){
                            return Html::a($model['description'],['view-item','name'=>$model['name']]);
                    }
                ],
//                 'name:text:标识',
                [
                    'attribute'=>'name',
                    'format'=>'html',
                    'value'=>function($model){
                        return $model['name'];
                     }
                ],
                [
                    'attribute'=>'type',
                    'format'=>'html',
                    'value'=>function($model, $key, $index, $column){
                        if($model['type']==1)return '角色'; else return '权限';}
                ],
                [
                    'attribute'=>'rule_name',
                    'format'=>'html',
                    'value'=>function($model){
                        return $model['rule_name'];
                    }
                ],
//                 'rule_name:text:规则名称',
                [
                    'attribute'=>'created_at',
                    'format'=>'html',
                    'value'=>function($model){
                        return Rbac::convertDate($model['created_at']);
                    }
                ],
                [
                    'attribute'=>'updated_at',
                    'format'=>'html',
                    'value'=>function($model){
                        return Rbac::convertDate($model['updated_at']);
                    }
                ],
//                 'created_at:date:创建日期',
//                 'updated_at:date:修改时间',

            [
                'class' => 'yii\grid\ActionColumn',
                    'header' => '操作',
                    'template' => '{view}  {update}  {delete}',
                    'buttons' => [
                        'view' => function ($url, $model, $key) {
                            return  Html::a('查看',['view-item','name'=>$model['name']]);
                        },
                        'update' => function ($url, $model, $key) {
                            return  Html::a('更新',['update-item','name'=>$model['name']]);
                         },
                        'delete' => function ($url, $model, $key) {
                            return  Html::a('删除',['delete-item','name'=>$model['name']]);
                         }
                    ]
            ]
        ],

        'layout' => "\n{items}\n{summary}{pager}",

]);