<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ad Notices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-notice-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ad Notice'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'notice_id',
            'notice_from_user_id',
            'notice_user_id',
            'notice_post_id',
            'notice_comment_id',
            // 'notice_type',
            // 'notice_data:ntext',
            // 'notice_status',
            // 'notice_create',
            // 'notice_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
