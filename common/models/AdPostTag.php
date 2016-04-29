<?php

namespace common\models;

use Yii;
use common\components\db\ActiveRecord;

/**
 * This is the model class for table "ad_post_tag".
 *
 * @property integer $tag_id
 * @property string $tag_name
 * @property string $tag_count
 * @property string $tag_create
 * @property integer $tag_update
 */
class AdPostTag extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_post_tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_count', 'tag_create', 'tag_update'], 'integer'],
            [['tag_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tag_id' => 'ID',
            'tag_name' => '名称',
            'tag_count' => '计数',
            'tag_create' => '创建时间',
            'tag_update' => '修改时间',
        ];
    }
}
