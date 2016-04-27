<?php

use yii\helpers\Html;
use frontend\modules\topic\models\Topic;
use common\helpers\Formatter;

/* @var $this yii\web\View */
?>
<div class="media">
    <?= Html::a(Html::tag('span', $model['post_reply_count'], ['class' => 'badge badge-reply-count']),
        ['/topic/default/view', 'id' => $model->post_id, '#' => 'comment' . $model['post_reply_count']], ['class' => 'pull-right']
    ); ?>

    <div class="media-left">
        <?php echo  Html::a(Html::img($model->user->user_avatar, ['class' => 'media-object']), ['/user/default/show', 'username' => $model->user['user_name']]   ); ?>
    </div>
    <div class="media-body">

        <div class="media-heading">
            <?= Html::a(Html::encode($model->post_title),
                ['/topic/default/view', 'id' => $model->post_id], ['title' => $model->post_title]
            ); ?>
            <?= ($model->post_status == Topic::STATUS_EXCELLENT) ? Html::tag('i', '', ['class' => 'fa fa-trophy excellent']) : null ?>
        </div>

        <div class="title-info">
            <?php
            if ($model->post_like_count) {
                echo Html::a(Html::tag('span', ' ' . $model->like_count . ' ', ['class' => 'fa fa-thumbs-o-up']),
                    ['/topic/default/view', 'id' => $model->id], ['class' => 'remove-padding-left']
                ), ' • ';
            }
            echo Html::a(
                $model->category->cat_name,
                ['/topic/default/index', 'node' => $model->category->cat_alias],
                ['class' => 'node']
            ), ' • ',
            Html::a(
                $model->user['user_name'],
                ['/user/default/show', 'username' => $model->user['user_name']]
            ), ' • ';
            if ($model->post_last_comment_user_name) {
                echo Html::tag('span',
                    Yii::t('frontend', 'last_by') .
                    Html::a(
                        ' ' . $model->post_last_comment_user_name . ' ',
                        ['/user/default/show', 'username' => $model->post_last_comment_user_name]) .
                    Yii::t('frontend', 'reply_at {datetime}', [
                        'datetime' => Formatter::relative($model->post_last_comment_time)
                    ])
                );
            } else {
                echo Html::tag('span',
                    Yii::t('frontend', 'created_at {datetime}', [
                        'datetime' => Formatter::relative($model->post_create)
                    ])
                );
            }
            ?>
        </div>
    </div>
</div>
