<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ad Replies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-reply-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ad Reply'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reply_id',
            'reply_post',
            'reply_content:ntext',
            'reply_create',
            'reply_user_id',
            // 'reply_ip',
            // 'reply_user_name',
            // 'reply_title',
            // 'reply_update:datetime',
            // 'reply_support',
            // 'reply_against',
            // 'reply_floor',
            // 'reply_note',
            // 'reply_deld',
            // 'reply_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
