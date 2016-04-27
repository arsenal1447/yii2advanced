<?php

namespace app\models;

use Yii;
// use common\models\AdCat;

/**
 * This is the model class for table "{{%ad_cat}}".
 *
 * @property string $cat_id
 * @property string $cat_name
 * @property integer $cat_parent
 * @property integer $cat_deld
 * @property integer $cat_status
 * @property integer $cat_create
 * @property integer $cat_update
 */
class AdCat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_cat}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name'], 'required'],
            [['cat_parent', 'cat_deld', 'cat_status', 'cat_create', 'cat_update'], 'integer'],
            [['cat_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => Yii::t('app', 'Cat ID'),
            'cat_name' => Yii::t('app', 'Cat Name'),
            'cat_parent' => Yii::t('app', 'Cat Parent'),
            'cat_deld' => Yii::t('app', 'Cat Deld'),
            'cat_status' => Yii::t('app', 'Cat Status'),
            'cat_create' => Yii::t('app', 'Cat Create'),
            'cat_update' => Yii::t('app', 'Cat Update'),
        ];
    }

    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->cat_status = 0;
                $this->cat_create = time();
                $this->cat_update = time();
                $this->cat_deld = 0;
            }else{
                $this->cat_update = time();
            }
            return true;
        } else {
            return false;
        }
    }
    
}
