<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/css/bootstrap.css',
        'css/css/master.css',
        'css/css/main.css',
        'css/images/heading-icon.png',
        'https://fonts.googleapis.com/css?family=Fjalla+One',
        'https://fonts.googleapis.com/css?family=Oswald',
        'https://fonts.googleapis.com/css?family=Titillium+Web',
        'https://fonts.googleapis.com/css?family=Raleway',
    ];
    public $js = [
        'css/js/jquery-2.2.3.min.js',
        'css/js/bootstrap.min.js',
        'css/js/owl.carousel.min.js',
        'css/js/mmenu.min.all.js',
        'css/js/custom-js.js',
        'css/js/choices.js',
        'css/js/flatpickr.js',
        'css/agent/js/main.js',
        'css/sale/js/jquery.bootstrap.wizard.js',
        'css/sale/js/paper-bootstrap-wizard.js',
        'css/sale/js/jquery.validate.min.js',
        'css/sale/js/jquery-2.2.4.min.js',
        'css/sale/js/bootstrap.min.js',
        'css/js/formatRupiah.js',
        'css/js/kprBank.js',
        'css/js/comment.js',
        'https://unpkg.com/sweetalert/dist/sweetalert.min.js',
        'css/js/bootstrap.bundle.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
