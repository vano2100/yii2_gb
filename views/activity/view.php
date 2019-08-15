<?php
/**
 * @var $model \app\models\Activity
 */
use yii\helpers\Html;
?>

<div class="row">
    <div class="col-md-12">
        <h3><?= $model->title ?></h3>
        <strong><?=$model->dateStart ?></strong>
    </div>
    <div class="col-md-12">
        <?php if($model->files): ?>
            <?php foreach ($model->files as $image):?>
                <img width="300px" src="/images/<?=$image ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </div>  
    <hr>
    <a href="" onclick="history.back()">назад</a>

</div>