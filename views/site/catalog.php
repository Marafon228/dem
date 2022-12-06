<?php

/** @var yii\web\View $this */
/** @var app\controllers\SiteController $products */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Главная страница';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <?php
            foreach ($products as $product){
                echo '
                <div class="col-lg-3">
                <h2>'.$product->name .'</h2>

                <img class="img-responsive" alt="sasdasd" src="../uploads/'.$product->image.'" width="100px" height="100px">

                <p>'.$product->price.' $</p>           
                        
                ';
                if (Yii::$app->user->identity->admin == 1 || Yii::$app->user->identity->admin != 1){
                    echo '

                    <form method="post"
                                          action='.Url::to(['basket/add']).'>      
                    <input type="hidden" name="id" value='.$product->id.'>
                    '.Html::hiddenInput(
                            Yii::$app->request->csrfParam,
                            Yii::$app->request->csrfToken
                        ).'
                    <button type="submit">                                           
                    Добавить в корзину
                    </button>
                    </form>
                    ';
                }
                echo '              
                </div> 
                ';

            }
            ?>



        </div>

    </div>
</div>