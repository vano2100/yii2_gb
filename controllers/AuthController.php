<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of AuthController
 *
 * @author rudenko_ia
 */
class AuthController extends \yii\web\Controller {
    
    public function actionSignIn(){
        $model = new \app\models\Users();
        
        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            if (\Yii::$app->auth->signin($model)){
                
                $this->redirect('/activity/create');
            }
        }
        return $this->render('signin', ['model'=>$model]);
    }
    
    public function actionSignUp(){
        $model = new \app\models\Users();
        
        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            if (\Yii::$app->auth->signup($model)){
                
                $this->redirect('/auth/sign-in');
            }
        }
        return $this->render('signup', ['model'=>$model]);
    }
}
