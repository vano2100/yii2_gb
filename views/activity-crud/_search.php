<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActivityBaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-base-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'dateStart') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'isBlocked') ?>

    <?php // echo $form->field($model, 'useNotification') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'createAt') ?>

    <?php // echo $form->field($model, 'isDeleted') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
