<?php

namespace common\models;

use Yii;
// use yii\db\ActiveRecord;
use common\components\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ad_user_info".
 *
 * @property integer $id
 * @property string $user_id
 * @property string $info
 * @property string $github
 * @property string $website
 * @property string $company
 * @property string $location
 * @property integer $view_count
 * @property integer $comment_count
 * @property integer $post_count
 * @property integer $thanks_count
 * @property integer $like_count
 * @property integer $hate_count
 * @property integer $login_count
 * @property string $prev_login_time
 * @property string $prev_login_ip
 * @property string $last_login_time
 * @property string $last_login_ip
 * @property string $created_at
 * @property string $updated_at
 */
class UserInfo extends ActiveRecord
{   
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_user_info}}';
    }
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
                [
                    'class' => TimestampBehavior::className(),
                    'createdAtAttribute' => 'info_create',
                    'updatedAtAttribute' => 'info_update',
                    //             'value' => new Expression('NOW()'),//如果是timestamp类型 ,需要这样操作
                ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info_user_id', 'info_prev_login_time', 'info_prev_login_ip', 'info_last_login_time', 'info_last_login_ip', 'info_create', 'info_update'], 'required'],
            [['info_user_id', 'info_view_count', 'info_comment_count', 'info_post_count', 'info_thanks_count', 'info_like_count', 'info_hate_count', 'info_login_count', 'info_prev_login_time', 'info_last_login_time', 'info_create', 'info_update'], 'integer'],
            [['info_info'], 'string', 'max' => 255],
            [['info_github', 'info_website'], 'string', 'max' => 100],
            [['info_company'], 'string', 'max' => 40],
            [['info_location'], 'string', 'max' => 10],
            [['info_prev_login_ip', 'info_last_login_ip'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'info_id' => 'ID',
            'info_user_id' => 'User ID',
            'info_info' => '会员简介',
            'info_github' => 'GitHub 帐号',
            'info_website' => '个人主页',
            'info_company' => '公司',
            'info_location' => '城市',
            'info_view_count' => '个人主页浏览次数',
            'info_comment_count' => '发布评论数',
            'info_post_count' => '发布文章数',
            'info_thanks_count' => '被感谢次数',
            'info_like_count' => '被赞次数',
            'info_hate_count' => '喝倒彩次数',
            'info_login_count' => '登录次数',
            'info_prev_login_time' => '上次登录时间',
            'info_prev_login_ip' => '上次登录IP',
            'info_last_login_time' => '最后登录时间',
            'info_last_login_ip' => '最后登录IP',
            'info_create' => 'Created At',
            'info_update' => 'Updated At',
        ];
    }
    
    
//     /**
//      * @desc 预处理
//      * @return boolean whether the record should be saved.
//      */
//     public function beforeSave($insert) {
//         $userid =  Yii::$app->user->identity->id;
// //         if (parent::beforeSave($insert)) {
// //         $this->info_info = $this->info_info;
// //         $this->info_github = $this->info_github;
// //         $this->info_website = $this->info_website;
// //         $this->info_company = $this->info_company;
// //         $this->info_location = $this->info_location;
//             if ($this->isNewRecord) {
//                 die('123');
//                 $this->info_user_id = $userid;
// //                 $this->info_view_count = $this->info_github;
// //                 $this->info_comment_count = $this->info_github;
// //                 $this->info_post_count = $this->info_github;
// //                 $this->info_thanks_count = $this->info_github;
// //                 $this->info_like_count = $this->info_github;
// //                 $this->info_hate_count = $this->info_github;
// //                 $this->info_login_count = $this->info_github;
// //                 $this->info_prev_login_time = time();
// //                 $this->info_prev_login_ip = Yii::$app->getRequest()->getUserIP();
// //                 $this->info_last_login_time = time();
// //                 $this->info_session_id = Yii::$app->getRequest()->getUserIP();
//                 $this->info_create = time();
//             }else{//更新修改时间
//                 die('138');
//                 $this->info_update = time();
//             }
//             return true;
// //         } else {
// //             return false;
// //         }
//     }
}
