<?php

namespace app\models;

use Yii;
use yii\rbac\DbManager;

/**
 * This is the model class for table "{{%ad_auth_rule}}".
 *
 * @property string $name
 * @property string $data
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property AdAuthItem[] $adAuthItems
 */
class AdAuthRule extends DbManager
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_auth_rule}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['data'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'data' => Yii::t('app', 'Data'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdAuthItems()
    {
        return $this->hasMany(AdAuthItem::className(), ['rule_name' => 'name']);
    }
    
    public function createItem($item){
    
        if(empty($item->name) || $this->getOneItem($item->name) !== null){
            return false;
        }
        
        $this->addRule($item);
        $this->addItem($item);
    
        return true;
    
    }
    
    public function getOneItem($name){
        return $this->getItem($name);
    }
    
    
   
}
