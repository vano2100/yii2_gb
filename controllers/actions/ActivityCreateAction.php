<?php

namespace app\controllers\actions;

use app\models\Activity;
use yii\base\Action;

class ActivityCreateAction extends Action{
    public function run(){
        $model = new Activity();

        if (\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            if(\YII::$app->activity->createActivity($model)){
                
            } else {
                print_r($model->getErrors());exit;
            }
        }
        return $this->controller->render('create', ['model'=>$model]);
    }
}