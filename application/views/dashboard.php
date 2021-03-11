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
                                                <a href="<?php echo site_url('view/'.$book->slug) ?>">
                                                    <img src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance&fit=crop&w=210&h=300" alt="<?php echo $book->slug; ?>">
                                                </a>
                                                <span class="sticker">New</span>
                                              
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a style="display: none;" href="shop-left-sidebar.html"></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul style="display: none;" class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo site_url('purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span><!--
                                                        <span class="new-price new-price-2">KES <?php echo $book->price; ?></span>
                                                        <span class="old-price">KES <?php echo $book->price; ?></span>
                                                        <span class="discount-percentage">-7%</span>-->
                                                    </div>
                                                </div>
                                                <div class="add-actions" align="center" style="align-content: center;">
                                                    <ul class="add-actions-link" align="center">
                                                        <li class="add-cart active"><a href="<?php echo site_url('purchase/'.$book->slug) ?>">Buy</a></li>
                                                        <li><a href="" onclick="viewDetails(<?php echo encrypt($book->id); ?>)" title="Quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                                                <a href="<?php echo site_url('view/'.$book->slug) ?>">
                                                    <img class="pro-image" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a style="display: none;" href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul style="display: none;" class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo site_url('purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span><!--
                                                        <span class="new-price new-price-2">KES <?php echo $book->price; ?></span>
                                                        <span class="old-price">KES <?php echo $book->price; ?></span>
                                                        <span class="discount-percentage">-7%</span>-->
                                                    </div>
                                                </div>
                                                <div class="add-actions" align="center" style="align-content: center;">
                                                    <ul class="add-actions-link" align="center">
                                                        <li class="add-cart active"><a href="<?php echo site_url('purchase/'.$book->slug) ?>">Buy</a></li>
                                                        <li><a href="" onclick="viewDetails(<?php echo encrypt($book->id); ?>)" title="Quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                                                <a href="<?php echo site_url('view/'.$book->slug) ?>">
                                                    <img class="pro-image" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a style="display: none;" href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul style="display: none;" class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo site_url('purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span><!--
                                                        <span class="new-price new-price-2">KES <?php echo $book->price; ?></span>
                                                        <span class="old-price">KES <?php echo $book->price; ?></span>
                                                        <span class="discount-percentage">-7%</span>-->
                                                    </div>
                                                </div>
                                                <div class="add-actions" align="center" style="align-content: center;">
                                                    <ul class="add-actions-link" align="center">
                                                        <li class="add-cart active"><a href="<?php echo site_url('purchase/'.$book->slug) ?>">Buy</a></li>
                                                        <li><a href="" onclick="viewDetails(<?php echo encrypt($book->id); ?>)" title="Quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                                 <?php foreach ($trending as $book): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo site_url('view/'.$book->slug) ?>">
                                                    <img class="pro-image" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a style="display: none;" href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul style="display: none;" class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo site_url('purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span><!--
                                                        <span class="new-price new-price-2">KES <?php echo $book->price; ?></span>
                                                        <span class="old-price">KES <?php echo $book->price; ?></span>
                                                        <span class="discount-percentage">-7%</span>-->
                                                    </div>
                                                </div>
                                                <div class="add-actions" align="center" style="align-content: center;">
                                                    <ul class="add-actions-link" align="center">
                                                        <li class="add-cart active"><a href="<?php echo site_url('purchase/'.$book->slug) ?>">Buy</a></li>
                                                        <li><a href="" onclick="viewDetails(<?php echo encrypt($book->id); ?>)" title="Quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                                                <a href="<?php echo site_url('view/'.$book->slug) ?>">
                                                    <img src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance" alt="<?php echo $book->slug; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a style="display: none;" href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul style="display: none;" class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="<?php echo site_url('purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">KES <?php echo $book->price; ?></span><!--
                                                        <span class="new-price new-price-2">KES <?php echo $book->price; ?></span>
                                                        <span class="old-price">KES <?php echo $book->price; ?></span>
                                                        <span class="discount-percentage">-7%</span>-->
                                                    </div>
                                                </div>
                                                <div class="add-actions" align="center" style="align-content: center;">
                                                    <ul class="add-actions-link" align="center">
                                                        <li class="add-cart active"><a href="<?php echo site_url('purchase/'.$book->slug) ?>">Buy</a></li>
                                                        <li><a href="" onclick="viewDetails(<?php echo encrypt($book->id); ?>)" title="Quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                                                    <a href="<?php echo site_url('purchase/'.$book->slug) ?>">
                                                        <img alt="<?php echo $book->slug; ?>" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <h4><a class="featured-product-name" href="<?php echo site_url('purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
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
                                                    <a href="<?php echo site_url('purchase/'.$book->slug) ?>">
                                                        <img alt="<?php echo $book->slug; ?>" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <h4><a class="featured-product-name" href="<?php echo site_url('purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
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
                                                    <a href="<?php echo site_url('purchase/'.$book->slug) ?>">
                                                        <img alt="<?php echo $book->slug; ?>" src="<?php echo src(); ?><?php echo $book->photo ?>?auto=format,enhance">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <h4><a class="featured-product-name" href="<?php echo site_url('purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
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
            