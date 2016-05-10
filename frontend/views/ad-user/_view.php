<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Markdown;
use common\models\AdPost;
use frontend\models\Tweet;

?>
<?php switch ($this->context->action->id) {
    case 'show':
//         if($model->post_type==AdPost::TYPE){
//             $str = 'ad-post';
//         }elseif($model->post_type==Tweet::TweetTYPE){
//             $str = 'ad-tweet';
//         }
        // 评论
        echo Html::a(
            Html::encode($model->post->post_title),
            ["/{ad-post}/view", 'id' => $model->post->post_user_id],
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

        echo Html::a($model->category->cat_name, ["/{$model->topic->type}/index", 'node' => $model->category->cat_alias]);
        echo ' • ';
        echo Html::beginTag('span');
        echo "{$model->post_like_count} 个赞 • {$model->post_reply_count} 条回复";
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
            Html::encode($model->post_title),
            ["/{$model->post_type}/view", 'id' => $model->post_id],
            ['class' => 'list-group-item-heading']
        );
        echo Html::tag('span', Yii::$app->formatter->asRelativeTime($model->post_create), ['class' => 'ml5 fade-info']);
        echo Html::beginTag('p', ['class' => 'list-group-item-text title-info']);
        echo Html::a($model->category->cat_name, ["/{$model->post_type}/index", 'node' => $model->category->cat_alias]);
        echo ' • ';
        echo Html::beginTag('span');
        echo "{$model->post_like_count} 个赞 • {$model->post_reply_count} 条回复";
        echo Html::endTag('span');
        echo Html::endTag('p');
        break;
} ?>