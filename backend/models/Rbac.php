<?php

namespace app\models;

// use Yii;
use yii\rbac\DbManager;

class Rbac extends DbManager{

    public function createItem($item){

        if(empty($item->name) || $this->getOneItem($item->name) !== null)
            return false;
//         return $this->addItem($item) ? true : false;
        echo "<pre>";
        print_R($item);
//         die('16');
        $this->addRule($item);
        $this->addItem($item);
        
        return true;
//         if($this->addItem($item)==true){
//             return $this->addRule($item) ? true : false;
//         }
//         return $this->addItem($item) ? true : false;

    }

    public function getOneItem($name){
        return $this->getItem($name);
    }

    public function updateOneItem($name, $item){

        return $this->updateItem($name, $item);
    }

    public function deleteOneItem($name){

        if($item = $this->getOneItem($name))
            return $this->removeItem($item);
        else
            return false;
    }
    
    public function myError()
    {
        $exception = \Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }
    
    /**
     * @desc 转化时间格式
     * @param 时间戳格式  $datetime
     * @return 返回 2016-03-02 03:07:49 这种格式
     */
    public static function convertDate($datetime){
        return date('Y-m-d H:i:s',$datetime);
    }

}