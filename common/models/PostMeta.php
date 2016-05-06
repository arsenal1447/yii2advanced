<?php

namespace common\models;

use DevGroup\TagDependencyHelper\CacheableActiveRecord;
use DevGroup\TagDependencyHelper\TagDependencyTrait;
use Yii;
use yii\helpers\ArrayHelper;
use common\components\db\MyActiveRecord;

/**
 * This is the model class for table "ad_cat".
 *
 * @property integer $cat_id
 * @property string $name
 * @property string $alias
 * @property string $type
 * @property string $description
 * @property string $count
 * @property string $order
 * @property string $created_at
 * @property string $updated_at
 */
class PostMeta extends MyActiveRecord
{

    use TagDependencyTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_cat}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'class' => CacheableActiveRecord::className(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_count', 'cat_order', 'cat_create', 'cat_update', 'cat_parent'], 'integer'],
            [['cat_name'], 'string', 'max' => 100],
            [['cat_alias', 'type'], 'string', 'max' => 32],
            [['cat_desc'], 'string', 'max' => 255],
            [['cat_alias'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'ID',
            'cat_name' => '名称',
            'cat_parent' => '父级分类',
            'cat_alias' => '变量（别名）',
            'cat_type' => '项目类型',
            'cat_desc' => '选项描述',
            'cat_count' => '项目所属内容个数',
            'cat_order' => '项目排序',
            'cat_create' => '创建时间',
            'cat_update' => '修改时间',
        ];
    }

    public static function blogCategory()
    {

        return ArrayHelper::map(static::find()->where(['cat_type' => 'blog_category'])->all(), 'cat_id', 'cat_name');
    }

    public static function topicCategory()
    {
        $parents = ArrayHelper::map(
            static::find()->where(['cat_parent' => null])->orWhere(['cat_parent' => 0])->orderBy(['cat_order' => SORT_ASC])->all(),
            'cat_id', 'cat_name'
        );
        $nodes = [];
        foreach ($parents as $key => $value) {
            $nodes[$value] = ArrayHelper::map(static::find()->where(['cat_parent' => $key])->asArray()->all(), 'cat_id', 'cat_name');
        }
        return $nodes;
    }

    /**
     * 返回无人区节点id
     * @return mixed|static
     */
    public static function noManLandId()
    {
        $postMeta = self::find()->where(['cat_alias' => 'no-man-land'])->one();
        if ($postMeta) {
            return $postMeta->cat_id;
        }
        return $postMeta;
    }

    public function getParents()
    {
        return ArrayHelper::map(static::find()->where(['cat_parent' => null])->orWhere(['cat_parent' => 0])->all(), 'cat_id', 'cat_name');
    }

    public function getTypes()
    {
        return [
            'topic_category' => '社区分类',
            'blog_category' => '文章分类',
        ];
    }

    public static function topic()
    {
        return ArrayHelper::map(static::find()->where(['cat_type' => 'topic_category'])->all(), 'cat_alias', 'cat_name');
    }
}
