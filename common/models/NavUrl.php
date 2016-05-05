<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ad_nav_url".
 *
 * @property integer $url_id
 * @property integer $url_nav_id
 * @property string $url_title
 * @property string $url_url
 * @property string $url_description
 * @property integer $url_order
 * @property integer $url_user_id
 * @property string $url_create
 * @property string $url_update
 */
class NavUrl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_nav_url}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url_nav_id', 'order'], 'integer'],
            [['url_title', 'url_url', 'url_nav_id','url_order'], 'required'],
            [['url_title', 'url_description'], 'string', 'max' => 255],
            [['url_url'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'url_id' => Yii::t('app', 'ID'),
            'url_nav_id' => Yii::t('app', 'Nav ID'),
            'url_title' => Yii::t('app', 'Title'),
            'url_url' => Yii::t('app', 'Url'),
            'url_description' => Yii::t('app', 'Description'),
            'url_order' => Yii::t('app', 'Order'),
            'url_user_id' => Yii::t('app', 'User ID'),
            'url_create' => Yii::t('app', 'Created At'),
            'url_update' => Yii::t('app', 'Updated At'),
        ];
    }


}
