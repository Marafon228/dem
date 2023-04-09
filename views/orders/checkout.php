<?php
/*
 * Страница оформления заказа, файл views/order/checkout.php
 */
/** @var array $order */


use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h1>Оформление заказа</h1>
                <div id="checkout">
                    <?php
                    $form = ActiveForm::begin(
                        ['id' => 'checkout-form', 'class' => 'form-horizontal']
                    );
                    ?>
                    <?= $form->field($order, 'fio_kl')->textInput(); ?>
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']); ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>