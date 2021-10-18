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
                        <div class="offcanvas-social">
                            <ul class="text-center">
                                <li><a href="$"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="$"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="$"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="$"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Header Versions</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Header Style 1</a></li>
                                                <li><a href="index-2.html">Header Style 2</a></li>
                                                <li><a href="index-3.html">Header Style 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="our-team.html">Our Team</a></li>
                                        <li><a href="our-history.html">Our history</a></li>
                                        <li><a href="testimonials.html">testimonials</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="single-service.html">single service</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="#">Recent Projects</a>
                                    <ul class="sub-menu">
                                        <li><a href="projects.html">Projects</a></li>
                                        <li><a href="single-project.html">single project</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="posts.html">posts</a></li>
                                        <li><a href="single-post.html">single post</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="mailto:tanvirahmed8282@gmail.com"><i class="fa fa-envelope-o"></i> layerdrops@gmail.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== OFFCANVAS MENU PART ENDS ======-->
   
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
