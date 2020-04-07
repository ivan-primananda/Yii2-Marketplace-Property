<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<!-- Jumbotron -->
<div class="jumbotron" style="background-image: url('css/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 160%; height: 300px;">
    <div class="container">
        <h1 class="display-4" style="text-align: center;">Jual Property Anda Sekarang </h1>
        <hr>
    </div>
</div>
<!-- Jumbotron End -->


<!-- Content Properti -->
<div class="container card-sale" style="margin-bottom: 50px;">
    <small><p style="font-size: 10px;"><strong>NB :</strong> Untuk penjualan <strong>TANAH KAVLING</strong>, silahkan isi dengan angka <strong>(0)</strong> pada field yang tidak memiliki informasi.</p></small>
    <div class="card text-center">       
        <?php $form = ActiveForm::begin(['method' => 'post', 'action' => Url::to(['/agent/sale']), 'options' => ['enctype' => 'multipart/form-data']]); ?>                        
            
            <div class="card-header">
                Jual Properti
            </div>
            <div class="card-body">    
                <h3 class="card-title" style="color: black; font-weight: 700;">Data Properti</h3>
                <div class="hidden">
                    <?= $form->field($properti, 'id_agent')->textInput(['value' => $session->get('id')]) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($properti, 'images')->fileInput(['class' => 'form-control']) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($properti, 'title') ?>
                </div>
                <div class="row">
                    <div class="col">
                        <?= $form->field($properti, 'jumlah_lantai') ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'daya_listrik') ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'tipe_properti')->dropDownList($properti->tipeProperti(), ['class' => 'form-control']) ?>
                        </select>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'tipe_iklan')->dropDownList($properti->tipeIklan(), ['class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?= $form->field($properti, 'luas_tanah')->label('Luas Tanah (m<sup>2</sup>)'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'luas_bangunan')->label('Luas Bangunan (m<sup>2</sup>)'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'sertifikat')->dropDownList($properti->sertifikat(), ['class' => 'form-control']) ?>
                    </div>
                </div>
                <hr>
                <h3 class="second-title" style="color: black; font-weight: 700; margin-bottom: 20px;"> Fasilitas </h3>
                <div class="row">
                    <div class="col">
                        <?= $form->field($properti, 'kamar_tidur'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'kamar_mandi'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'garasi'); ?>
                    </div>
                </div>
                <hr>
                <h3 class="second-title" style="color: black; font-weight: 700; margin-bottom: 20px;"> Harga & Lokasi</h3>
                <div class="row">
                    <div class="col">
                        <?= $form->field($properti, 'harga'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'minimal_dp'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <?= $form->field($properti, 'lokasi_pulau')->dropDownList($properti->lokasiPulau(), ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-7">
                        <?= $form->field($properti, 'alamat'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?= $form->field($properti, 'kecamatan'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'kelurahan'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($properti, 'kota'); ?>
                    </div>
                </div>
                <hr>
                <?= $form->field($properti, 'deskripsi')->textarea(['rows' => 6]); ?>
            </div>
            <div class="card-footer text-muted">
                <input type="submit" class="btn btn-primary" value="Jual Property">
            </div>
        <?php ActiveForm::end(); ?>  
    </div>
</div>
<!-- Content Properti End -->
