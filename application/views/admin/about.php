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
                                        <h1>About Settings</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">About Settings</li>
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
                                                        <h5 class="mb-0 py-2">About Us</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="nationality">Nationality:</label>
                                                                <input type="text" class="form-control" id="nationality" name="about[nationality]" value="<?php echo $item->nationality ?>">
                                                                <input type="hidden" name="about_controller" value="<?php echo "about_controller" ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="about_us">About Us:</label>
                                                                <textarea class="form-control" id="about_us" rows="6" name="about[about_us]"><?php echo set_value('about[about_us]', $item->about_us) ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="about_bg">About Image:</label>
                                                                <input type="file" class="form-control" id="about_bg" name="about_bg" accept="image/*">
                                                                <?php if (config('about_bg')): ?>
                                                                    <img src="<?php echo base_url() ?>/assets/settings/<?php echo config('about_bg') ?>" class="img-inline userpic-32" width="40"/>
                                                                <?php endif ?>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save & Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Contact Information</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="address">Address:</label>
                                                                <textarea class="form-control" id="address" name="about[address]"><?php echo set_value('about[address]', $item->address) ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">Phone:</label>
                                                                <textarea class="form-control" id="phone" name="about[phone]"><?php echo set_value('about[phone]', $item->phone) ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email:</label>
                                                                <textarea class="form-control" id="email" name="about[email]"><?php echo set_value('about[email]', $item->email) ?></textarea>
                                                                <input type="hidden" name="about_controller" value="<?php echo "about_controller" ?>">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save & Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 border-t col-12">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Social Links</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="fb">Facebook URL:</label>
                                                                <input type="text" class="form-control" id="fb" name="about[facebook]" value="<?php echo $item->facebook ?>">
                                                                <input type="hidden" name="about_controller" value="<?php echo "about_controller" ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tr">Twitter URL:</label>
                                                                <input type="text" class="form-control" id="tr" name="about[twitter]" value="<?php echo $item->twitter ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="ig">Instagram URL:</label>
                                                                <input type="text" class="form-control" id="ig" name="about[instagram]" value="<?php echo $item->instagram ?>">
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
        $("#about").addClass('active');
    });
</script>