                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Site Settings</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Site Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-12">
                                <div class="card card-statistics">
                                    <div class="card-body p-0">
                                        <div class="row no-gutters">
                                            <div class="col-xl-4 col-md-6 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Website Settings</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="site_title">Site Title:</label>
                                                                <input type="text" class="form-control" id="site_title" name="setting[title]" value="<?php echo $item->title ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="webmaster_email">Webmaster Email:</label>
                                                                <input type="text" class="form-control" id="webmaster_email" name="setting[webmaster_email]" value="<?php echo $item->webmaster_email ?>" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="web_icon">Web Icon:</label>
                                                                <input type="file" class="form-control" id="web_icon" name="favicon" accept="image/*">
                                                                <?php if (config('favicon')): ?>
                                                                    <img src="<?php echo base_url() ?>/assets/settings/<?php echo config('favicon') ?>" class="img-inline userpic-32" width="40"/>
                                                                <?php endif ?>
                                                                <input type="hidden" name="settings_controller" value="<?php echo "settings_controller" ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="apology_message">Apology Message:</label>
                                                                <textarea class="form-control" id="apology_message" name="setting[apology_message]" rows="5"><?php echo set_value('setting[apology_message]', $item->apology_message) ?></textarea>
                                                                <input type="hidden" name="settings_controller" value="<?php echo "settings_controller" ?>">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save & Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Price Settings</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="pay_bill">Pay Bill:</label>
                                                                <input type="text" class="form-control" id="pay_bill" name="setting[pay_bill]" value="<?php echo $item->pay_bill ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="high_quality_price">Books Price:</label>
                                                                <input type="text" class="form-control" id="high_quality_price" name="setting[books_price]" value="<?php echo $item->books_price ?>" required>
                                                                <input type="hidden" name="settings_controller" value="<?php echo "settings_controller" ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="intermediate_price">Schemes Price:</label>
                                                                <input type="text" class="form-control" id="intermediate_price" name="setting[schemes_price]" value="<?php echo $item->schemes_price ?>" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save & Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 border-t col-12">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">SEO</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="meta_description">Meta Description:</label>
                                                                <textarea class="form-control" id="meta_description" name="setting[meta_description]" rows="6"><?php echo set_value('setting[meta_description]', $item->meta_description) ?></textarea>
                                                                <input type="hidden" name="settings_controller" value="<?php echo "settings_controller" ?>">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save & Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#settings").addClass('active');
    });
</script>