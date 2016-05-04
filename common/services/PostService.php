<?php
namespace common\services;


use app\models\User;
use common\models\AdPost;
use frontend\models\AdNotice;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class PostService
{

    /**
     * 删除帖子
     * @param Post $post
     */
    public static function delete(AdPost $post)
    {
        $post->setAttributes(['post_status' => AdPost::STATUS_DELETED]);
        $post->save();
        Notification::updateAll(['post_status' => AdPost::STATUS_DELETED], ['post_id' => $post->id]);
    }

    /**
     * 过滤内容
     */
    public function filterContent($content)
    {
        $content = strtolower($content);
        $content = trim($content);
        $data = ['test', '测试'];
        if (in_array($content, $data)) {
            return false;
        }
        $action = ['+1', '赞', '很赞', '喜欢', '收藏', 'mark', '写的不错', '不错', '给力'];
        if (in_array($content, $action)) {
            return false;
        }
        return true;
    }


    /**
     * 分别转换@用户和#楼层
     * @param $content
     * @return mixed
     */
    public static function replace($content)
    {
        preg_match_all("/\#(\d*)/i", $content, $floor);
        if (isset($floor[1])) {
            foreach ($floor[1] as $key => $value) {
                $search = "#{$value}楼";
                $place = "[{$search}](#comment{$value}) ";
                $content = str_replace($search . ' ', $place, $content);
            }
        }

        $users = static::parse($content);
        foreach ($users as $key => $value) {
            $search = '@' . $value;
            $url = Url::to(['/ad-user/show', 'username' => $value]);
            $place = "[{$search}]({$url}) ";
            $content = str_replace($search . ' ', $place, $content);
        }

        return $content;
    }

    public static function parse($content)
    {
        preg_match_all("/(\S*)\@([^\r\n\s]*)/i", $content, $atlistTmp);
        $users = [];
        foreach ($atlistTmp[2] as $key => $value) {
            if ($atlistTmp[1][$key] || strlen($value) > 25) {
                continue;
            }
            $users[] = $value;
        }
        return ArrayHelper::map(\common\models\User::find()->where(['user_name' => $users])->all(), 'user_id', 'user_name');
    }
}