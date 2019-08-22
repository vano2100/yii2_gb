<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of RbacController
 *
 * @author rudenko_ia
 */
class RbacController extends \app\base\BaseController
{
    
    public function actionGen(){
        \Yii::$app->rbac->initRbacRules();
    }
}
