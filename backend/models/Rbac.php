<?php

namespace app\models;

use Yii;
use yii\rbac\DbManager;
use yii\helpers\ArrayHelper;

class Rbac extends DbManager{
    
    const Category_Member='member';
    const Category_Admin='admin';
    const Category_System='system';
    public static function getCategoryItems($key=null)
    {
        $items = [
        self::Category_Member=>'会员角色',
        self::Category_Admin=>'管理员角色',
        self::Category_System=>'系统角色',
        ];
        return DbManager::getItems($items,$key);
    }
    
    
    public function createItem($item){

        if(empty($item->name) || $this->getOneItem($item->name) !== null)
            return false;
//         return $this->addItem($item) ? true : false;
//         echo "<pre>";
//         print_R($item);
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

    /**
     * @desc 转化时间格式
     * @param 时间戳格式  $datetime
     * @return 返回 2016-03-02 03:07:49 这种格式
     */
    public static function getTypeOfRole($type){
        if($type==1){
            return '角色';
        }elseif($type==2){
            return '权限';
        }
    }

    public function createPermission($item)
    {
        $auth = Yii::$app->authManager;

        $createPost = $auth->createPermission($item);
        $createPost->description = '创建了 ' . $item . ' 许可';
        $auth->add($createPost);
    }


    public function createRole($item)
    {
        $auth = Yii::$app->authManager;

        $role = $auth->createRole($item);
        $role->description = '创建了 ' . $item . ' 角色';
        $auth->add($role);
    }

    /**
     * @desc 7.Role分配Permission
     * @param unknown $items
     */
    public static function createEmpowerment($items)
    {
        $auth = Yii::$app->authManager;

        $parent = $auth->createRole($items['name']);
        $child = $auth->createPermission($items['description']);

        $auth->addChild($parent, $child);
    }

    /**
     * @desc 8.角色分配用户：
     * @param unknown $item
     */
    public static function assign($item)
    {
        $auth = Yii::$app->authManager;
        $reader = $auth->createRole($item['name']);
        $auth->assign($reader, $item['description']);
    }


    /**
     * @desc 9.验证权限：
     * @param unknown $action
     * @throws \yii\web\UnauthorizedHttpException
     * @return boolean
     */
    public static function beforeAction($action)
    {
        $action = Yii::$app->controller->action->id;
        if(\Yii::$app->user->can($action)){
            return true;
        }else{
            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
        }
    }
    
    
    
    public function getAllRoles()
    {
        return Rbac::buildOptions();
    }
    
    public static function buildOptions()
    {
        $ret=[];
        $rows = self::findAll();
//         $rows = Rbac::find()->select();
        
        foreach ($rows as $row)
        {
            $ret[]=['type'=>$row['type'],'name'=>$row['name']];
        }
        return $ret;
    }
    

}