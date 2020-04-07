<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Header Start -->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <ul class="contactinfo">
                <li><a href="#"><i class="fa fa-phone-square"></i> +92 95 01 88 821</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> info@realestate.com</a></li>
                </ul>
            </div>
            <div class="col-md-5 text-right">
                <ul class="shop-menu">
                <?php
                $session = Yii::$app->session;
                if ($session->isActive){
                    
                } else {
                    echo "<li><i class='fa fa-lock' style='color : white'></i>" . Html::a(' Login', ['/user/login']) . "</li>";
                }
                ?>                    
                </ul>
                <div class="topbar-social-icons"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="$"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </div>
            </div>
        </div>
    </div>
</div>

<header id="navigation header-container-box" class="navigation affix-top menu-line" data-offset-top="2" data-spy="affix">
    <div class="container" id="menu-nav">
        <div class="row">
            <!-- logo -->
            <div class="col-md-3">
                <div class="logo"> <a href=""><img alt="Logo" src="css/images/logo.png" id="logo-header"></a> </div>
            </div>
            
            <!-- Navbar -->
            <div class="col-md-7 col-md-offset-2"> 
                <a class="visible-xs" href="#mobile-menu" id="mobile-menu-button">
                    <i class="fa fa-bars"></i>
                </a>
                <nav id="navigation" style="float: right;">
                    <ul>
                    <?php
                        $session = Yii::$app->session;
                        if ($session->isActive){
                            echo "<li>" . Html::a('Home', ['/agent/index'], ['class' => 'hvr-overline-from-center']) . "</li>";
                            echo "<li>" . Html::a('Jual Property', ['/agent/sale'], ['class'=> 'hvr-overline-from-center']) . "</li>";
                            echo "<li>" . Html::a('Logout', ['/agent/logout'], ['class' => 'hvr-overline-from-center']) . "</li>";
                        } else {                            
                            echo "<li>" . Html::a('Home', ['/user/index'], ['class' => 'hvr-overline-from-center']) . "</li>";
                            echo "<li>" . Html::a('Jual Property', ['/user/sale'], ['class'=> 'hvr-overline-from-center']) . "</li>";
                            echo "<li>" . Html::a('Properties', ['/user/properties'], ['class' => 'hvr-overline-from-center']) . "</li>";
                            echo "<li>" . Html::a('List Agent', ['/user/list-agent'], ['class' => 'hvr-overline-from-center']) . "</li>";                        
                        }
                    ?>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
<!-- Header Ends --> 

<?= $content ?>

<!-- Feature Start -->
<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Our Properties</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Single Story</a></li>
                            <li><a href="#">Dubble Story</a></li>
                            <li><a href="#">Tripple Story</a></li>
                            <li><a href="#">Home in Merrick Way</a></li>
                            <li><a href="#">Resort</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quick Links</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Home in Coral Gables</a></li>
                            <li><a href="#">Villa on Grand Avenue</a></li>
                            <li><a href="#">Home in Merrick Way</a></li>
                            <li><a href="#">Land / Plots</a></li>
                            <li><a href="#">Restaurent</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>About Real Estate</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Real Estate News Letter</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />
                                our site and be updated your self...</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2016 Build Dreams Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="#">Logicsforest</a></span></p>
            </div>
        </div>
    </div>
</footer>
<!-- Feature End --> 


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
