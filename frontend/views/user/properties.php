<?php

use yii\helpers\Html;

?>
<!-- Jumbotron -->
<section id="main-slider">
    <div class="jumbotron-properties" style="background-image: url('css/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 200%;">
        <div class="s002">
            <form action="" method="GET">
                <fieldset style="margin-top: 100px;">
                    <legend>SEARCH PROPERTY</legend>
                </fieldset>
                <div class="row" style="margin-top: 80px;">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="inner-form">
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
    </div>
</section>
<!-- Jumbotron End -->

<!-- Property Start -->
<section>
    <div class="multiple-recent-properties">
        <div class="container">
            <div>
            <br>
            <hr>
            </div>
            <?php foreach ($properti as $proper) {
            echo "<div class=row property-list-area>
                <div class='property-list-list' data-target='Residential'>
                    <div class='col-xs-12 col-sm-4 col-md-4 property-list-list-image'>
                        <img src='picture/" . $proper->images .  "'alt='recent-properties-1' class='img-responsive'>
                    </div>
                    <div class='col-xs-12 col-sm-8 col-md-8 property-list-list-info'>
                        <div class='col-xs-12 col-sm-6 col-md-6'> "
                            . Html::a($proper->title, ['/properties/detail', 'id' => $proper->id], ['style' => 'color:white']) .
                        "</div>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <label class='property-list-list-label'>" . $proper->tipe_iklan . "</label>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <p class='recent-properties-price'>" . $proper->alamat . "," . $proper->kota . "</p>	
                            <span class='recent-properties-address'>Rp. " . number_format($proper->harga , 2, ",", ".") . "</span>
                            <p>Deskripsi</p>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-6 property-list-list-facility'>
                            <ul>
                                <li class='left'><i class='fa fa-home' aria-hidden='true'></i> Kamar Mandi</li>
                                <li class='right'><span>" . $proper->kamar_mandi . "</span> </li>
                            </ul>
                            <ul>
                                <li class='left'><i class='fa fa-bed' aria-hidden='true'></i> Kamar Tidur</li>
                                <li class='right'><span>" . $proper->kamar_tidur . "</span> </li>
                            </ul>
                            <ul>
                                <li class='left'><i class='fa fa-car' aria-hidden='true'></i> Garasi</li>
                                <li class='right'><span>" . $proper->garasi . "</span> </li>
                            </ul>
                        </div>
                    </div>							
                </div>
            </div>";
            } ?> 
            <!-- <div class="col-md-12">
                <center>{{ $proper->links()}}</center>    
            </div> -->
        </div>
    </div>
</section>
<!-- Property End -->
