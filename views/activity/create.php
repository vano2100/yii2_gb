<?php

?>

<div class="row">
    <div class="col-md-12">
        <h3>Создание активности</h3>

        <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
        <?= $form->field($model, 'title'); ?>
        <?= $form->field($model, 'category'); ?>
        <?= $form->field($model, 'description')->textarea(); ?>
        <?= $form->field($model, 'dateStart')->input('date'); ?>
        <?= $form->field($model, 'isBlocked')->checkbox(); ?>
        <?= $form->field($model, 'isRepeat')->checkbox(); ?>
        <div class="form-group">
        <button class="btn btn-default" type="submit">Создать</button>
        </div>

        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>