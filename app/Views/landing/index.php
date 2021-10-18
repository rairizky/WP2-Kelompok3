<?= $this->extend('layouts/user/index') ?>

<?= $this->section('content') ?>
    <!--====== HEADER PART START ======-->
    <header class="header-area header-2-area header-3-area">
        <div class="header-top-area header-top-3-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top">
                            <ul>
                                <li><a href="mailto:needhelp@codesk.com"><i class="flaticon-message"></i> needhelp@codesk.com</a></li>
                                <li><a href="tel:7778880000"><i class="flaticon-phone-call"></i> 777 888 0000</a></li>
                                <li><a href="#"><i class="flaticon-placeholder"></i> 20 Broklyn Street, New York. USA</a></li>
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
                                    <a href="index.html"><img src="<?= base_url() ?>/user/assets/images/logo.png" alt="logo"></a>
                                </div>
                                <div class="header-menu d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a class="active" href="#">Home <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li>
                                                    <a href="#">Header Versions</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index.html">Header Style 1</a></li>
                                                        <li><a href="index-2.html">Header Style 2</a></li>
                                                        <li><a href="index-3.html">Header Style 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li>
                                            <a href="#">Events  <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="events.html">Events</a></li>
                                                <li><a href="single-event.html">single event</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages  <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="pricing.html">pricing</a></li>
                                                <li><a href="book-a-tour.html">book a tour</a></li>
                                                <li><a href="gallery.html">gallery</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">News  <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="news.html">news</a></li>
                                                <li><a href="single-news.html">single news</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
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

    <!--====== BANNER 3 PART START ======-->
    
    <div class="banner-slide-3">
        <div class="banner-3-area bg_cover d-flex align-items-center" style="background-image: url(<?= base_url() ?>/user/assets/images/banner-base.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span data-animation="fadeInDown" data-delay=".5s"><img src="<?= base_url() ?>/user/assets/images/banner-icon.png" alt="logo"> Book your tour today</span>
                            <h1 data-animation="fadeInLeft" data-delay="1.5s" class="title">Biggest coworking space.</h1>
                            <a data-animation="fadeInUp" data-delay=".5s" class="main-btn main-btn-2" href="book-a-tour.html">Book a tour</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-line">
                <img src="<?= base_url() ?>/user/assets/images/banner-line.png" alt="line">
            </div>
            <div class="banner-dot">
                <img src="<?= base_url() ?>/user/assets/images/banner-dot.png" alt="line">
            </div>
            <div class="banner-thumb">
                <img src="<?= base_url() ?>/user/assets/images/banner-thumb.png" alt="line">
            </div>
        </div>
        <div class="banner-3-area bg_cover d-flex align-items-center" style="background-image: url(<?= base_url() ?>/user/assets/images/banner-base.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span data-animation="fadeInDown" data-delay=".5s"><img <?= base_url() ?>/user/="assets/images/banner-icon.png" alt="logo"> Book your tour today</span>
                            <h1 data-animation="fadeInLeft" data-delay="1.5s" class="title">Biggest coworking space.</h1>
                            <a data-animation="fadeInUp" data-delay=".5s" class="main-btn main-btn-2" href="book-a-tour.html">Book a tour</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-line">
                <img src="<?= base_url() ?>/user/assets/images/banner-line.png" alt="line">
            </div>
            <div class="banner-dot">
                <img src="<?= base_url() ?>/user/assets/images/banner-dot.png" alt="line">
            </div>
            <div class="banner-thumb">
                <img src="<?= base_url() ?>/user/assets/images/banner-thumb.png" alt="line">
            </div>
        </div>
    </div>
    
    <!--====== BANNER 3 PART ENDS ======-->

    <!--====== SERVICES BOX PART START ======-->
    
    <section class="services-box-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services mt-30 active">
                        <i class="flaticon-wifi"></i>
                        <a href="single-news.html"><h4 class="title">High speed internet</h4></a>
                        <p>There are many new variations of pasages of available text.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services mt-30">
                        <i class="flaticon-tray"></i>
                        <a href="single-news.html"><h4 class="title">Fully equipped kitchen</h4></a>
                        <p>There are many new variations of pasages of available text.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services mt-30">
                        <i class="flaticon-parking"></i>
                        <a href="single-news.html"><h4 class="title">Huge parking space</h4></a>
                        <p>There are many new variations of pasages of available text.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services mt-30">
                        <i class="flaticon-room"></i>
                        <a href="single-news.html"><h4 class="title">Conference  rooms</h4></a>
                        <p>There are many new variations of pasages of available text.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-pattern">
            <img src="<?= base_url() ?>/user/assets/images/services-pattern.png" alt="">
        </div>
    </section>
    
    <!--====== SERVICES BOX PART ENDS ======-->

    <!--====== EXPLORE CODESK PART START ======-->
    
    <section class="explore-codesk-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="explore-codesk-title text-center">
                        <h3 class="title">Explore codesk spaces</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="explore-codesk-item mt-50">
                        <img src="<?= base_url() ?>/user/assets/images/explore-1.jpg" alt="explore">
                        <h3 class="title">Office suite</h3>
                        <p>There are many new variatns of pasages of available text.</p>
                        <div class="item d-flex justify-content-between align-items-center">
                            <span>Private <br> amenities</span>
                            <p>$350/m</p>
                        </div>
                        <a class="main-btn main-btn-2" href="single-event.html">More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="explore-codesk-item mt-50">
                        <img src="<?= base_url() ?>/user/assets/images/explore-2.jpg" alt="explore">
                        <h3 class="title">Dedicated desk</h3>
                        <p>There are many new variatns of pasages of available text.</p>
                        <div class="item d-flex justify-content-between align-items-center">
                            <span>Private <br> amenities</span>
                            <p>$350/m</p>
                        </div>
                        <a class="main-btn main-btn-2" href="single-event.html">More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="explore-codesk-item mt-50">
                        <img src="<?= base_url() ?>/user/assets/images/explore-3.jpg" alt="explore">
                        <h3 class="title">Coworking space</h3>
                        <p>There are many new variatns of pasages of available text.</p>
                        <div class="item d-flex justify-content-between align-items-center">
                            <span>Private <br> amenities</span>
                            <p>$350/m</p>
                        </div>
                        <a class="main-btn main-btn-2" href="single-event.html">More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="explore-codesk-item mt-50">
                        <img src="<?= base_url() ?>/user/assets/images/explore-4.jpg" alt="explore">
                        <h3 class="title">Conference room</h3>
                        <p>There are many new variatns of pasages of available text.</p>
                        <div class="item d-flex justify-content-between align-items-center">
                            <span>Private <br> amenities</span>
                            <p>$350/m</p>
                        </div>
                        <a class="main-btn main-btn-2" href="single-event.html">More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-codesk-shape">
            <img src="<?= base_url() ?>/user/assets/images/testimonial-pattern.png" alt="">
        </div>
    </section>
    
    <!--====== EXPLORE CODESK PART ENDS ======-->

    <!--====== CTA 2 PART START ======-->
    
    <section class="cta-2-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="cta-content">
                        <h3 class="title">Fully equipped meeting rooms for rent</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta-content">
                        <p>Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula porta ultricies quis nec magna neulla.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cta-content text-left text-lg-right">
                        <a class="main-btn" href="book-a-tour.html">Book a tour</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-dot">
            <img src="<?= base_url() ?>/user/assets/images/cta-dot-2.png" alt="cta">
        </div>
        <div class="cta-dot-2">
            <img src="<?= base_url() ?>/user/assets/images/cta-dot.png" alt="cta">
        </div>
    </section>
    
    <!--====== CTA 2 PART ENDS ======-->

    <!--====== TEAM PART START ======-->
    
    <section class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title text-center">
                        <h3 class="title">Team members</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="team-item mt-30 animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="team-thumb">
                            <img src="<?= base_url() ?>/user/assets/images/team-1.jpg" alt="team">
                        </div>
                        <div class="team-content text-center">
                            <h4 class="title">Kevin martin</h4>
                            <span>Developer</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="team-item mt-30 animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="team-thumb">
                            <img src="<?= base_url() ?>/user/assets/images/team-2.jpg" alt="team">
                        </div>
                        <div class="team-content text-center">
                            <h4 class="title">Kevin martin</h4>
                            <span>Developer</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="team-item mt-30 animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="team-thumb">
                            <img src="<?= base_url() ?>/user/assets/images/team-3.jpg" alt="team">
                        </div>
                        <div class="team-content text-center">
                            <h4 class="title">Kevin martin</h4>
                            <span>Developer</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-pattern">
            <img src="<?= base_url() ?>/user/assets/images/services-dot.png" alt="">
        </div>
    </section>
    
    <!--====== TEAM PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    
    <section class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="footer-about mt-30">
                        <div class="logo">
                            <a href="#"><img src="<?= base_url() ?>/user/assets/images/logo-2.png" alt="logo"></a>
                        </div>
                        <p>Codesk is a premium wordpress theme for coworking space, freelancers, creatives and a wide range of other businesses.</p>
                        <ul>
                            <li><a href="mailto:needhelp@codesk.com">needhelp@codesk.com</a></li>
                            <li><a href="tel:7778880000">777 888 0000</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">Company</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Latest events</a></li>
                            <li><a href="#">Our services</a></li>
                            <li><a href="#">News & articles</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list pl-35 mt-30">
                        <h4 class="title">Explore</h4>
                        <ul>
                            <li><a href="#">Our history</a></li>
                            <li><a href="#">Help & support</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms & condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-address mt-30">
                        <h3 class="title">Address</h3>
                        <p>20 Broklyn street, New york. United states of america</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14612.97540392891!2d90.497437!3d23.70298445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1590471441805!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <span><i class="fa fa-map-marker"></i> Find us on Map</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright d-block d-md-flex justify-content-between align-items-center">
                            <p>© Copyright 2020 by Layerdrops.com</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-pattern">
            <img src="<?= base_url() ?>/user/assets/images/footer-pattern.png" alt="">
        </div>
        <div class="footer-logo">
            <img src="<?= base_url() ?>/user/assets/images/footer-logo.png" alt="">
        </div>
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
<?= $this->endSection() ?>