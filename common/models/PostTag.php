<?php

namespace common\models;

use Yii;
use common\components\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ad_post_tag".
 *
 * @property integer $id
 * @property string $name
 * @property string $count
 * @property string $created_at
 * @property integer $updated_at
 */
class PostTag extends ActiveRecord
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
    public function behaviors()
    {
        return [
                [
                    'class' => TimestampBehavior::className(),
                    'createdAtAttribute' => 'tag_create',
                    'updatedAtAttribute' => 'tag_update',
                    //             'value' => new Expression('NOW()'),//如果是timestamp类型 ,需要这样操作
                ],
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
