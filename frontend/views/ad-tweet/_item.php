<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<div class="media">

    <div class="media-left">
        <?= Html::a(Html::img($model->user->user_avatar, ['class' => 'media-object']),
            ['/ad-user/show', 'username' => $model->user['user_name']]
        ); ?>
    </div>
    <div class="media-body">
        <div class="fade-info">
            <?= Html::a(
                $model->user['user_name'],
                ['/user/default/show', 'username' => $model->user['user_name']]
            ). '•'.
            Html::tag('span', \common\helpers\Formatter::relative($model->post_update));
            ?>
        </div>

        <div class="media-heading">
            <?= \yii\helpers\HtmlPurifier::process(\yii\helpers\Markdown::process($model->post_content, 'gfm')) ?>
        </div>

        <div class="title-info pull-right">
            <?php if ($model->isCurrent()) {
                echo Html::a(
                    Html::tag('i', '', ['class' => 'fa fa-thumbs-o-up']) . ' ' . Html::tag('span', $model->post_like_count . ' '),
                    'javascript:;'
                );
                if ($model->post_reply_count == 0) {
                    echo Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-trash']) . ' 删除',
                        ['/ad-tweet/delete', 'id' => $model->post_id],
                        [
                            'data' => [
                                'confirm' => "您确认要删除吗？",
                                'method' => 'post',
                            ],
                        ]
                    );
                }
            } else {
                echo Html::a(
                    Html::tag('i', '', ['class' => 'fa fa-thumbs-o-up']) . ' ' . Html::tag('span', $model->post_like_count . ' '),
                    '#',
                    [
                        'data-do' => 'like',
                        'data-id' => $model->post_id,
                        'data-type' => $model->post_type,
                        'class' => ($model->like) ? 'active' : ''
                    ]
                );
            } ?>

        </div>
    </div>
</div>
