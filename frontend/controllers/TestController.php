<?php
namespace frontend\controllers;

use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Site controller
 */
class TestController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
//             'captcha' => [
//                 'class' => 'yii\captcha\CaptchaAction',
//                 'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//             ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    
    /**
     * @desc 测试发邮件
     * @param unknown $token
     * @throws BadRequestHttpException
     * @return Ambigous <\yii\web\Response, \yii\web\static, \yii\web\Response>|Ambigous <string, string>
     */
    public function actionSendMail()
    {
        $mail= Yii::$app->mailer->compose();   
        $mail->setTo('297208251@qq.com');  
        $mail->setSubject("邮件测试");  
        //$mail->setTextBody('zheshisha ');   //发布纯文字文本
        $mail->setHtmlBody("<br>问我我我我我");    //发布可以带html标签的文本
        if($mail->send())  
            echo "success";  
        else  
            echo "failse";   
        die(); 
    }
}
