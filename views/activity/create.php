<?php
/**
 * @var $model \app\models\Activity
 */
?>

<div class="row">
    <div class="col-md-12">
        <h3>Создание активности</h3>

        <?php $form = \yii\bootstrap\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <?= $form->field($model, 'title'); ?>
        <?= $form->field($model, 'category'); ?>
        <?= $form->field($model, 'description')->textarea(); ?>
        <?= $form->field($model, 'dateStart')->widget("kartik\date\DatePicker",[
            'name'=>'dateStart',
            'options'=>['placeholder'=>'Выберите дату'],
            'convertFormat'=>true,
            'pluginOptions'=>[
                'format'=>'yyyy-MM-dd',
                'todayHighlight'=>true,
            ],
            
        ]); ?>
        <?= $form->field($model, 'email', ['enableAjaxValidation'=>true,'enableClientValidation'=>false]); ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'isBlocked')->checkbox(); ?>
    </div>  
    <div class="col-md-4">
        <?= $form->field($model, 'isRepeat')->checkbox(); ?>
    </div>  
    <div class="col-md-4">
        <?= $form->field($model, 'repeatedType')->dropDownList($model::REPEATED_TYPE); ?>
    </div>     
    <div class="col-md-4">    
        <?= $form->field($model, 'useNotification')->checkbox(); ?>
    </div> 
    <div class="col-md-12">
        <?= $form->field($model, 'files[]')->fileInput(['multiple' => true]); ?>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        <button class="btn btn-default" type="submit">Создать</button>
    </div>
    
        

        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>