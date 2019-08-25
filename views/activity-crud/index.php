<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActivityBaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Activity Bases');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-base-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Activity Base'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'dateStart',
            'description:ntext',
            'isBlocked',
            //'useNotification',
            //'email:email',
            //'createAt',
            //'isDeleted',
            //'user_id',
            [
                'attribute'=> 'user',
                'value'=> function($searchModel){
                    return $searchModel->getUser()->limit(1)->one()->email;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
