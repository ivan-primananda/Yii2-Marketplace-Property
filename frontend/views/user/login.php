<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<!-- Form Register -->
<section id="form-register" style="background-image: url('css/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size : 100% 100%">
    <div class="container" id="formRegister">
        <div class="col-md-6 col-md-offset-3">
            <div class="card text-center">
                
                <div class="card-header justify-content-center">
                    <h4 style="font-weight: bold">Login</h4>
                </div>
                <div class="inner-contact-agent-area">
                    
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>


                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

                </div>       
            </div>
        </div>
    </div>
</section>