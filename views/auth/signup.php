<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="row">
    <div class="col-md-6">
        <?php $form= \yii\bootstrap\ActiveForm::begin(); ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Регистрация
            </button>
        </div>
        <?php        \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>