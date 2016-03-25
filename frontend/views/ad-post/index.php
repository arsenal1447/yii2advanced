<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ad Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ad Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'post_id',
            'post_user',
            'post_content:ntext',
            'post_create',
            'post_update',
            // 'post_viewcount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
