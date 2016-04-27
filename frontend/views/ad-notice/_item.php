<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>
<?php if ($model->notice_status){ ?>

<div class="media-left">
    <?php $img = "http://gravatar.com/avatar/" . md5($model->fromUser['user_email']) . "?s=48"; ?>
    <?= Html::a(Html::img($img, ['class' => 'media-object']),
        ['/ad-user/show', 'username' => $model->fromUser['user_name']]
    ); ?>
</div>
<div class="media-body">
    <div class="media-heading">
        <?= Html::tag('span', Html::a($model->fromUser['user_name'], ['/user/default/show', 'username' => $model->fromUser['user_name']])); ?>
        <span class="info"><?= $model->getlable($model->notice_type) ?>
            <?php //echo Html::a(Html::encode($model->post->post_title), ['/topic/default/view', 'id' => $model->post_id], ['title' => $model->post->post_title]); ?>
            <?= Html::a(Html::encode($model->post->post_title), ['/ad-post/view', 'id' => $model->notice_post_id], ['title' => $model->post->post_title]); ?>
        <span class="date pull-right">
            <i class="fa fa-clock-o"></i>
            <?= Html::tag('abbr', Yii::$app->formatter->asRelativeTime($model->notice_create), ['title' => Yii::$app->formatter->asDatetime($model->notice_create)]) ?>
        </span>
        <?php if ($index < $notifyCount) {
                echo Html::tag('span', Yii::t('app', 'New'), ['class' => 'new label label-warning']);
        } ?>
    </div>
    <div class="summary markdown">
        <?= HtmlPurifier::process(\yii\helpers\Markdown::process($model->notice_data, 'gfm')) ?>
    </div>
</div>

<?php }else{ ?>
    <div class="media-body">
        <?php echo  Yii::t('app', 'Data Deleted'); ?>
    </div>
<?php } ?>

<div class="media-right opts">
    <?= Html::a(
        Html::tag('i', '', ['class' => 'fa fa-trash']),
        ['/ad-notice/delete', 'id' => $model->notice_id],
        [
            'data' => [
                'method' => 'post',
            ],
        ]
    ) ?>
</div>
