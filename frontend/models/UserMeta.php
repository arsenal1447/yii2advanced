<?php

namespace frontend\models;

use common\models\Reply;
use common\services\NoticeService;
use frontend\models\Topic;
// use frontend\models\Tweet;
use Yii;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "user_meta".
 *
 * @property integer $meta_id
 * @property string $meta_user_id
 * @property string $type
 * @property string $value
 * @property string $meta_target_id
 * @property string $target_type
 * @property string $meta_create
 */
class UserMeta extends ActiveRecord
{
    const STATUS_ACTIVE = 0;
    const STATUS_DELETED = 1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_user_meta}}';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'meta_create',
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta_user_id'], 'required'],
            [['meta_user_id', 'meta_target_id', 'meta_create'], 'integer'],
            [['meta_type', 'meta_target_type'], 'string', 'max' => 100],
            [['meta_value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'meta_id' => 'ID',
            'meta_user_id' => '用户ID',
            'meta_type' => '操作类型',
            'meta_value' => '操作类型值',
            'meta_target_id' => '目标id',
            'meta_target_type' => '目标类型',
            'meta_create' => '创建时间',
        ];
    }

    public static function deleteOne($conditions)
    {
        $model = self::findOne($conditions);
        if ($model) {
            return $model->delete();
        }
        return false;
    }

    /**
     * 判断指定分类下操作是否存在
     * @param string $type 话题还是评论
     * @param string $do 动作
     * @param $targetId 话题ID或者评论ID
     * @return int|string
     */
    public function isUserAction($type = '', $do = '', $targetId)
    {
        return $this->find()->where([
            'meta_target_id' => $targetId,
            'meta_user_id' => Yii::$app->user->id,
            'meta_target_type' => $type,
            'meta_type' => $do,
        ])->count();
    }

    /**
     * 添加新的动作
     * @param $type
     * @param $targetId
     * @param $do
     * @return bool
     */
    public function saveNewMeta($type, $targetId, $do)
    {
        $data = [
            'meta_target_id' => $targetId,
            'meta_user_id' => Yii::$app->user->id,
            'meta_target_type' => $type,
            'meta_type' => $do,
        ];
        $model = $this->find()->where($data)->one();
        $this->setAttributes($data);
        if (!$model) {
            if ($this->save()) {
                return true;
            } else {
                return array_values($this->getFirstErrors())[0];
            }
        }
    }

    public function getTopic()
    {
        return $this->hasOne(Topic::className(), ['meta_id' => 'meta_target_id']);
    }

    public function getTweet()
    {
        return $this->hasOne(Tweet::className(), ['meta_id' => 'meta_target_id']);
    }

    public function getComment()
    {
        return $this->hasOne(PostComment::className(), ['meta_id' => 'meta_target_id']);
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $userActionNotify = (new NoticeService)->findUserActionNotify($this);
            if ($userActionNotify) {
                $userActionNotify->delete();
            }
            // 点赞、感谢和收藏会收到通知
            if (in_array($this->meta_type, ['like', 'favorite', 'thanks'])) {
                switch ($this->meta_target_type) {
                    case 'topic':
                        (new NotificationService)->newActionNotify(
                            $this->meta_target_type . '_' . $this->meta_type,
                            Yii::$app->user->id,
                            $this->topic->meta_user_id,
                            $this->topic
                        );
                        break;
                    case 'tweet':
                        (new NotificationService)->newActionNotify(
                            $this->meta_target_type . '_' . $this->meta_type,
                            Yii::$app->user->id,
                            $this->tweet->meta_user_id,
                            $this->tweet
                        );
                        break;
                    case 'comment':
                        (new NotificationService)->newActionNotify(
                            $this->meta_target_type . '_' . $this->meta_type,
                            Yii::$app->user->id,
                            $this->comment->meta_user_id,
                            $this->comment->topic,
                            $this->comment
                        );
                        break;
                    default:
                        break;
                }
            }
        }

        return parent::beforeSave($insert);
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $userActionNotify = (new NoticeService)->findUserActionNotify($this);
            if ($userActionNotify) {
                $userActionNotify->status = 0;
                $userActionNotify->save();
            }
            return true;
        } else {
            return false;
        }
    }

}
