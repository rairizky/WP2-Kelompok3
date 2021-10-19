<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Coworkind</title>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/font-awesome.min.css">
    
    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/flaticon.css">
    
    <!--====== nice select css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/nice-select.css">
    
    <!--====== animate css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/animate.min.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/slick.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/style.css">
  
  
</head>

<body>

    <!-- PRELOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!--====== OFFCANVAS MENU PART START ======-->

    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="fa fa-times"></i></a>  
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="<?php echo route_to('landing_index') ?>">Home</a>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="#">Rooms</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">All Rooms</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Room Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Room 1</a></li>
                                                <li><a href="#">Room 2</a></li>
                                                <li><a href="#">Room 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="#">Teams</a>
                                </li>
                                <?php if(session()->get('user_username') == ''): ?>
                                    <li class="menu-item-has-children active">
                                        <a href="<?php echo route_to('user_login') ?>">Login</a>
                                    </li>
                                <?php else: ?>
                                    <li class="menu-item-has-children active">
                                        <a href="#"><?php echo session()->get('user_username') ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="<?php echo route_to('user_logout') ?>">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== OFFCANVAS MENU PART ENDS ======-->
   
    <!--====== HEADER PART START ======-->
    <header class="header-area header-2-area header-3-area">
        <div class="header-top-area header-top-3-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top">
                            <ul>
                                <li><a href="mailto:needhelp@codesk.com"><i class="flaticon-message"></i> noreply@coworkind.com</a></li>
                                <li><a href="tel:7778880000"><i class="flaticon-phone-call"></i> 0888 5555 7777</a></li>
                                <li><a href="#"><i class="flaticon-placeholder"></i> Margonda, Depok.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-item d-flex d-lg-block justify-content-between align-items-center">
                            <div class="main-header-menus  d-flex justify-content-between">
                                <div class="header-logo">
                                    <a class="title" href="<?php echo route_to('landing_index') ?>"><h3>Coworkind</h3></a>
                                </div>
                                <div class="header-menu d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="<?php echo route_to('landing_index') ?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Room <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">All Rooms</a></li>
                                                <li>
                                                    <a href="#">Room Types </a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Room 1</a></li>
                                                        <li><a href="#">Room 2</a></li>
                                                        <li><a href="#">Room 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Teams</a>
                                        </li>
                                        <?php if(session()->get('user_username') == ''): ?>
                                            <li><a href="<?php echo route_to('user_login') ?>">Login</a></li>
                                        <?php else: ?>
                                            <li>
                                                <a href="#"><?php echo session()->get('user_username') ?>  <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Profile</a></li>
                                                    <li><a href="<?php echo route_to('user_logout') ?>">Logout</a></li>
                                                </ul>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-social d-flex align-items-center">
                                <div class="toggle-btn ml-30 canvas_open d-lg-none d-block">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    <!--====== Content =======-->
    <?= $this->renderSection('content') ?>
    <!--====== End Content =======-->
    
    <!--====== GO TO TOP PART START ======-->
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== GO TO TOP PART ENDS ======-->    
    
    <!--====== jquery js ======-->
    <script src="<?= base_url() ?>/user/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/user/assets/js/vendor/jquery-3.5.0.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url() ?>/user/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/user/assets/js/popper.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="<?= base_url() ?>/user/assets/js/slick.min.js"></script>
    
    <!--====== odometer js ======-->
    <script src="<?= base_url() ?>/user/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>/user/assets/js/jquery.waypoints.min.js"></script>
    
    <!--====== wow js ======-->
    <script src="<?= base_url() ?>/user/assets/js/wow.js"></script>
    
    <!--====== nice select js ======-->
    <script src="<?= base_url() ?>/user/assets/js/jquery.nice-select.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url() ?>/user/assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="<?= base_url() ?>/user/assets/js/main.js"></script>

</body>

</html>
