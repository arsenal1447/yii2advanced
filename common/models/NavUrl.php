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
//     public $url_nav_id;
//     public $url_title;
//     public $url_url;
//     public $url_description;
//     public $url_order;
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
            [['url_nav_id', 'url_order'], 'integer'],
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

    /**
     * @desc  发帖的预处理
     * @return boolean whether the record should be saved.
     */
//     public function beforeSave($insert) {
//         ini_set ('memory_limit', '128M');
//         $userid =  Yii::$app->user->identity->id;
//         if (parent::beforeSave($insert)) {
//             if ($this->isNewRecord) {
//                 //$this->url_nav_id = $this->url_nav_id;
//                 //$this->url_title = $this->url_title;
//                 //$this->url_url = $this->url_url;
//                 //$this->url_description = $this->url_description;
//                 //$this->url_order = $this->url_order;
//                 $this->url_user_id = $userid;
//                 $this->url_create = time();
//                 $this->save(false);
//                 die('82');
//             }else{//更新修改时间
//                 die('84');
//                 $this->url_update = time();
// //                 $this->post_last_comment_time = time();
// //                 $this->post_last_comment_user_name = Yii::$app->user->identity->user_name;
// //                 $this->post_last_user_id = Yii::$app->user->identity->id;
//             }
//             return true;
//         } else {
//             return false;
//         }
//     }


}
