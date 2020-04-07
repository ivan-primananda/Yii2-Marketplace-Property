<div class="jumbotron" style="background-image: url(<?= 'properties/' . $model->images ?>); background-size: 100% 160%;"></div>
<center>
    <div class="btn btn-md btn-success" style="margin-top: -48px;">
        <a href="" data-toggle="modal" data-target="#myModalnih" style="color: black"><i class="fa fa-lock"></i> Lihat Foto Lainnya</a>
    </div>
</center>
<!-- Jumbotron End -->

<!-- Modal -->
<div class="modal fade" id="myModalnih" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle" aria-hidden="true"></i></span></button>
                </div>

            <div class="modal-body">
                <div style="width: 100%">
                    <img src="<?= 'properties/' . $model->images ?>" class="d-block w-100" style="height: 300px;margin-top: 15px;">
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Content Start -->
<section class="property-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 agent-contact-sidebar">
                <!-- <div>
                    <p style="font-size: 11px">Terakhir Update : {{ $detail->updated_at }}</p>
                </div> -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> JUDUL PROPERTY : <?= $model->title ?></strong></h4></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> BIAYA PROPERTY </strong></h4></center>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Harga :</strong>
                                    <br>
                                    <?= 'Rp. ' . number_format($model->harga , 2, ",", ".") ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Uang Muka :</strong>
                                    <br>
                                    <?= 'Rp. ' . number_format($model->minimal_dp , 2, ",", ".") ?>
                                </p>
                            </div>
                            <!-- @if($detail->tipe_properti == "Rumah")
                                <a href="{{ url('properties/simulasi/' .$detail->id) }}">
                                    <div class="simulasi-kpr">
                                        Simulasi KPR
                                    </div>
                                </a>
                            @endif -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> DESKRIPSI </strong></h4></center>
                        <p><?= $model->deskripsi ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> DATA PROPERTY </strong></h4></center>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Nama Property :</strong>
                                    <br>
                                    <small><?= $model->title ?></small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Tipe Property :</strong>
                                    <br>
                                    <small><?= $model->tipe_properti ?></small>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Tipe Iklan :</strong>
                                    <br>
                                    <small><?= $model->tipe_iklan ?></small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Sertifikat :</strong>
                                    <br>
                                    <small><?= $model->sertifikat ?></small>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Luas Tanah :</strong>
                                    <br>
                                    <small><?= $model->luas_tanah ?> m<sop>2</sop></small>
                                </p>
                            </div>
                            <?php if ( $model->tipe_properti == "Rumah") {
                                echo "<div class='col-md-6'>
                                    <p style='font-size: 16px;'>
                                        <strong style='color: black;'> Luas Bangunan :</strong>
                                        <br>
                                        <small>" . $model->luas_bangunan . "m<sop>2</sop></small>
                                    </p>
                                </div>
                                <div class='col-md-6'>
                                    <p style='font-size: 16px;'>
                                        <strong style='color: black;'> Daya Listrik :</strong>
                                        <br>
                                        <small>" . $model->daya_listrik . "watt</small>
                                    </p>
                                </div>";
                            } ?>
                        </div>
                    </div>
                </div>
                <?php if( $model->tipe_properti == "Rumah") {
                    echo "<div class='row'>
                        <div class='col-lg-12 col-md-12'>
                            <center><h4 style='color:black;'><strong> PROPERTY's ROOM </strong></h4></center>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <p style='font-size: 16px;'>
                                        <strong style='color: black;'> Jumlah Lantai :</strong>
                                        <br>
                                        <small>" . $model->jumlah_lantai . "</small>
                                    </p>
                                </div>
                                <div class='col-md-6'>
                                    <p style='font-size: 16px;'>
                                        <strong style='color: black;'> Jumlah Kamar Tidur :</strong>
                                        <br>
                                        <small>" . $model->kamar_tidur . "</small>
                                    </p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <p style='font-size: 16px;'>
                                        <strong style='color: black;'> Jumlah Kamar Mandi :</strong>
                                        <br>
                                        <small>" . $model->kamar_mandi . "</small>
                                    </p>
                                </div>
                                <div class='col-md-6'>
                                    <p style='font-size: 16px;'>
                                        <strong style='color: black;'> Jumlah Garasi :</strong>
                                        <br>
                                        <small>" . $model->garasi . "</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>";
                } ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <center><h4 style="color:black;"><strong> ALAMAT PROPERTY </strong></h4></center>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Alamat :</strong>
                                    <br>
                                    <small><?= $model->alamat ?></small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Kecamatan :</strong>
                                    <br>
                                    <small><?= $model->kecamatan ?></small>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Kelurahan :</strong>
                                    <br>
                                    <small><?= $model->kelurahan ?></small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 16px;">
                                    <strong style="color: black;"> Kota/Kabupaten :</strong>
                                    <br>
                                    <small><?= $model->kota ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="agent-contact-sidebar">
                    <div class="agent-profile-sidebar"> 
                        <img src="<?= 'picture/' . $agent->picture ?>" alt="Agent Image" />
                        <h4><?= $agent->name ?></h4>
                        <p>Agent of Property</p>
                    </div>
                    <div class="agent-contact-detail-sidebar">
                        <p><i class="fa fa-phone"> </i> <?= $agent->phone ?> </p>
                        <p><i class="fa fa-envelope"></i><?= $agent->email ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content End -->