<?php

namespace app\models;

use Yii;
// use yii\redis\Connection;
// use common\models\User;
// use common\models\AdCat;

/**
 * This is the model class for table "{{%ad_post}}".
 *
 * @property string $post_id
 * @property string $post_title
 * @property integer $post_cateid
 * @property integer $post_user
 * @property string $post_content
 * @property integer $post_create
 * @property integer $post_update
 * @property integer $post_viewcount
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
            [['post_cateid', 'post_user', 'post_create', 'post_update', 'post_viewcount', 'post_status', 'post_deld'], 'integer'],
            [['post_content'], 'string'],
            [['post_title'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => Yii::t('app', 'Post ID'),
            'post_title' => Yii::t('app', 'Post Title'),
            'post_cateid' => Yii::t('app', 'Post Cateid'),
            'post_user' => Yii::t('app', 'Post User'),
            'post_content' => Yii::t('app', 'Post Content'),
            'post_create' => Yii::t('app', 'Post Create'),
            'post_update' => Yii::t('app', 'Post Update'),
            'post_viewcount' => Yii::t('app', 'Post Viewcount'),
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
                $this->post_user = $userid;
                $this->post_user_name = Yii::$app->user->identity->user_name;
                $this->post_create = time();
                $this->post_update = time();
                $this->post_status = 0;
                $this->post_viewcount = 10;
                $this->post_deld = 0;
            }else{//更新修改时间
                $this->post_update = time();
            }
            return true;
        } else {
            return false;
        }
    }
    
    
    /**
     * @desc 更新每个帖子的阅读量,每次查看更新一次
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public static function UpViewCount($id)
    {
        $model = AdPost::find()->select(['post_id','post_viewcount'])->where(['post_id' => $id,'post_deld'=>0,'post_status'=>0])->one();
 
        $redis = Yii::$app->redis;
        
        $currentcount = AdPost::getViewCount($id);
        $count = 0;
        if($currentcount>0){
            $count = $currentcount;
        }else{
            $count = $model->post_viewcount;
        }
        
        $redis->hset("counthash","pid_".$id,$count);
        $result = $redis->hincrby('counthash', "pid_".$id, '1');
    }
    
    
    /**
     * @desc 更新每个帖子的阅读量,每次查看更新一次
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public static function getViewCount($id)
    {
        $redis = Yii::$app->redis;
        return $redis->hget('counthash', "pid_".$id);
    }
    
    
}
