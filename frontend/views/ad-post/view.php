<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Markdown;
use common\models\AdPost;

/* @var $this yii\web\View */
/* @var $model common\Models\Post */

$this->title = $model->post_title;
\frontend\assets\AtJsAsset::register($this);
?>

<div class="col-md-9 topic-view" contenteditable="false" style="">
    <div class="panel panel-default">
        <div class="panel-heading media clearfix">
            <div class="media-body">
                <?= Html::tag('h1', Html::encode($model->post_title), ['class' => 'media-heading']); ?>
                <div class="info">
                    <?= Html::a(
                        $model->category->cat_name,
                        ['/ad-post/', 'node' => $model->category->cat_alias],
                        ['class' => 'node']
                    ) ?>
                    ·
                    <?= Html::a($model->user['user_name'], ['/ad-user/show', 'username' => $model->user['user_name']]) ?>
                    ·
                    于 <?= Html::tag('abbr', Yii::$app->formatter->asRelativeTime($model->post_create), ['title' => Yii::$app->formatter->asDatetime($model->post_create)]) ?>发布
                    ·
                    <?php //echo $model->post_view_count ?> <!-- 次阅读 -->
                    <?= AdPost::getViewCount($model->post_id); ?> 次阅读
                </div>
            </div>
            <div class="avatar media-right">
                <?= Html::a(Html::img($model->user->userAvatar, ['class' => 'media-object avatar-48']),
                    ['/ad-user/show', 'username' => $model->user['user_name']]
                ); ?>
            </div>
        </div>
        <div class="panel-body article">
            <?= HtmlPurifier::process(Markdown::process($model->post_content, 'gfm')) ?>
            <?php if ($model->post_status == 2): ?>
                <div class="ribbon-excellent">
                    <i class="fa fa-trophy excellent"></i> 本帖已被设为精华帖！
                </div>
            <?php endif ?>
        </div>
        <div class="panel-footer clearfix opts">
            <?php
                $like = Html::a(
                    Html::tag('i', '', ['class' => 'fa fa-thumbs-o-up']) . ' ' . Html::tag('span', $model->post_like_count) . ' 个赞',
                    '#',
                    [
                        'data-do' => 'like',
                        'data-id' => $model->post_id,
                        'data-type' => $model->post_type,
                        'class' => ($model->like) ? 'active': ''
                    ]
                );
                $hate = Html::a(
                    Html::tag('i', '', ['class' => 'fa fa-thumbs-o-down']) . ' 踩',
                    '#',
                    [
                        'data-do' => 'hate',
                        'data-id' => $model->post_id,
                        'data-type' => $model->post_type,
                        'class' => ($model->hate) ? 'active': ''
                    ]
                );
                $follow = Html::a(
                    Html::tag('i', '', ['class' => 'fa fa-eye']) . ' 关注',
                    '#',
                    [
                        'data-do' => 'follow',
                        'data-id' => $model->post_id,
                        'data-type' => $model->post_type,
                        'class' => ($model->follow) ? 'active': ''
                    ]
                );
                $thanks = Html::a(
                    Html::tag('i', '', ['class' => 'fa fa-heart-o']) . ' 感谢',
                    '#',
                    [
                        'data-do' => 'thanks',
                        'data-id' => $model->post_id,
                        'data-type' => $model->post_type,
                        'class' => ($model->thanks) ? 'active': ''
                    ]
                );
                $favorite = Html::a(
                    Html::tag('i', '', ['class' => 'fa fa-bookmark']) . ' 收藏',
                    '#',
                    [
                        'data-do' => 'favorite',
                        'data-id' => $model->post_id,
                        'data-type' => $model->post_type,
                        'class' => ($model->favorite) ? 'active': ''
                    ]
                );

                if($model->isCurrent()){
                    echo Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-thumbs-o-up']) . ' ' . Html::tag('span', $model->post_like_count) . ' 个赞',
                        'javascript:;'
                    );
                } else {
                    echo $like, $hate;
                    echo $thanks;
                }
                echo $follow;
                echo $favorite;

                if ($admin) {
                    $class = $model->status == 2 ? ['class' => 'active'] : null;
                    echo Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-trophy']) . ' 加精',
                        ['/ad-post/excellent', 'id' => $model->post_id],
                        $class
                    );
                }
            ?>
            <?php if ($model->isCurrent() || \common\models\User::getThrones()): ?>
                <span class="pull-right">
                    <?= Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-pencil']) . ' 修改',
                        ['/ad-post/update', 'id' => $model->post_id]
                    ) ?>
              <?php if($model->post_reply_count == 0): ?>
                    <?= Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-trash']) . ' 删除',
                        ['/ad-post/delete', 'id' => $model->post_id],
                        [
                            'data' => [
                                'confirm' => "您确认要删除文章「{$model->post_title}」吗？",
                                'method' => 'post',
                            ],
                        ]
                    ) ?>
                    <?php endif?>
                </span>
            <?php endif ?>

        </div>
    </div>

    <?= $this->render(
//         '@frontend/modules/topic/views/comment/index',
        '@frontend/views/ad-reply/index',
        ['model' => $model, 'dataProvider' => $dataProvider]
    ) ?>

    <?= $this->render(
//         '@frontend/modules/topic/views/comment/create',
        '@frontend/views/ad-reply/create',
        ['model' => $comment, 'post' => $model]
    ) ?>

</div>
<?= \frontend\widgets\TopicSidebar::widget([
    'type' => 'view',
    'node' => $model->category,
    'tags' => $model->post_tags
]); ?>