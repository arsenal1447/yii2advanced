<?php

namespace app\models;

use Yii;
use base\BaseActiveRecord;
use base\Ad;
use common\helpers\TTimeHelper;
use yii\db\Expression;
// use yii\redis\Connection;
// use common\models\User;
// use common\models\AdCat;

/**
 * This is the model class for table "{{%ad_post}}".
 *
 * @property string $post_id
 * @property string $post_title
 * @property integer $post_cate_id
 * @property integer $post_user_id
 * @property string $post_content
 * @property integer $post_create
 * @property integer $post_update
 * @property integer $post_view_count
 * @property integer $post_status
 * @property integer $post_deld
 */
class AdPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_post}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'post_content'], 'required'],
            [['post_cate_id', 'post_user_id', 'post_create', 'post_update', 'post_view_count', 'post_status', 'post_deld'], 'integer'],
            [['post_content'], 'string'],
            [['post_title'], 'string', 'max' => 100]
        ];
    }
    
    /**
     * @inheritdoc
     */
//     public function behaviors()
//     {
//         return [
//                 [
//                     'class' => TimestampBehavior::className(),
//                     'createdAtAttribute' => 'post_create',
//                     'updatedAtAttribute' => 'post_update',
//                     //             'value' => new Expression('NOW()'),//如果是timestamp类型 ,需要这样操作
//                 ],
//         ];
//     }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => Yii::t('app', 'Post ID'),
            'post_title' => Yii::t('app', 'Post Title'),
            'post_cate_id' => Yii::t('app', 'Post Cateid'),
            'post_user_id' => Yii::t('app', 'Post User'),
            'post_content' => Yii::t('app', 'Post Content'),
            'post_create' => Yii::t('app', 'Post Create'),
            'post_update' => Yii::t('app', 'Post Update'),
            'post_view_count' => Yii::t('app', 'Post Viewcount'),
            'post_status' => Yii::t('app', 'Post Status'),
            'post_deld' => Yii::t('app', 'Post Deld'),
        ];
    }

    /**
     * @desc  发帖的预处理
     * @return boolean whether the record should be saved.
     */
    public function beforeSave($insert) {
        $userid =  Yii::$app->user->identity->id;
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->post_user_id = $userid;
                $this->post_user_name = Yii::$app->user->identity->user_name;
//                 $this->post_create = time();
//                 $this->post_update = time();
                $this->post_status = 0;
                $this->post_view_count = 10;
                $this->post_deld = 0;
                $this->post_type = 'topic';
            }else{//更新修改时间
                $this->post_update = time();
                $this->post_last_comment_time = time();
                $this->post_last_comment_user_name = Yii::$app->user->identity->user_name;
                $this->post_last_user_id = Yii::$app->user->identity->id;
            }
            return true;
        } else {
            return false;
        }
    }







}
