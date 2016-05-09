<?php
namespace common\components\db;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\base\InvalidConfigException;


class MyActiveRecord extends ActiveRecord
{
	/**
     * 自动更新created_at和updated_at时间
     * @return array
     */
//     public function behaviors()
//     {
//         return [
//             'timestamp' => [
//                 'class' => 'yii\behaviors\TimestampBehavior',
//             ],
//         ];
//     }
    
    public static function findOne($condition, $order = null)
    {
        $query = static::find();
        if (ArrayHelper::isAssociative($condition))
        {
            // hash condition
            $ret = $query->andWhere($condition);
            if ($order !== null)
            {
                $ret = $ret->orderBy($order);
            }
            return $ret->one();
        }
        else
        {
            // query by primary key
            $primaryKey = static::primaryKey();
            if (isset($primaryKey[0]))
            {
                $ret = $query->andWhere([
                        $primaryKey[0] => $condition
                ]);
                if ($order !== null)
                {
                    $ret = $ret->orderBy($order);
                }
                return $ret->one();
            }
            else
            {
                throw new InvalidConfigException(get_called_class() . ' must have a primary key.');
            }
        }
    }
    
    public static function findAll($condition, $order = null)
    {
        $query = static::find();
        if (ArrayHelper::isAssociative($condition))
        {
            // hash condition
            $ret = $query->andWhere($condition);
            if ($order !== null)
            {
                $ret = $ret->orderBy($order);
            }
            return $ret->all();
        }
        else
        {
            // query by primary key(s)
            $primaryKey = static::primaryKey();
            if (isset($primaryKey[0]))
            {
                $ret = $query->andWhere([
                        $primaryKey[0] => $condition
                ]);
                if ($order !== null)
                {
                    $ret = $ret->orderBy($order);
                }
                return $ret->all();
            }
            else
            {
                throw new InvalidConfigException(get_called_class() . ' must have a primary key.');
            }
        }
    }
}