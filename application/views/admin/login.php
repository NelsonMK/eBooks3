<!DOCTYPE html>
<html lang="en">


<head>
    <title><?php echo config('title'); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/settings/<?php echo config('favicon') ?>">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo admin_assets() ?>css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="<?php echo admin_assets() ?>css/style.css" />

    <script src="<?php echo admin_assets() ?>js/jquery.min.js"></script>

    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>
</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="<?php echo admin_assets() ?>img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                        <h1 class="mb-2"><?php echo config('title'); ?></h1>
                                        <p>Welcome back, please login to your account.</p>
                                        <form action="<?php echo base_url('admin/login/auth') ?>" id="login-form" method="post" class="mt-3 mt-sm-5">
                                            <div class="row">
                                                <?php if (validation_errors()): ?>
                                                    <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                                                <?php endif ?>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Email*</label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autocomplete="on" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Password*</label>
                                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-block d-sm-flex  align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember_me" id="gridCheck">
                                                            <label class="form-check-label" for="gridCheck">
                                                                Remember Me
                                                            </label>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ml-auto">Forgot Password ?</a>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button type="submit" class="btn btn-primary text-uppercase">Sign In</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="<?php echo admin_assets() ?>img/bg/login.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end login contant-->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="<?php echo admin_assets() ?>js/vendors.js"></script>

    <!-- custom app -->
    <script src="<?php echo admin_assets() ?>js/app.js"></script>
</body>


</html>