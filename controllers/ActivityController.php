<?php

namespace app\controllers;

use app\base\BaseController;
use app\controllers\actions\ActivityCreateAction;

class ActivityController extends BaseController{
    
    public function actions(){
        return [
            'create'=>['class'=>ActivityCreateAction::class]
        ];
    }
    
    public function actionView($id){
        
        $model = \app\models\Activity::find()->andWhere(['id'=>$id])->one();
        if(!\Yii::$app->rbac->canViewEditActivity($model)){
            throw new \yii\web\HttpException(403,'not auth method');
        }
        return $this->render('view', ['model'=>$model]);
    }

}