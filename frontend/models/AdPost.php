<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ad_post}}".
 *
 * @property string $post_id
 * @property integer $post_user
 * @property string $post_content
 * @property integer $post_create
 * @property integer $post_update
 * @property integer $post_viewcount
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
            [['post_user', 'post_content', 'post_create', 'post_update', 'post_viewcount'], 'required'],
            [['post_user', 'post_create', 'post_update', 'post_viewcount'], 'integer'],
            [['post_content'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_user' => 'Post User',
            'post_content' => 'Post Content',
            'post_create' => 'Post Create',
            'post_update' => 'Post Update',
            'post_viewcount' => 'Post Viewcount',
        ];
    }
}
