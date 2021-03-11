            <!-- Begin Slider With Category Menu Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                        <div class="col-lg-3">
                            <!--Category Menu Start-->
                            <div class="category-menu">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>Schemes of work</span></h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <ul>
                                        <?php foreach ($classes as $class): ?>
                                            <li class="right-menu"><a href="<?php echo base_url() ?>schemes/scheme/<?php echo $class->class_slug ?>"><?php echo $class->class_name; ?> Schemes of Work</a>
                                                <ul class="cat-mega-menu">
                                                    <li class="right-menu cat-mega-title active"><a>Subjects</a>
                                                        <ul>
                                                        <?php $subject_data = json_decode($class->subjects); ?>
                                                        <?php foreach ($subjects as $k => $v): ?>
                                                            <?php if(in_array($v->id, $subject_data)): ?>
                                                                <li><a href="<?php echo base_url() ?>schemes/<?php echo $class->class_slug ?>/<?php echo $v->subject_slug ?>"><?php echo $v->subject_name ?></a></li>
                                                            <?php endif ?>
                                                        <?php endforeach ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                            <!--Category Menu End-->
                        </div>
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <div class="col-lg-9">
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                                <?php foreach ($top_schemes as $book): ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="scheme-product-wrap">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <h4><a class="product_name" href="<?php echo site_url('home/purchase/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">KES <?php echo $book->price; ?></span>
                                                            <div>
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><a href="<?php echo site_url('home/purchase/'.$book->slug) ?>">Buy</a></li>
                                                                </ul>
                                                            </div>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-scheme-link">
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
                        <!-- Slider Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Category Menu Area End Here -->
                        <!-- Begin Li's Trending Product | Home V2 Area -->
           <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                                <?php foreach ($schemes as $scheme): ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="scheme-product-wrap">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <h4><a class="product_name" href="<?php echo site_url('home/purchase/'.$scheme->scheme_slug) ?>"><?php echo $scheme->scheme_name; ?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">KES <?php echo $scheme->scheme_price; ?></span>
                                                            <div>
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><a href="<?php echo site_url('home/purchase/'.$scheme->scheme_slug) ?>">Buy</a></li>
                                                                </ul>
                                                            </div>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-scheme-link">
                                                                    <li class="add-cart active"><a href="<?php echo site_url('home/purchase/'.$scheme->scheme_slug) ?>">Buy</a></li>
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
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p>Showing 1-12 of 13 item(s)</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box">
                                                    <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                                    </li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li>
                                                      <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Wraper Area End Here -->