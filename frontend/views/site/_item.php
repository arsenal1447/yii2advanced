<?php

use yii\helpers\Html;
?>
<li class="list-group-item media col-sm-6 mt0">

    <?= Html::a(Html::tag('span', $model['post_reply_count'], ['class' => 'badge badge-reply-count']),
        ['/ad-post/view', 'id' => $model->post_id, '#' => 'comment' . $model['post_reply_count']], ['class' => 'pull-right']
    ); ?>

    <div class="avatar pull-left">
        <?= Html::a(Html::img($model->user->user_avatar, ['class' => 'media-object']),
            ['/ad-user/show', 'username' => $model->user['user_name']]
        ); ?>
    </div>

    <div class="infos">

        <div class="media-heading">
            <?= Html::a($model->post_title,
                ['/ad-post/view', 'id' => $model->post_id], ['title' => $model->post_title]
            ); ?>
            <?= ($model->post_status == 2) ? Html::tag('i', '', ['class' => 'fa fa-trophy excellent']) : null ?>
        </div>
        <div class="media-body meta title-info">
            <?php
            if ($model->post_like_count) {
                echo Html::a(Html::tag('span', ' ' . $model->post_like_count . ' ', ['class' => 'fa fa-thumbs-o-up']),
                    ['/ad-post/view', 'id' => $model->post_id], ['class' => 'remove-padding-left']
                ), '•';
            }
            echo Html::a(
                $model->category->cat_name,
                ['/ad-post/index', 'node' => $model->category->cat_alias],
                ['class' => 'node']
            ), '•',
            Html::a(
                $model->user['user_name'],
                ['/ad-user/show', 'username' => $model->user['user_name']]
            ), '•',
            Html::tag('span', Yii::$app->formatter->asRelativeTime($model->post_create));
            ?>
        </div>

    </div>

</li>