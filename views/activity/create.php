<?php
/**
 * @var $model \app\models\Activity
 */
?>

<div class="row">
    <div class="col-md-12">
        <h3>Создание активности</h3>

        <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
        <?= $form->field($model, 'title'); ?>
        <?= $form->field($model, 'category'); ?>
        <?= $form->field($model, 'description')->textarea(); ?>
        <?= $form->field($model, 'dateStart')->input('date'); ?>
        <?= $form->field($model, 'email', ['enableAjaxValidation'=>true, 'enableClientValidation' => false]); ?>
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
        <div class="form-group">
        <button class="btn btn-default" type="submit">Создать</button>
        </div>
        

        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>