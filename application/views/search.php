            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="<?php echo base_url() ?>home">Home</a></li>
                            <li class="active"><?php echo "Search results "; if ($category_name) { echo $category_name;}?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <!--<span>Showing 1 to 9 of 15</span>-->
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <!--<div class="product-short">
                                        <p>Sort By:</p>
                                        <select class="nice-select">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>-->
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                                <?php foreach ($search_data as $book): ?>
                                                <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?php echo site_url('view/'.$book->slug) ?>">
                                                                <img class="category-image" src="<?php echo src(); ?><?php echo $book->photo ?>" alt="<?php echo $book->slug; ?>">
                                                            </a>
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <h4><a class="product_name" href="<?php echo site_url('view/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">KES <?php echo $book->price; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><a href="<?php echo site_url('purchase/'.$book->slug) ?>">Buy</a></li>
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
                                    <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
                                                <?php foreach ($search_data as $book): ?>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="<?php echo site_url('view/'.$book->slug) ?>">
                                                                <img class="category-image" src="<?php echo src(); ?><?php echo $book->photo ?>" alt="<?php echo $book->slug; ?>">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <h4><a class="product_name" href="<?php echo site_url('view/'.$book->slug) ?>"><?php echo $book->name; ?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">KES <?php echo $book->price; ?></span>
                                                                </div>
                                                                <span><?php echo $book->description; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30" align="center">
                                                            <ul class="add-actions-link" style="align-content: center;">
                                                                <li class="add-cart"><a href="<?php echo site_url('purchase/'.$book->slug) ?>">Buy</a></li>
                                                                <li style="display: none;" class="wishlist"></li>
                                                                <li style="display: none;"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p>Showing <?php echo $start; ?>-<?php echo $end; ?> of <?php echo $total; ?> item(s)</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <?php echo $pagination ?>
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