<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<!-- Jumbotron -->
<div class="jumbotron" style="background-image: url('css/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 160%; height: 300px;">
    <div class="container">
        <h1 class="display-4" style="text-align: center;">Update Property Anda </h1>
        <hr>
    </div>
</div>
<!-- Jumbotron End -->


<!-- Content Properti -->
<div class="container card-sale" style="margin-bottom: 50px;">
    <small><p style="font-size: 10px;"><strong>NB :</strong> Untuk penjualan <strong>TANAH KAVLING</strong>, silahkan isi dengan angka <strong>(0)</strong> pada field yang tidak memiliki informasi.</p></small>
    <div class="card text-center">       
        <?php $form = ActiveForm::begin(['method' => 'post', 'action' => Url::to(['/properties/edit/', 'id' => $model->id]), 'options' => ['enctype' => 'multipart/form-data']]); ?>                        
            
            <div class="card-header">
                Update Properti
            </div>
            <div class="card-body">    
                <h3 class="card-title" style="color: black; font-weight: 700;">Data Properti</h3>
                <div class="hidden">
                    <?= $form->field($model, 'id_agent')->textInput(['value' => $model->id_agent]) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'images')->fileInput(['class' => 'form-control']) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'title') ?>
                </div>
                <div class="row">
                    <div class="col">
                        <?= $form->field($model, 'jumlah_lantai') ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'daya_listrik') ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'tipe_properti')->dropDownList($model->tipeProperti(), ['class' => 'form-control']) ?>
                        </select>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'tipe_iklan')->dropDownList($model->tipeIklan(), ['class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?= $form->field($model, 'luas_tanah')->label('Luas Tanah (m<sup>2</sup>)'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'luas_bangunan')->label('Luas Bangunan (m<sup>2</sup>)'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'sertifikat')->dropDownList($model->sertifikat(), ['class' => 'form-control']) ?>
                    </div>
                </div>
                <hr>
                <h3 class="second-title" style="color: black; font-weight: 700; margin-bottom: 20px;"> Fasilitas </h3>
                <div class="row">
                    <div class="col">
                        <?= $form->field($model, 'kamar_tidur'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'kamar_mandi'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'garasi'); ?>
                    </div>
                </div>
                <hr>
                <h3 class="second-title" style="color: black; font-weight: 700; margin-bottom: 20px;"> Harga & Lokasi</h3>
                <div class="row">
                    <div class="col">
                        <?= $form->field($model, 'harga'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'minimal_dp'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <?= $form->field($model, 'lokasi_pulau')->dropDownList($model->lokasiPulau(), ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-7">
                        <?= $form->field($model, 'alamat'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?= $form->field($model, 'kecamatan'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'kelurahan'); ?>
                    </div>
                    <div class="col">
                        <?= $form->field($model, 'kota'); ?>
                    </div>
                </div>
                <hr>
                <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]); ?>
            </div>
            <div class="card-footer text-muted">
                <input type="submit" class="btn btn-primary" value="Update Property">
            </div>
        <?php ActiveForm::end(); ?>  
    </div>
</div>
<!-- Content Properti End -->
