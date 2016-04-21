<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ad User Metas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-user-meta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ad User Meta'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'meta_id',
            'meta_user_id',
            'meta_type',
            'meta_value',
            'meta_target_id',
            // 'meta_target_type',
            // 'meta_create',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
