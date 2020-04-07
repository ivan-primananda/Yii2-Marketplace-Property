<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- Jumbotron Search -->
<section id="main-slider">
    <div class="s002" style="background-image: url('css/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); height:310px;">
        <form action="" method="GET">
            <center><h1 style="font-size: 40px; color: white; margin-top: 120px; margin-bottom: 150px; font-family: raleway;">Temukan Hunian Idaman Anda</h1></center>
            <fieldset>
                <legend style="font-size: 30px; color: white;  font-family: raleway;">Search Property</legend>
            </fieldset>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="inner-form">
                        <div class="input-field fouth-wrap"  style="margin-right: 250px;">
                            <input type="text" name="title" placeholder="Kata Kunci..">
                        </div>
                        <center><p style="color: white; margin-right: 40px; margin-top: 10px;">Atau Berdasarkan</p></center>
                        <div class="input-field fouth-wrap">
                            <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                </svg>
                            </div>
                            <select name="lokasi_pulau">
                                <option value="Pulau Timor">Pulau Timor</option>
                                <option value="Pulau Flores">Pulau Flores</option>
                                <option value="Pulau Rote">Pulau Rote</option>
                                <option value="Pulau Sumba">Pulau Sumba</option>
                                <option value="Pulau Alor">Pulau Alor</option>
                                <option value="Pulau Sabu">Pulau Sabu</option>
                                <option value="Pulau Lembata">Pulau Lembata</option>
                            </select>
                        </div>
                        <div class="input-field fouth-wrap">
                            <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                </svg>
                            </div>
                            <select name="tipe_properti">
                                <option value="Rumah">Rumah</option>
                                <option value="Tanah">Tanah</option>
                            </select>
                        </div>
                        <div class="input-field fifth-wrap">
                            <button class="btn-search" type="submit">SEARCH</button>
                        </div>
                    </div>
                </div>
            </div>          
        </form>
    </div>
</section>
<!-- Jumbotron Search End -->


<!-- Property Start -->
<section id="property" class="paddin-2" style="margin-top: 20px;">
    <div class="container">
        <header class="section-title">
            <h2>Our Property</h2>
        </header>

        <div class="row">
        <?php foreach ($properti as $proper) {
            echo "<div class='col-md-6 col-sm-6 col-xs-6'>
                    <div class='single-effect'>
                        <div class='wpf-property'> <a href=''>
                            <img src='properties/" . $proper->images . "' alt='image' class='img-responsive' style='height: 350px'></a>
                        <div class='view-caption'>
                            <div class='property-box'>
                                <div class='box-heading'>
                                    <h3>" . $proper->title . "</h3>
                                    <p style='font-size: 8px; color: white;'>" . $proper->alamat . "," . $proper->kota . "</p>
                                    <span> Rp. " . $proper->harga . "</span>
                                    <a href=''>" . $proper->tipe_iklan . "</a>
                                </div>
                                <div class='area-box text-left'>
                                    <ul>
                                        <li><i class='fa fa-columns' aria-hidden='true'></i></li>
                                        <li>
                                            <p>" . $proper->luas_tanah . "</p>
                                            <strong>2</strong><small>m<sup>2</sup></small>
                                        </li>
                                    </ul>
                                </div>
                                    <div class='area-box text-left animation animated-item-1'>
                                        <ul>
                                            <li><i class='fa fa-th-large' aria-hidden='true'></i></li>
                                            <li>
                                                <p>Kamar Tidur</p>
                                                <strong>" . $proper->kamar_tidur . "</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class='area-box text-left animation animated-item-1'>
                                        <ul>
                                            <li><i class='fa fa-trello' aria-hidden='true'></i></li>
                                            <li>
                                                <p>Kamar Mandi</p>
                                                <strong>" . $proper->kamar_mandi . "</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class='area-box text-left animation animated-item-1'>
                                        <ul>
                                            <li><i class='fa fa-home' aria-hidden='true'></i></li>
                                            <li>
                                                <p>Sertifikat</p>
                                                <strong>" . $proper->sertifikat . "</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>" .
                                    Html::a('More Details', ['/property/detail'], ['class' => 'btn-slide']) .
                                "
                            </div>
                        </div>

                        <div class='image-heading'>
                            <h3>" . $proper->title . "</h3>"                            
                            . Html::a('More Details', ['/properties/detail', 'id' => $proper->id], ['class' => 'btn-slide']) .
                            "<span class='pull-right'>Rp. " .$proper->harga . "</span>
                        </div>
                    </div>
                </div>
            </div>";
        }
        ?>
        </div>
    </div>
</section>
<!-- Property End --> 
