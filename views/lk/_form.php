<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Orders $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_kl')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'time_stamp')->textInput() */?>

    <?/*= $form->field($model, 'dismiss')->textInput(['maxlength' => true]) */?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?/*= $form->field($model, 'user_id')->textInput() */?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
