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
    
    public function actionEdit($id){
        $model = \app\models\Activity::find()->andWhere(['id'=>$id])->one();
        if(!\Yii::$app->rbac->canViewEditActivity($model)){
            throw new \yii\web\HttpException(403,'not auth method');
        }
        return $this->render('create', ['model'=>$model]);
    }
    
    public function actionList(){
        $activities = \app\models\Activity::find()->andWhere(['user_id'=>\Yii::$app->user->id])->all();
        
        return $this->render('list', ['activities'=>$activities]);
        
    }

}