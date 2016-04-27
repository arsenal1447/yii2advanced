<?php
namespace frontend\widgets;

use common\models\PostMeta;
use DevGroup\TagDependencyHelper\NamingHelper;
use yii\caching\TagDependency;
use yii\helpers\ArrayHelper;

class Node extends \yii\bootstrap\Widget
{
    public function run()
    {
        $cacheKey = md5(__METHOD__);
        if (false === $items = \Yii::$app->cache->get($cacheKey)) {
            $parents = ArrayHelper::map(
                PostMeta::find()->where(['cat_parent' => null])->orWhere(['cat_parent' => 0])->orderBy(['cat_order' => SORT_ASC])->all(),
                'cat_id', 'cat_name'
            );
//             echo "<pre>";
//             print_R($parents);
//             die('21');
            foreach ($parents as $key => $value) {
                $nodes[$value] = PostMeta::find()->where(['cat_parent' => $key])->asArray()->all();
            }
            $items = $nodes;
            //一天缓存
            \Yii::$app->cache->set($cacheKey, $items, 86400,
                new TagDependency([
                    'tags' => [NamingHelper::getCommonTag(PostMeta::className())]
                ])
            );
        }

        return $this->render('node', [
            'nodes' => $items
        ]);
    }
}