<?php

use app\models\Orders;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\OrdersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'time_stamp',
            'status',
            //'fio_kl',
            'dismiss',
            'count',
            //'user_id',
            [
                'class' => ActionColumn::className(),
                'template' => '{delete}',
                'buttons'=>
                    [
                        'update' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-ok"></span>',);
                        }
                    ],
            ],
        ],
    ]); ?>


</div>
