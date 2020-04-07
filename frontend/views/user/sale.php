<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<!-- Jumbotron -->
<section id="main-slider">
    <div class="jumbotron" style="background-image: url('css/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 150%;">
        <h1 class="display-4">Selamat Datang Agen!</h1><br>
        <p class="lead">Bergabunglah bersama kami dalam penjualan tanah dan property anda.</p>
        <hr class="my-4">
        <div class="col-md-6 col-md-offset-6">
            <p>Dapatkan pengalaman yang lebih mudah dalam penjualan tanah dan properti, serta jangkauan pasar yang lebih luas untuk memperbesar peluang terjualnya tanah dan properti anda.</p>
            <a class="btn btn-success btn-lg" href="#formRegister" role="button" style="float: right">Daftar Sekarang!</a>
        </div>
    </div>
</section>
<!-- Jumbotron End -->


<!-- Register's Step -->
<section id="main-slider">
    <div class="container">
        <div class="row padding-top-74  padding-bottom-64">
            <div class="about-services padding-0">
                <div class="col-md-4 col-sm-4 col-xs-12 servicesone padding-left-0"> <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <div class="float-left col-md-9 col-sm-9 col-xs-12 padding-0">
                        <h3 class="blue">Daftar</h3>
                        <p class="white">Daftarkan diri anda sebagain agen penjualan tanah dan properti.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 servicesone padding-left-0"> <i class="fa fa-pencil" aria-hidden="true"></i>
                    <div class="float-left col-md-9 col-sm-9 col-xs-12 padding-0">
                        <h3 class="blue">Jual Property</h3>
                        <p class="white">Jual tanah dan properti disertai informasi terkait penjualan tanah dan properti anda.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 servicesone padding-left-0"> <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    <div class="float-left col-md-9 col-sm-9 col-xs-12 padding-0">
                        <h3 class="blue">Bertemu Calon Pembeli</h3>
                        <p class="white">Bertemu calon pembeli anda untuk melakukan diskusi terkait notaris, pembayaran, dan segala hal yang menyangkut pemindahan hak milik tanah dan properti.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><hr class="my-3">
</section>
<!-- Register's Step End -->


<!-- Form Register -->
<section id="form-register">
    <div class="container" id="formRegister">
        <div class="col-md-6 col-md-offset-3">
            <div class="card text-center">
                
                <div class="card-header justify-content-center">
                    <h4 style="font-weight: bold">Register Here</h4>
                </div>
                <div class="inner-contact-agent-area">
                    <?php $form = ActiveForm::begin(['method' => 'post', 'action' => Url::to(['/user/sale']), 'options' => ['enctype' => 'multipart/form-data']]); ?>                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="picture-container">
                                    <!-- <div class="picture"> -->
                                        <!-- <img src="css/icon/icons8-iron-man.svg" class="picture-src" id="showgambar" title="" />                                       -->
                                        <?= $form->field($model, 'picture')->fileInput() ?>
                                    <!-- </div> -->
                                    <!-- <h6>Pilih Foto</h6> -->
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">                           
                                <?= $form->field($model, 'name'); ?>
                                <?= $form->field($model, 'email') ?>
                                <?= $form->field($model, 'password')->passwordInput(); ?>
                                <?= $form->field($model, 'phone'); ?>
                                <?= $form->field($model, 'domisili'); ?>
                                <?= $form->field($model, 'file_cv')->fileInput() ?>                                    
                            </div>
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton('Daftar Menjadi Agent', ['class' => 'btn btn-info', 'name' => 'btn-daftar', 'style' => 'margin-top:50px;']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>                    
                </div>
                
        
            </div>
        </div>
    </div>

</section>