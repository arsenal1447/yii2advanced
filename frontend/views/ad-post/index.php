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

            'post_id',
            'post_title',
            'post_cateid',
            'post_user',
            'post_content:html',
            // 'post_create',
            // 'post_update',
            // 'post_viewcount',
            // 'post_status',
            // 'post_deld',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'actions',
                'buttons'=>['update' => function ($url, $model, $key) {
                                 return Html::a('Update',$url);
                }],
                
            ],
        ],
    ]); ?>

</div>
