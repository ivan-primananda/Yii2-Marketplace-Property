<?php

use yii\helpers\Html;

?>
<!-- Jumbotron -->
<div class="jumbotron" style="background-image: url('css/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 160%;">
    <div class="container">
        <h1 class="display-4">Selamat Datang Agent </h1><br>
        <h2 class="display-5" style="margin-top: -40px; color: white;"><?= $session->get('name') ?></h2>
        <hr>
        <div class="col-md-5 display-6" style="float: right;">
            <p>Daftarkan properti anda sekarang untuk jangkauan pasar yang lebih luas dan rasakan kemudahannya! </p>
            <a class="btn btn-success btn-lg" href="{{ url('/seller') }}" role="button" style="float: right">Daftar Properti!</a>
        </div>
    </div>
</div>
<!-- Jumbotron End -->


<!-- Property Start -->
<section id="property" class="paddin-2" style="margin-top: 20px;">
    <div class="container">
        <header class="section-title">
            <h2>Our Property</h2>
        </header>

        <div class="row">
        <?php foreach ($properti as $proper) {
            echo "<div class='col-md-6 col-sm-6 col-xs-6'>";
                echo "<div class='single-effect'>";
                    echo "<div class='wpf-property'> <a href=''>";
                            echo "<img src='properties/" . $proper->images . "' alt='image' class='img-responsive' style='height: 350px'></a>";
                        echo "<div class='view-caption'>";
                            echo "<div class='property-box'>";
                                echo "<div class='box-heading'>";
                                    echo "<h3>" . $proper->title . "</h3>";
                                    echo "<p style='font-size: 8px; color: white;'>" . $proper->alamat . "," . $proper->kota . "</p>";
                                    echo "<span> Rp. " . $proper->harga . "</span>";
                                    echo "<a href=''>" . $proper->tipe_iklan . "</a>";
                                echo "</div>";
                                echo "<div class='area-box text-left'>";
                                    echo "<ul>";
                                        echo "<li><i class='fa fa-columns' aria-hidden='true'></i></li>";
                                        echo "<li>";
                                            echo "<p>" . $proper->luas_tanah . "</p>";
                                            echo "<strong>2</strong><small>m<sup>2</sup></small>";
                                        echo "</li>";
                                    echo "</ul>";
                                echo "</div>";
                                    echo "<div class='area-box text-left animation animated-item-1'>";
                                        echo "<ul>";
                                            echo "<li><i class='fa fa-th-large' aria-hidden='true'></i></li>";
                                            echo "<li>";
                                                echo "<p>Kamar Tidur</p>";
                                                echo "<strong>" . $proper->kamar_tidur . "</strong>";
                                            echo "</li>";
                                        echo "</ul>";
                                    echo "</div>";
                                    echo "<div class='area-box text-left animation animated-item-1'>";
                                        echo "<ul>";
                                            echo "<li><i class='fa fa-trello' aria-hidden='true'></i></li>";
                                            echo "<li>";
                                                echo "<p>Kamar Mandi</p>";
                                                echo "<strong>" . $proper->kamar_mandi . "</strong>";
                                            echo "</li>";
                                        echo "</ul>";
                                    echo "</div>";
                                    echo "<div class='area-box text-left animation animated-item-1'>";
                                        echo "<ul>";
                                            echo "<li><i class='fa fa-home' aria-hidden='true'></i></li>";
                                            echo "<li>";
                                                echo "<p>Sertifikat</p>";
                                                echo "<strong>" . $proper->sertifikat . "</strong>";
                                            echo "</li>";
                                        echo "</ul>";
                                    echo "</div>";
                                // echo "</div>";
                                // echo "<a href=''>";
                                echo "<br>";
                                 echo "<div style='float: right; margin-right: 10px;'>";
                                    echo Html::a('Edit', ['/properties/edit/', 'id'=>$proper->id], ['class' => 'btn btn-info', 'style' => 'margin-right:10px']);
                                    echo Html::a('Delete', ['/properties/delete/', 'id' => $proper->id  ], ['class' => 'btn btn-danger']);
                                    echo "</div>";
                                // echo "</a>";
                            echo "</div>";
                        echo "</div>";
                        

                        echo "<div class='image-heading'>";
                            echo "<h3>" . $proper->title . "</h3>";
                            echo Html::a('More Details', ['/properties/detail/', 'id'=>$proper->id], ['class' => 'btn-slide']);
                            echo "<span class='pull-right'>Rp. " .$proper->harga . "</span>";
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            
            
        }
        ?>
        </div>
    </div>
</section>
<!-- Property End --> 
