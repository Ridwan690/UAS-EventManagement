<?php
// Cek apakah sesi sudah aktif sebelum memulai sesi
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Halaman <?= $data['judul']; ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?= BASEURL; ?>/front-assets/assets/img/favicon.png">
        <link rel="apple-touch-icon" href="<?= BASEURL; ?>/front-assets/assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= BASEURL; ?>/front-assets/assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= BASEURL; ?>/front-assets/assets/img/apple-touch-icon-114x114.png">
        
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/core/bootstrap-3.3.7.min.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/core/animate.min.css">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/main/main.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/main/setting.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/main/hover.css">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/magnific/magic.min.css">        
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/magnific/magnific-popup.css">              
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/magnific/magnific-popup-zoom-gallery.css">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/owl-carousel/owl.transitions.css">
        
        <!-- Load Color CSS - Please uncomment to apply the color.
        =====================================      
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/blue.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/brown.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/cyan.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/dark.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/green.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/orange.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/purple.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/pink.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/red.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/yellow.css">-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/pasific.css">
        
        <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================       
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-arrows-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-basic-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-basic-elaboration-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-ecommerce-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-music-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-software-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-weather-10.css">--> 
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/font-awesome.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/et-line-font.css">
        
        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll font-open-sans" href="#page-top">   
                        Event Management
                    </a>
                </div>
        
                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown megamenu-fw has-dropdown-menu"><a href="<?= BASEURL; ?>/" class="dropdown-toggle color-light">Home </a>
                        </li>
                        <li class="dropdown megamenu-fw has-dropdown-menu"><a href="<?= BASEURL; ?>/event" class="dropdown-toggle color-light">All Event </a>
                        </li>
                        <li class="dropdown megamenu-fw has-dropdown-menu"><a href="<?= BASEURL; ?>/about" class="dropdown-toggle color-light">About </a>
                        </li>
                        <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true): ?>
                            <li class="dropdown megamenu-fw has-dropdown-menu"><a href="<?= BASEURL; ?>/dashboard" class="dropdown-toggle color-light">Dashboard </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        