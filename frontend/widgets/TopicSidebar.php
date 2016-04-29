<?php
/**
 * author     : forecho <caizhenghai@gmail.com>
 * createTime : 15/4/18 下午4:13
 * description:
 */

namespace frontend\widgets;

use common\helpers\Arr;
use common\models\PostMeta;
use common\models\RightLink;
use frontend\models\Topic;
use frontend\models\Donate;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class TopicSidebar extends \yii\bootstrap\Widget
{
    public $type = 'node';
    public $node;
    public $tags;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $tipsModel = ArrayHelper::map(
            RightLink::find()->where(['link_type' => RightLink::RIGHT_LINK_TYPE_TIPS])->all(),
            'link_content',
            'link_title'
        );
        $tips = array_rand($tipsModel);

        $recommendResources = ArrayHelper::map(
            RightLink::find()->where(['link_type' => RightLink::RIGHT_LINK_TYPE_RSOURCES])->all(),
            'link_title',
            'link_url'
        );

        $links = RightLink::find()->where(['link_type' => RightLink::RIGHT_LINK_TYPE_LINKS])->all();

        $sameTopics = [];
        if ($this->node) {
            $sameTopics = ArrayHelper::map(
                Topic::find()
                    ->where('post_status >= :status', [':status' => Topic::STATUS_ACTIVE])
                    ->andWhere(['post_meta_id' => $this->node->cat_id, 'post_type' => 'topic'])
                    ->limit(200)->all(),
                'title',
                function ($e) {
                    return Url::to(['/ad-post/view', 'id' => $e->id]);
                }
            );
            if (count($sameTopics) > 10) {
                $sameTopics = Arr::arrayRandomAssoc($sameTopics, 10);
            }

            if ($this->type == 'view' && (in_array($this->node->cat_alias, params('donateNode')) || array_intersect(explode(',', $this->tags), params('donateTag')))) {
                $donate = Donate::findOne(['user_id' => Topic::findOne(['id' => request()->get('id')])->user_id, 'status' => Donate::STATUS_ACTIVE]);
            }
        }

        return $this->render('topicSidebar', [
            'category' => PostMeta::blogCategory(),
            'config' => ['type' => $this->type, 'node' => $this->node],
            'sameTopics' => $sameTopics,
            'tips' => $tips,
            'donate' => isset($donate) ? $donate : [],
            'recommendResources' => $recommendResources,
            'links' => $links,
        ]);
    }
}