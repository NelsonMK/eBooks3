            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="<?php echo base_url() ?>home">Home</a></li>
                            <li class="active">Purchase (<?php echo $name ?>)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->     
            <!-- Begin Contact Main Page Area -->
            <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                            <div class="contact-page-side-content">
                                <h3 class="contact-page-title">Help</h3>
                                <div class="single-contact-block">
                                    <h6>Provide your phone number.</h6>
                                </div>
                                <div class="single-contact-block">
                                    <h6>Hit the buy button and wait for the money request sent to your mpesa</h6>
                                </div>
                                <div class="single-contact-block">
                                    <h6>Enter your mpesa pin to complete the payment</h6>
                                </div>
                                <div class="single-contact-block">
                                    <h6>Your purchased book will auto download immediately after payment confrimation</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                            <div class="contact-form-content pt-sm-55 pt-xs-55">
                                <h3 class="contact-page-title">Pay KES <?php echo $amount ?> for (<?php echo $name ?>)</h3>
                                    <div id="overlay">
                                        <div class=" loading loader"></div>
                                    </div>
                                <div class="contact-form">
                                    <form  id="buy_form" action="" method="post">
                                        <div class="form-group">
                                            <label>Phone Number <span class="required">*</span></label>
                                            <input type="text" name="phone_number" id="phone_number" placeholder="e.g 0712345678" minlength="10" maxlength="10" required>
                                            
                                            <input type="hidden" name="book_id" id="book_id" value="<?php echo encrypt($id) ?>">
                                            <input type="hidden" name="amount" id="amount" value="<?php echo $amount ?>">
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <button id="submit" class="li-btn-3" name="submit">Buy</button>

                                        <div id="mpesa_status">
                                            <iframe id="downloadFrame" style="display:none"></iframe>
                                            <input type="hidden" name="price" id="price" value="<?php echo $amount ?>">
                                            <h6 id="payment_confirmation"></h6>
                                            <h6 id="downloading_status"></h6>
                                           <!-- <div id="alt_download"></div>-->
                                            <p id="alt_download">Thank your for shopping with us. Please <b> <a class="product_name" href="" id="manual_download">click here</a> </b> to start the download manually if your book has not autodownloaded</p>
                                        </div>

                                    </form>
                                </div>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Main Page Area End Here -->

