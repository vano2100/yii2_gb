<?php

?>


<div class="row">
    <div class="col-md-6">
        <?php $form= \yii\bootstrap\ActiveForm::begin(); ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Авторизация
            </button>
        </div>
        <?php        \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>