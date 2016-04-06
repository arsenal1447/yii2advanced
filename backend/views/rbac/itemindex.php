<?php
use yii\grid\GridView;
use yii\helpers\Html;
use app\models\Rbac;


// $type = $_GET['type']?$_GET['tppe']:''; 
echo  Html::a('添加角色',['create-item','type'=>1],['class'=>'btn btn-success']);

echo  Html::a('添加权限',['create-item','type'=>2],['class'=>'btn btn-success','style'=>'margin:20px;']);

echo  Html::a('查看权限',['itemindex','type'=>2],['class'=>'btn btn-success',]);

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
                            return  Html::a('删除',['delete-item','name'=>$model['name'],'type'=>$model['type']]);
                        }
                    ]
            ]
        ],

        'layout' => "\n{items}\n{summary}{pager}",

]);