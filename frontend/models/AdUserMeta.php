<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ad_user_meta}}".
 *
 * @property integer $meta_id
 * @property integer $meta_user_id
 * @property string $meta_type
 * @property string $meta_value
 * @property integer $meta_target_id
 * @property string $meta_target_type
 * @property integer $meta_create
 */
class AdUserMeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_user_meta}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta_id', 'meta_user_id', 'meta_create'], 'required'],
            [['meta_id', 'meta_user_id', 'meta_target_id', 'meta_create'], 'integer'],
            [['meta_type'], 'string', 'max' => 50],
            [['meta_value', 'meta_target_type'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'meta_id' => Yii::t('app', 'Meta ID'),
            'meta_user_id' => Yii::t('app', 'Meta User ID'),
            'meta_type' => Yii::t('app', 'Meta Type'),
            'meta_value' => Yii::t('app', 'Meta Value'),
            'meta_target_id' => Yii::t('app', 'Meta Target ID'),
            'meta_target_type' => Yii::t('app', 'Meta Target Type'),
            'meta_create' => Yii::t('app', 'Meta Create'),
        ];
    }
}
