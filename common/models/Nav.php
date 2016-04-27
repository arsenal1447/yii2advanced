<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "nav".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property integer $order
 * @property string $created_at
 * @property string $updated_at
 */
class Nav extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_nav}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nav_name','nav_alias','nav_order'], 'required'],
            [['nav_order'], 'integer'],
            [['nav_name', 'alias'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nav_id' => Yii::t('app', 'ID'),
            'nav_name' => Yii::t('app', 'Name'),
            'nav_alias' => Yii::t('app', 'Alias'),
            'nav_order' => Yii::t('app', 'Order'),
            'nav_create' => Yii::t('app', 'Created At'),
            'nav_update' => Yii::t('app', 'Updated At'),
        ];
    }

    public static function getNavList()
    {
        $data_array = ArrayHelper::map(static::find()->orderBy(['nav_order' => SORT_ASC])->all(), 'nav_id', 'nav_name');
        return $data_array;
    }

}
