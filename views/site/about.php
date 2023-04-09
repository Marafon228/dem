<?php
/** @var array $products */
/** @var yii\web\View $this */
use yii\bootstrap5\Carousel;
use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <img src="../uploads/logo.png" alt="logo">
    <p>Девиз ....</p>
    <?php

    // Define the options for the carousel widget
    $carouselOptions = [
        'items' => array_map(function ($model) {
            return [
                'content' => '<img src="../uploads/' . $model['image'] . '">' .
                    '<div class="carousel-caption">' .
                    '<h3>' . $model['name'] . '</h3>' .
                    '<p>$' . $model['price'] . '</p>' .
                    '</div>',
            ];
        }, $products),
        'controls' => [
            '<span class="carousel-control-prev-icon" aria-hidden="true"></span>',
            '<span class="carousel-control-next-icon" aria-hidden="true"></span>',
        ],
        'options' => [
            'class' => 'product-carousel',
        ],
    ];

    // Render the carousel widget
    echo Carousel::widget($carouselOptions);


    ?>


</div>
