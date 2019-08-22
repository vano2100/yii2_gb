<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\commands;

/**
 * Description of RbacController
 *
 * @author rudenko_ia
 */
class RbacController extends \yii\console\Controller{
    //put your code here
    public function actionInit(){
        \Yii::$app->rbac->initRbacRules();
    }
}
