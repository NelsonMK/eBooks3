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
                                        <h1>Account Settings</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Account Settings</li>
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
                                            <div class="col-xl-6 pb-xl-0 pb-5 border-right">
                                                <div class="page-account-profil pt-5">
                                                    <div class="profile-img text-center rounded-circle">
                                                        <div class="pt-5">
                                                            <div class="bg-img m-auto">
                                                                <img src="<?php echo base_url() ?>/cdn/about/male.png" class="img-fluid" alt="users-avatar">
                                                            </div>
                                                            <div class="profile pt-4">
                                                                <h4 class="mb-1"><?php echo session('first_name'); ?> <?php echo session('last_name'); ?></h4>
                                                                <p><?php echo session('admin_email'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="py-5 profile-counter">
                                                        <ul class="nav justify-content-center text-center">
                                                            <li class="nav-item border-right px-3">
                                                                <div>
                                                                    <h4 class="mb-0">90</h4>
                                                                    <p>Post</p>
                                                                </div>
                                                            </li>

                                                            <li class="nav-item border-right px-3">
                                                                <div>
                                                                    <h4 class="mb-0">1.5K</h4>
                                                                    <p>Messages</p>
                                                                </div>
                                                            </li>

                                                            <li class="nav-item px-3">
                                                                <div>
                                                                    <h4 class="mb-0">4.4K</h4>
                                                                    <p>Members</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="profile-btn text-center">
                                                        <div><button class="btn btn-light text-primary mb-2">Upload New Avatar</button></div>
                                                        <div><button class="btn btn-danger">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Edit Your Personal Settings</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" action="">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo session('admin_email'); ?>">
                                                                </div>

                                                            </div>
         
                                                            <button type="submit" class="btn btn-primary">Update Information</button>
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
        $("#profile").addClass('active');
    });
</script>