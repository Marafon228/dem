<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Где нас найти ?';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <img src="../uploads/map.jpg" alt="map">

    <p>Адрес: г.Калуга</p>
    <p>Телефон: 8(999)999-99-99</p>
    <p>Email: world.flowers@mail.ru</p>
</div>
