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

    <link rel="stylesheet" type="text/css" href="<?php echo admin_assets() ?>css/custom.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo admin_assets() ?>css/uploadfile.css" />

    <script src="<?php echo admin_assets() ?>js/jquery.min.js"></script>
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>
</head>

<body>
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
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="index.html">
                            <!--<img src="<?php echo base_url() ?>/cdn/settings/logo.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="<?php echo base_url() ?>/cdn/settings/logo.png" class="img-fluid logo-mobile" alt="logo" />-->
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti ti-email"></i>
                                       <!-- <?php if ($unread_messages > 0): ?>
                                            <span class="notify">
                                                <span class="blink"></span>
                                                <span class="dot"></span>
                                            </span>
                                        <?php endif ?>-->
                                    </a>
                                    <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                        <ul>
                                            <li class="dropdown-header bg-gradient p-4 text-white text-left">Messages
                                                <!--<label class="label label-info label-round"><?php echo $unread_messages; ?></label>-->
                                                <!--<a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                    <span class="font-13"> Mark all as read</span></a>-->
                                                </li>
                                                <li class="dropdown-body">
                                                    <ul class="scrollbar scroll_dark max-h-240">
                                                       <!-- <?php if ($unread_messages > 0): ?>
                                                        <?php foreach ($messages as $message): ?>
                                                            <li>
                                                                <a href="<?php echo site_url('admin/messages/view/' . encode_url($message->message_id)) ?>">
                                                                    <div class="notification d-flex flex-row align-items-center">
                                                                        <div class="notify-icon bg-img align-self-center">
                                                                            <img class="img-fluid" src="<?php echo base_url() ?>/cdn/about/male.png" alt="user">
                                                                        </div>
                                                                        <div class="notify-message">
                                                                            <p class="font-weight-bold"><?php echo $message->name; ?></p>
                                                                            <?php $this->load->helper('text') ?>
                                                                            <small><?php echo character_limiter($message->message, 30); ?></small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        <?php endforeach ?>
                                                        <?php else: ?>
                                                            <li>
                                                                <a>
                                                                    <div class="notification d-flex flex-row align-items-center">
                                                                        <div class="notify-message">
                                                                            <p class="font-weight-bold">No new messages!</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        <?php endif ?>-->
                                                    </ul>
                                                </li>
                                                <li class="dropdown-footer">
                                                    <a class="font-13" href="<?php echo site_url('admin/messages') ?>"> View All messages </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-bell"></i>
                                            <span class="notify">
                                                <span class="blink"></span>
                                                <span class="dot"></span>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                            <ul>
                                                <li class="dropdown-header bg-gradient p-4 text-white text-left">Notifications
                                                    <!--<a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                        <span class="font-13"> Clear all</span></a>-->
                                                    </li>
                                                    <li class="dropdown-body min-h-240 nicescroll">
                                                        <ul class="scrollbar scroll_dark max-h-240">
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <div class="notification d-flex flex-row align-items-center">
                                                                        <div class="notify-icon bg-img align-self-center">
                                                                            <div class="bg-type bg-type-md">
                                                                                <span>HY</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="notify-message">
                                                                            <p class="font-weight-bold">New registered user</p>
                                                                            <small>Just now</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-footer">
                                                        <a class="font-13" href="javascript:void(0)"> View All Notifications
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown user-profile">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="<?php echo base_url() ?>/assets/settings/male.png" alt="avtar-img">
                                                <span class="bg-success user-status"></span>
                                            </a>
                                            <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                                <div class="bg-gradient px-4 py-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="mr-1">
                                                            <h4 class="text-white mb-0"><?php echo session('admin_full_name'); ?></h4>
                                                            <small class="text-white"><?php echo session('admin_email'); ?></small>
                                                        </div>
                                                        <a href="<?=base_url('admin/login/logout')?>" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                            class="zmdi zmdi-power"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-4">
                                                        <a class="dropdown-item d-flex nav-link" href="<?php echo site_url('admin/profile') ?>">
                                                            <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                                            <a class="dropdown-item d-flex nav-link" href="<?php echo site_url('admin/settings') ?>">
                                                                <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end navigation -->
                                    </nav>
                                    <!-- end navbar -->
                                </header>

            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">                                    
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_dark">
                        <ul class="metismenu " id="sidebarNav">
                            <li id="profile" class=""><a href="<?php echo site_url('admin/profile') ?>"><i class="nav-icon ti ti-user"></i><span class="nav-title">Profile</span></a> </li>
                            <li class="nav-static-title">Personal</li>
                            <li id="dashboard" class="">
                                <a class="" href="<?php echo site_url('admin/dashboard') ?>" aria-expanded="false">
                                    <i class="nav-icon ti ti-home"></i>
                                    <span class="nav-title">Dashboard</span>
                                </a>

                            </li>
                            <li id="parent_books" class=""><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon fa fa-book"></i><span class="nav-title">Books</span></a>
                                <ul aria-expanded="false">
                                    <li id="books" class=""> <a href='<?php echo site_url('admin/books') ?>'>Books</a> </li>
                                    <li id="categories" class=""> <a href='<?php echo site_url('admin/categories') ?>'>Categories</a> </li>
                                </ul>
                            </li>
                            <li id="parent_schemes" class=""><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon fe fe-list"></i><span class="nav-title">Schemes</span></a>
                                <ul aria-expanded="false">
                                    <li id="schemes" class=""> <a href='<?php echo site_url('admin/schemes') ?>'>Schemes</a> </li>
                                    <li id="classes" class=""> <a href='<?php echo site_url('admin/classes') ?>'>Classes</a> </li>
                                    <li id="subjects" class=""> <a href='<?php echo site_url('admin/subjects') ?>'>Subjects</a> </li>
                                </ul>
                            </li>
                            <li id="parent_sales" class=""><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon fe fe-trending-up"></i><span class="nav-title">Sales</span></a>
                                <ul aria-expanded="false">
                                    <li id="sales" class=""> <a href='<?php echo site_url('admin/sales') ?>'>Sales</a> </li>
                                    <li id="analysis" class=""> <a href='<?php echo site_url('admin/analysis') ?>'>Analysis</a> </li>
                                </ul>
                            </li>
                            <li id="settings" class=""><a href="<?php echo site_url('admin/settings') ?>" aria-expanded="false"><i class="nav-icon ti ti-settings"></i><span class="nav-title">Settings</span></a> </li>
                            <li id="about" class=""><a href="<?php echo site_url('admin/about') ?>" aria-expanded="false"><i class="nav-icon ti ti-user"></i><span class="nav-title">About</span></a> </li>
                            <li id="error_reporting" class=""><a href="#" aria-expanded="false"><i class="nav-icon fa fa-exclamation-circle"></i><span class="nav-title">Errors</span></a> </li>
                        </ul>
                    </div>
                     <!-- end sidebar-nav -->
                </aside>