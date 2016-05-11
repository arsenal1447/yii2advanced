<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Markdown;
$index += +1 + $widget->dataProvider->pagination->page * $widget->dataProvider->pagination->pageSize;
?>
<?php if (!$model->reply_status): ?>
    <div class="deleted text-center"><?= $index ?>楼 已删除.</div>
<?php else: ?>
    <div class="avatar pull-left">
        <?= Html::a(Html::img($model->user->userAvatar, ['class' => 'media-object avatar-48']),
            ['/ad-user/show', 'username' => $model->user['user_name']]
        ); ?>
    </div>

    <div class="infos" id="comment<?= $index ?>">

        <div class="media-heading meta info opts">
            <?php
            echo Html::a($model->user['user_name'], ['/ad-user/show', 'username' => $model->user['user_name']], ['class' => 'author']), '•',
            Html::a("#{$index}", "#comment{$index}", ['class' => 'comment-floor']), '•',
            Html::tag('addr', Yii::$app->formatter->asRelativeTime($model->reply_create), ['title' => Yii::$app->formatter->asDatetime($model->reply_create)]);
            ?>

            <span class="opts pull-right">
                <?php

                if($model->isCurrent()){
                    echo Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-thumbs-o-up']) . ' ' . Html::tag('span', $model->reply_like_count) . ' 个赞',
                        'javascript:;'
                    );

                    echo Html::a('',
                        ['/ad-reply/update', 'id' => $model->reply_id],
                        ['title' => '修改回帖', 'class' => 'fa fa-pencil']
                    );
                    echo Html::a('',
                        ['/ad-reply/delete', 'id' => $model->reply_id],
                        [
                            'title' => '删除评论',
                            'class' => 'fa fa-trash',
                            'data' => [
                                'confirm' => "您确认要删除评论吗？",
                                'method' => 'post',
                            ],
                        ]
                    );
                } else{
                    echo Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-thumbs-o-up']) . ' ' . Html::tag('span', $model->reply_like_count) . ' 个赞',
                        '#',
                        [
                            'data-do' => 'like',
                            'data-id' => $model->reply_id,
                            'data-type' => 'comment',
                            'class' => ($model->like) ? 'active': ''
                        ]
                    );
                    echo Html::a('', '#',
                        [
                            'data-username' => $model->user['user_name'],
                            'data-floor' => $index,
                            'title' => '回复此楼',
                            'class' => 'fa fa-mail-reply btn-reply'
                        ]
                    );
                }
                ?>
            </span>

        </div>

        <div class="media-body markdown-reply content-body">
            <?= HtmlPurifier::process(Markdown::process($model->reply_content, 'gfm')) ?>
        </div>
    </div>
<?php endif ?>