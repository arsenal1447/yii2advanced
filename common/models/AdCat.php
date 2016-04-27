<?php
namespace common\models;

// use Yii;
// use yii\base\NotSupportedException;
// use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
// use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string  $username
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class AdCat extends ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_cat}}';
    }


    /**
     * @desc 转化时间格式
     * @param 时间戳格式  $datetime
     * @return 返回 2016-03-02 03:07:49 这种格式
     */
    public static function convertDate($datetime){
        return date('Y-m-d H:i:s',$datetime);
    }

    /**
     * @desc 获取帖子的分类名称
     * @return boject
     */
    public static function getCateName($cateid){
        $catinfo = AdCat::find()->where(['cat_id' => $cateid,'cat_deld'=>0,'cat_status'=>0])->asArray()->one();

        return $catinfo['cat_name'];
    }

    /**
     * @desc 获取帖子的分类
     * @return boject
     */
    public static function getCate(){
        $models = AdCat::find()->select(['cat_id','cat_name'])->where(['cat_deld'=>0,'cat_status'=>0])->asArray()->all();
        $catarr = [];
        foreach ($models as $key=>$val){
            $catarr[$val['cat_id']] = $val['cat_name'];
        }

        return $catarr;
    }
}
