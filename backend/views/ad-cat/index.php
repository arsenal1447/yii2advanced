<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ad Cats');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-cat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ad Cat'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cat_id',
            'cat_name',
            'cat_parent',
            'cat_deld',
            'cat_status',
            // 'cat_create',
            // 'cat_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
