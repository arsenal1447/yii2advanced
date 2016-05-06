<?php

namespace common\models;

use common\components\db\MyActiveRecord;
use Yii;

/**
 * This is the model class for table "right_link".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $image
 * @property string $content
 * @property integer $type
 * @property string $created_user
 * @property integer $created_at
 * @property integer $updated_at
 */
class RightLink extends MyActiveRecord
{
    /**
     * 推荐资源
     */
    const RIGHT_LINK_TYPE_RSOURCES = 1;
    /**
     * 小贴士
     */
    const RIGHT_LINK_TYPE_TIPS = 2;
    /**
     * 友情链接
     */
    const RIGHT_LINK_TYPE_LINKS = 3;
    /**
     * 首页提示语
     */
    const RIGHT_LINK_TYPE_HEADLINE = 4;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_right_link}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_title', 'link_created_user'], 'required'],
            [['link_type', 'link_create', 'link_update'], 'integer'],
            [['link_title', 'link_image', 'link_content'], 'string', 'max' => 255],
            [['link_url'], 'string', 'max' => 225],
            [['link_created_user'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'link_id' => 'ID',
            'link_title' => '名称',
            'link_url' => 'Url',
            'link_image' => '图片链接',
            'link_content' => '内容',
            'link_type' => '展示类别',
            'link_created_user' => '创建人',
            'link_create' => 'Created At',
            'link_update' => 'Updated At',
        ];
    }

    /**
     * 分类
     * @return array
     */
    public function getTypes()
    {
        return [
            '1' => '推荐资源',
            '2' => '小贴士',
            '3' => '友情链接',
            '4' => '首页提示语',
        ];
    }
}
