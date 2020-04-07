<?php

use yii\helpers\Html;

?>

<!-- Jumbotron -->
<section id="main-slider">
    <div class="jumbotron-properties" style="background-image: url('css/img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg'); background-size: 100% 200%;">
        <h1 class="judul-properties"><hr> List Agent <hr></h1>
    </div>
</section>
<!-- Jumbotron End -->


<!-- Table Agent -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 tablestyle">
                <div class="pull-left">
                    <strong>Jumlah Agent : jumlah</strong>
                </div>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Domisili</th>
                        <th>Action</th>
                    </thead>
                    <?php foreach($agent as $agen){
                    echo "<tbody>";
                        echo "<tr>";
                            echo "<td>" . $agen->name . "</td>";
                            echo "<td>" . $agen->email . "</td>";
                            echo "<td>" . $agen->phone . "</td>";
                            echo "<td>" . $agen->domisili . "</td>";
                            echo "<td>" . Html::a('Detail', ['/user/detail-agent', 'id' => $agen->id], ['class' => 'btn btn-success btn-md']) . "</td>";
                        echo "</tr>";
                    echo "</tbody>";
                    } ?>
                </table>
            </div>
            <!-- <div class="col-md-12 col-md-offset-5">
                {{ $listAgents->links()}}    
            </div> -->
        </div>
    </div>
</section>
<!-- Table Agent End -->