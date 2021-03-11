<!doctype html>
<html class="no-js" lang="zxx">

<!-- index-431:41-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo config('title'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/settings/<?php echo config('favicon') ?>">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo site_assets() ?>css/responsive.css">
    <!-- Modernizr js -->
    <script src="<?php echo site_assets() ?>js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header class="li-header-4">
                <!-- Begin Header Top Area -->

                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.html">
                                        <!--<img src="<?php echo base_url() ?>/assets/images/menu/logo/2.jpg" alt="">-->
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="<?php echo site_url('search') ?>" class="hm-searchbox">
                                    <select class="nice-select select-search-category" name="category">
                                        <option value="0">All</option>
                                        <?php foreach ($category as $cat): ?>
                                            <option value="<?php echo $cat->cat_slug ?>"><?php echo $cat->name ?></option>
                                        <?php endforeach ?>                         
                                    </select>

                                    <input placeholder="Search for your favourite book" type="search" name="q" value="<?php echo set_value('q') ?>">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <!--<li class="hm-wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>-->
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <!--<div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">£80.00
                                                    <span class="cart-item-count">2</span>
                                                </span>
                                            </div>-->
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <!--<img src="images/product/small-size/1.jpg" alt="cart products">-->
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <!--<img src="images/product/small-size/2.jpg" alt="cart products">-->
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                                <div class="minicart-button">
                                                    <a href="checkout.html" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class="hb-menu">
                                   <nav>
                                       <ul>
                                           <li><a href="<?php echo base_url() ?>home">Home</a></li>
                                            <li class="dropdown-holder"><a href="#">Categories</a>
                                               <ul class="hb-dropdown">
                                                    <?php foreach ($category as $cat): ?>
                                                        <li><a data-index="<?php echo $cat->cat_slug ?>" name="cat_slug" href="<?php echo base_url('category/'.$cat->cat_slug) ?>"><?php echo $cat->name ?></a></li>
                                                    <?php endforeach ?>
                                               </ul>
                                           </li>
                                           <li><a href="<?php echo base_url() ?>schemes">Schemes of Work</a></li>
                                           <li><a href="<?php echo base_url() ?>contact">Contact Us</a></li>
                                       </ul>
                                   </nav>
                               </div>
                               <!-- Header Bottom Menu Area End Here -->
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Header Bottom Area End Here -->
               <!-- Begin Mobile Menu Area -->
               <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
                <div class="container"> 
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </header>