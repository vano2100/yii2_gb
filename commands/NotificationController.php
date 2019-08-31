<?php

namespace app\commands;

/**
 * Description of NotificationController
 *
 * @author rudenko_ia
 */
class NotificationController extends \yii\console\Controller{
    
    public function actionHello($name){
        echo "Hello $name\n";
    }
    
    public function actionSend(){
        \Yii::$app->mailer->compose('notif')
                ->setFrom('rudenko_ia@outlook.com')
                ->setSubject('A test mail')
                ->setTo('vano2100@mail.ru')
                ->send();
    }
}
