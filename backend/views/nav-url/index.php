<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Nav Urls');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-url-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create Nav Url'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'url_id',
            'url_nav_id',
            'url_title',
            'url_url:url',
            'url_description',
            // 'order',
            // 'user_id',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
