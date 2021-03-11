            <!-- Begin Slider With Banner Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Slider Area -->
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-area pt-sm-30 pt-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-1 " style="background-image: url('<?php echo statit_src() ?>images/slider/banner11.jpg?auto=format,enhance');">
                                        <div class="slider-progress"></div>
                                        <!--<div class="slider-content">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h2>Chamcham Galaxy S9 | S9+</h2>
                                            <h3>Starting at <span>$1209.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shop Now</a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-2" style="background-image: url('<?php echo statit_src() ?>images/slider/banner22.jpg?auto=format,enhance');">
                                        <div class="slider-progress"></div>
                                        <!--<div class="slider-content">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>$824.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shop Now</a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-3" style="background-image: url('<?php echo statit_src() ?>images/slider/banner33.jpg?auto=format,enhance');">
                                        <div class="slider-progress"></div>
                                        <!--<div class="slider-content">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>$1849.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shop Now</a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- 
                        <div class="col-lg-4 col-md-4 text-center pt-sm-30 pt-xs-30">
                            <div class="li-banner">
                                <a href="#">
                                    <img src="<?php echo slider_images() ?>banner11.jpg" alt="">
                                </a>
                            </div>
                            <div class="li-banner mt-15 mt-md-30 mt-xs-25 mb-xs-5">
                                <a href="#">
                                    <img src="<?php echo slider_images() ?>banner33.jpg" alt="">
                                </a>
                            </div>
                        </div>
                         Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Banner Area End Here -->
            <!-- product-area start -->
            <div class="product-area pt-55 pb-25 pt-xs-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>New Arrival</span></a></li>
                                   <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bestseller</span></a></li>
                                   <li><a data-toggle="tab" href="#li-featured-product"><span>Featured Products</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                 <?php foreach ($new_arrival as $book): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">
                                                    <img class="pro-image" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4><a class="product_name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions" align="center" style="align-content: center;">
                                                    <ul class="add-actions-link" align="center">
                                                        <li class="add-cart active"><a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">Buy</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                 <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                 <?php foreach ($best_seller as $book): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">
                                                    <img class="pro-image" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4><a class="product_name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                         <li class="add-cart active"><a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">Buy</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                 <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div id="li-featured-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                 <?php foreach ($featured as $book): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">
                                                    <img class="pro-image" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4><a class="product_name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">Buy</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                 <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-area end -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner li-static-banner-4 text-center pt-20">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-6">
                            <div class="single-banner pb-sm-30 pb-xs-30">
                                <a href="#">
                                    <img src="<?php echo statit_src() ?>images/slider/banner22.jpg?auto=format,enhance" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-6">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="<?php echo statit_src() ?>images/slider/banner11.jpg?auto=format,enhance" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Trending</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                 <?php foreach ($featured as $book): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">
                                                    <img class="pro-image" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4><a class="product_name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">Buy</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class="product-area li-laptop-product li-tv-audio-product pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Sci - Fi</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                 <?php foreach ($featured as $book): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">
                                                    <img class="pro-image" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4><a class="product_name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">Buy</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <!--<div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                           
                            <div class="li-static-home-image" style="background-image: url(<?php echo slider_images() ?>banner33.jpg)"></div>
     
                            <div class="li-static-home-content">
                                <p>Sale Offer<span>-20% Off</span>This Week</p>
                                <h2>Featured Product</h2>
                                <h2>Sanai Accessories 2018</h2>
                                <p class="schedule">
                                    Starting at
                                    <span> $1209.00</span>
                                </p>
                                <div class="default-btn">
                                    
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Group Featured Product Area -->
            <div class="group-featured-product pt-60 pb-40 pb-xs-25">
                <div class="container">
                    <div class="row">
                        <!-- Begin Featured Product Area -->
                        <div class="col-lg-4">
                            <div class="featured-product">
                                <div class="li-section-title">
                                    <h2>
                                        <span>Top Selling Today</span>
                                    </h2>
                                </div>
                                <div class="featured-product-active-2 owl-carousel">
                                    <div class="featured-product-bundle">
                                       <?php foreach ($today_top as $book): ?>
                                        <div class="row">
                                            <div class="group-featured-pro-wrapper">
                                                <div class="product-img">
                                                    <a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">
                                                        <img alt="<?php echo $book->slug; ?>" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <h4><a class="featured-product-name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="featured-price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                        <!-- Begin Featured Product Area -->
                        <div class="col-lg-4">
                            <div class="featured-product pt-sm-10 pt-xs-25">
                                <div class="li-section-title">
                                    <h2>
                                        <span>Top Selling This Month</span>
                                    </h2>
                                </div>
                                <div class="featured-product-active-2 owl-carousel">
                                    <div class="featured-product-bundle">
                                       <?php foreach ($month_top as $book): ?>
                                        <div class="row">
                                            <div class="group-featured-pro-wrapper">
                                                <div class="product-img">
                                                    <a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">
                                                        <img alt="<?php echo $book->slug; ?>" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <h4><a class="featured-product-name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="featured-price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                        <!-- Begin Featured Product Area -->
                        <div class="col-lg-4">
                            <div class="featured-product pt-sm-10 pt-xs-25">
                                <div class="li-section-title">
                                    <h2>
                                        <span>Top Selling This Year</span>
                                    </h2>
                                </div>
                                <div class="featured-product-active-2 owl-carousel">
                                    <div class="featured-product-bundle">
                                       <?php foreach ($year_top as $book): ?>
                                        <div class="row">
                                            <div class="group-featured-pro-wrapper">
                                                <div class="product-img">
                                                    <a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">
                                                        <img alt="<?php echo $book->slug; ?>" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <h4><a class="featured-product-name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="featured-price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Group Featured Product Area End Here -->
            