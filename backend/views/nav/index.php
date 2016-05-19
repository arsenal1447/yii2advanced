<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Navs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create Nav'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nav_id',
            'nav_name',
            'nav_alias',
            'nav_order',
            'nav_create',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
