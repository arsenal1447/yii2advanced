<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ad Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ad Post'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//             'post_id',
//             'post_title',
            [
                'attribute'=>'post_title',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a($data->post_title,['view','id'=>$data->post_id]);
                },
            ],
            [
                'attribute'=>'post_cateid',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a(\common\models\AdCat::getCateName($data->post_cateid),['cat','cate_id'=>$data->post_cateid]);
                },
            ],
            [
                'attribute'=>'post_user',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a(\common\models\User::getAuthName($data->post_user),['ad-user/view','id'=>$data->post_user]);
                },
            ],
            'post_content:html',
            [
                'attribute'=>'post_create',
                'format'=>'html',
                'value'=>function ($data) {
                    return \common\models\AdCat::convertDate($data->post_create);
                 }
            ],
            // 'post_update',
            // 'post_viewcount',
            // 'post_status',
            // 'post_deld',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'actions',
                'buttons'=>[
                    'update' => function ($url, $model, $key) {
                                 return Html::a('编辑',$url);
                     },
                    'delete' => function ($url, $model, $key) {
                                 return Html::a('删除',$url);
                     },
                    'view' => function ($url, $model, $key) {
                                 return Html::a('查看',$url);
                     },
                ],
                
            ],
        ],
    ]); ?>

</div>
