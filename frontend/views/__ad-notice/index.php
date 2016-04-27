<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
use common\models\AdPost;
use common\models\Reply;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'User Notice');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-notice-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //echo Html::a(Yii::t('app', 'Create Ad Notice'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'notice_id',
//             'notice_from_user_id',
            [
                'attribute'=>'notice_from_user_id',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a(User::getAuthName($data->notice_from_user_id),['view','id'=>$data->notice_from_user_id]);
                },
            ],
            [
                'attribute'=>'notice_user_id',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a(User::getAuthName($data->notice_user_id),['view','id'=>$data->notice_user_id]);
                },
            ],
            [
                'attribute'=>'notice_post_id',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a(AdPost::getTitleById($data->notice_post_id),['ad-post/view','id'=>$data->notice_post_id]);
                },
            ],
            //
            [
                'attribute'=>'notice_comment_id',
                'format'=>'html',
                'value' => function ($data) {
                    return Reply::getReplyById($data->notice_comment_id);
                },
            ],
            // 'notice_type',
            // 'notice_data:ntext',
            // 'notice_status',
            // 'notice_create',
            // 'notice_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
