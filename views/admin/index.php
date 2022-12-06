<?php

use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Управление категориями', ['/category']) ?>
    </p>
    <p>
        <?= Html::a('Управление заявками', ['/orders']) ?>
    </p>
    <p>
        <?= Html::a('Управление продуктами', ['/product']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>




</div>
