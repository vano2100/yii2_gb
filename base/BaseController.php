<?php

namespace app\base;

use yii\web\Controller;

class BaseController extends Controller{
    
    public function beforeAction($action) {
        
        if(\Yii::$app->user->isGuest){
            throw new \yii\web\HttpException(401, 'needauth');
        }
        
        return parent::beforeAction($action);
    }

}