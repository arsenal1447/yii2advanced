<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Markdown;
use common\models\AdPost;
use frontend\models\Tweet;

?>
<?php
    $str = '';
    if($model->post->post_type==AdPost::TYPE){
        $str = 'ad-post';
    }elseif($model->post->post_type==Tweet::TweetTYPE){
        $str = 'ad-tweet';
    }
 switch ($this->context->action->id) {
    case 'show':
        // 评论
        echo Html::a(
            Html::encode($model->post->post_title),
            ["/{$str}/view", 'id' => $model->post->post_user_id],
            ['class' => 'list-group-item-heading']
        );
        echo Html::tag('span', Yii::$app->formatter->asRelativeTime($model->reply_create), ['class' => 'ml5 fade-info']);
        echo Html::tag('p', HtmlPurifier::process(Markdown::process($model->reply_content, 'gfm')));
        break;
    case 'favorite':
        // 收藏
        echo Html::tag('i', '', ['class' => 'fa fa-bookmark red mr5']);

        echo Html::a(
            Html::encode($model->topic->title),
            ["/{$model->topic->type}/view", 'id' => $model->topic->id],
            ['class' => 'list-group-item-heading']
        );
        echo Html::tag('span', Yii::$app->formatter->asRelativeTime($model->topic->created_at), ['class' => 'ml5 fade-info']);
        echo Html::beginTag('p', ['class' => 'list-group-item-text title-info']);

        echo Html::a($model->topic->category->name, ["/{$model->topic->type}/index", 'node' => $model->topic->category->alias]);
        echo ' • ';
        echo Html::beginTag('span');
        echo "{$model->topic->like_count} 个赞 • {$model->topic->comment_count} 条回复";
        echo Html::endTag('span');
        echo Html::endTag('p');
        break;

    case 'point':
        // 积分
        echo Html::tag('i', '', ['class' => 'fa fa-money red mr5']);
        echo Html::encode($model->description);
        echo Html::tag('span', Yii::$app->formatter->asRelativeTime($model->created_at), ['class' => 'ml5 fade-info']);
        break;
    default:
        // post 文章
        echo Html::a(
            Html::encode($model->title),
            ["/{$model->type}/view", 'id' => $model->id],
            ['class' => 'list-group-item-heading']
        );
        echo Html::tag('span', Yii::$app->formatter->asRelativeTime($model->created_at), ['class' => 'ml5 fade-info']);
        echo Html::beginTag('p', ['class' => 'list-group-item-text title-info']);
        echo Html::a($model->category->cat_name, ["/{$model->type}/index", 'node' => $model->category->alias]);
        echo ' • ';
        echo Html::beginTag('span');
        echo "{$model->like_count} 个赞 • {$model->comment_count} 条回复";
        echo Html::endTag('span');
        echo Html::endTag('p');
        break;
} ?>