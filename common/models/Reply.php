<?php
namespace common\models;

use Yii;
use base\BaseActiveRecord;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "reply".
 *
 * @property integer $reply_id
 * @property integer $reply_post
 * @property integer $reply_user
 * @property string $reply_user_name
 * @property string $reply_title
 * @property string $reply_content
 * @property string $reply_create
 * @property string $reply_update
 * @property integer $reply_support
 * @property integer $reply_against
 * @property integer $reply_floor
 * @property string $reply_note
 */
class Reply extends ActiveRecord 
// class Reply extends ActiveRecord implements IdentityInterface
{
    const TYPE = 'comment';
    /**
     * 发布
     */
    const STATUS_ACTIVE = 0;
    
    /**
     * 删除
     */
    const STATUS_DELETED = 0;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_reply}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                [['reply_post','reply_user','reply_user_name','reply_content','reply_create'],'required'],
                [['reply_post','reply_user','reply_support','reply_against','reply_floor'],'integer'],
                [['reply_content'],'string'],
                [['reply_create','reply_update'],'safe'],
                [['reply_user_name'],'string','max' => 32],
                [['reply_title'],'string','max' => 128],
                [['reply_note'],'string','max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
                'reply_id' => 'ID',
                'reply_post' => 'Post ID',
                'reply_user' => 'User ID',
                'reply_user_name' => 'User Name',
                'reply_title' => '标题',
                'reply_content' => '内容',
                'reply_create' => 'Create Time',
                'reply_update' => 'Edit Time',
                'reply_support' => '支持数',
                'reply_against' => '反对数',
                'reply_floor' => '楼层',
                'reply_note' => 'Note'
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'admin_status' => self::STATUS_ACTIVE]);
    }

//     /**
//      * @inheritdoc
//      */
//     public static function findIdentityByAccessToken($token, $type = null)
//     {
//         throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
//     }

//     /**
//      * Finds user by username
//      *
//      * @param string $username
//      * @return static|null
//      */
//     public static function findByUsername($username)
//     {
//         return static::findOne(['admin_name' => $username, 'admin_status' => self::STATUS_ACTIVE]);
//     }

//     /**
//      * Finds user by password reset token
//      *
//      * @param string $token password reset token
//      * @return static|null
//      */
//     public static function findByPasswordResetToken($token)
//     {
//         if (!static::isPasswordResetTokenValid($token)) {
//             return null;
//         }

//         return static::findOne([
//                 'admin_password_reset_token' => $token,
//                 'admin_status' => self::STATUS_ACTIVE,
//                 ]);
//     }

//     /**
//      * Finds out if password reset token is valid
//      *
//      * @param string $token password reset token
//      * @return boolean
//      */
//     public static function isPasswordResetTokenValid($token)
//     {
//         if (empty($token)) {
//             return false;
//         }
//         $expire = Yii::$app->params['user.passwordResetTokenExpire'];
//         $parts = explode('_', $token);
//         $timestamp = (int) end($parts);
//         return $timestamp + $expire >= time();
//     }

//     /**
//      * @inheritdoc
//      */
//     public function getId()
//     {
//         return $this->getPrimaryKey();
//     }

//     /**
//      * @inheritdoc
//      */
//     public function getAuthKey()
//     {
//         return $this->admin_authkey;
//     }

//     /**
//      * @inheritdoc
//      */
//     public function validateAuthKey($authKey)
//     {
//         return $this->getAuthKey() === $authKey;
//     }

//     /**
//      * Validates password
//      *
//      * @param string $password password to validate
//      * @return boolean if password provided is valid for current user
//      */
//     public function validatePassword($password)
//     {
//         return Yii::$app->security->validatePassword($password, $this->admin_passhash);
//     }

//     public function afterSave($insert, $changedAttributes)
//     {
//         parent::afterSave($insert, $changedAttributes);
    
//         Yii::$app->cache->set('comment' . $this->id, $this, 0);
//     }
    
    /**
     * 通过ID获取指定评论
     * @param $id
     * @return array|null|\yii\db\ActiveRecord|static
     * @throws NotFoundHttpException
     */
    public static function findComment($id)
    {
        return static::findModel($id, ['reply_status' => self::STATUS_ACTIVE]);
    }
    
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
    
        Yii::$app->cache->set('comment' . $this->reply_id, $this, 0);
    }
    
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    public function getPost()
    {
        return $this->hasOne(AdPost::className(), ['id' => 'post_id']);
    }
    
    public function getTopic()
    {
        return $this->hasOne(AdPost::className(), ['id' => 'post_id'])->where(['post_type' => 'topic']);
    }
    
    public function getLike()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'like', $this->id);
    }
    
    
    /**
     * 获取已经删除过的评论
     * @param $id
     * @return array|null|\yii\db\ActiveRecord
     * @throws NotFoundHttpException
     */
    public static function findDeletedComment($id)
    {
        return static::findModel($id, ['reply_status' => self::STATUS_DELETED]);
    }
    
    /**
     * 评论列表
     * @param $postId
     * @return static
     */
    public static function findCommentList($postId)
    {
        return static::find()->where(['reply_post' => $postId]);
    }
    
    /**
     * 自己写的评论
     * @return bool
     */
    public function isCurrent()
    {
        return $this->user_id == Yii::$app->user->id;
    }
    
    /**
     * 分别转换@用户和#楼层
     * @param $comment
     * @return mixed
     */
    public function replace($comment)
    {
        preg_match_all("/\#(\d*)/i", $comment, $floor);
        if (isset($floor[1])) {
            foreach ($floor[1] as $key => $value) {
                $search = "#{$value}楼";
                $place = "[{$search}](#comment{$value}) ";
                $comment = str_replace($search . ' ', $place, $comment);
            }
        }
    
        $users = $this->parse($comment);
        foreach ($users as $key => $value) {
            $search = '@' . $value;
            $url = Url::to(['/user/default/show', 'username' => $value]);
            $place = "[{$search}]({$url}) ";
            $comment = str_replace($search . ' ', $place, $comment);
        }
    
        return $comment;
    }
    
    public function parse($comment)
    {
        preg_match_all("/(\S*)\@([^\r\n\s]*)/i", $comment, $atlistTmp);
        $users = [];
        foreach ($atlistTmp[2] as $key => $value) {
            if ($atlistTmp[1][$key] || strlen($value) > 25) {
                continue;
            }
            $users[] = $value;
        }
        return ArrayHelper::map(User::find()->where(['username' => $users])->all(), 'id', 'username');
    }
    
    

}
