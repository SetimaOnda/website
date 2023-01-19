<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
    .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
        display: block;
    }
    </style>
</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                    data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                    data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                    data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
                    data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px"
                    data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true"
                    data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                        data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->

                            </div>
                            <div class="rd-navbar-aside-right rd-navbar-collapse">
                                <ul class="rd-navbar-corporate-contacts">
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-map-marker "></span></div>
                                            <div class="unit-body"><a class="link-phone">Praia dos Pescadores, 8365-114
                                                    Armação de Pêra</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                            <div class="unit-body">
                                                <p>info@setimaondaboattrips.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-phone"
                                                    href="tel:+351 926 461 342">+351 926 461 342</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa fa-youtube" href="#"></a></li>

                                </ul>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <div class="rd-nav-item">
                                        <!--Brand--><a class="brand" href="/" style="padding:0.5rem;"><img
                                                src="img/home/7onda-logo.png" alt="" width="112.5" height="9" /></a>
                                    </div>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/sobre-nos">About</a>
                                    </li>
                                    <li class="rd-nav-item dropdown">
                                        <a class="rd-nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Tours
                                        </a>
                                        <ul class="dropdown-menu rd-megamenu-list"
                                            style="background-color:#162e44 !important;width:16rem;">
                                            <li><a style="color:white !important" class="rd-dropdown-item"
                                                    href="/tours">Tradicional Benagil Cave</a></li>
                                            <li><a style="color:white !important" class="rd-dropdown-item"
                                                    href="#">Private Benagil Cave</a></li>
                                            <li><a style="color:white !important" class="rd-dropdown-item"
                                                    href="#">Sunset Benagil Cave</a></li>
                                            <li><a style="color:white !important" class="rd-dropdown-item"
                                                    href="#">Private Benagil Cave Special</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2"
            data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
            <div class="swiper-wrapper text-left">
                <div class="swiper-slide context-dark" data-slide-bg="img/home/foto4.png">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h6 class="text-uppercase" data-caption-animate="fadeInRight"
                                        data-caption-delay="0">Enjoy the Best Destinations with Our Travel Agency</h6>
                                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp"
                                        data-caption-delay="100"><span>Explore</span><span class="font-weight-bold"> The
                                            World</span></h2><a class="button button-default-outline button-ujarak"
                                        href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide context-dark" data-slide-bg="img/home/foto5.png">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h6 class="text-uppercase" data-caption-animate="fadeInRight"
                                        data-caption-delay="0">A team of professional Travel Experts</h6>
                                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp"
                                        data-caption-delay="100"><span>Trust</span><span class="font-weight-bold"> Our
                                            Experience</span></h2><a class="button button-default-outline button-ujarak"
                                        href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide context-dark" data-slide-bg="img/home/foto2.jpeg">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h6 class="text-uppercase" data-caption-animate="fadeInRight"
                                        data-caption-delay="0">Build your Next Holiday Trip with Us</h6>
                                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp"
                                        data-caption-delay="100"><span>Create</span><span class="font-weight-bold"> Your
                                            Tour</span></h2><a class="button button-default-outline button-ujarak"
                                        href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
        </section>
        <!-- Section Box Categories-->
        <section class="section section-lg section-top-1 bg-gray-4">
            <div class="container offset-negative-1">
                <div class="box-categories cta-box-wrap">
                    <div class="box-categories-content">
                        <div class="row justify-content-center">
                            <div class="col-md-3 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li><a href="#"><img src="img/home/tour1.png" alt="" width="368" height="420" /></a>
                                        <h5 class="box-categories-title">Tradicional Benagil Cave Tour</h5>
                                        <a class="box-categories-button button button-default-outline button-ujarak"
                                            href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Book
                                            now</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li><a href="#"><img src="img/home/tour1.png" alt="" width="368" height="420" /></a>
                                        <h5 class="box-categories-title">Private Benagil Cave Tour</h5>
                                        <a class="box-categories-button button button-default-outline button-ujarak"
                                            href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Book
                                            now</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li><a href="#"><img src="img/home/tour1.png" alt="" width="368" height="420" /></a>
                                        <h5 class="box-categories-title">Sunset Benagil Cave Tour</h5>
                                        <a class="box-categories-button button button-default-outline button-ujarak"
                                            href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Book
                                            now</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li><a href="#"><img src="img/home/tour1.png" alt="" width="368" height="568" /></a>
                                        <h5 class="box-categories-title">Private Benagil Cave Tour Special</h5>
                                        <a class="box-categories-button button button-default-outline button-ujarak"
                                            href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Book
                                            now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Owl Carousel-->
            </div>
        </section>
        <!-- Discover New Horizons-->
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                    <div class="col-lg-6 text-center wow fadeInUp"><img src="img/home/equipa.png" alt="" width="556"
                            height="382" />
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="box-width-lg-470">
                            <h3>Discover New Horizons</h3>
                            <!-- Bootstrap tabs-->
                            <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left"
                                id="tabs-7">
                                <!-- Nav tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1"
                                            data-toggle="tab">About us</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link"
                                            style="margin-left: 1rem;" href="#tabs-7-2" data-toggle="tab">Our
                                            Philosphy</a></li>


                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs-7-1">
                                        <p>Wonder Tour is committed to bringing our clients the best in value and
                                            quality travel arrangements. We are passionate about travel and sharing the
                                            world's wonders with you.</p>
                                        <div class="group-md group-middle"><a
                                                class="button button-secondary button-pipaluk"
                                                href="contact-us.html">Book now</a><a
                                                class="button button-black-outline button-md" href="about.html">Read
                                                More</a></div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-7-2">
                                        <p>We are proud to offer excellent quality and value for money in our tours,
                                            which give you the chance to experience your chosen destination in an
                                            authentic and exciting way.</p>
                                        <div class="group-md group-middle"><a
                                                class="button button-secondary button-pipaluk"
                                                href="contact-us.html">Book now</a><a
                                                class="button button-black-outline button-md" href="about.html">Read
                                                More</a></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Hot tours-->
        <section class="section section-sm bg-default">
            <div class="container">
                <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Tours</span></h3>
                <div class="row row-sm row-40 row-md-50">

                    <div class="col-sm-6 col-md-12 wow fadeInLeft">
                        <!-- Product Big-->
                        <article class="product-big">
                            <div class="unit flex-column flex-md-row align-items-md-stretch">
                                <div class="unit-left"><a class="product-big-figure" href="#"><img
                                            src="img/home/tour10.png" alt="" width="600" height="366" /></a></div>
                                <div class="unit-body">
                                    <div class="product-big-body">
                                        <h5 class="product-big-title"><a href="#">Private Cave Tour Special</a></h5>
                                        <div class="group-sm group-middle justify-content-start">
                                            <div class="product-big-rating"><span
                                                    class="icon material-icons-star"></span><span
                                                    class="icon material-icons-star"></span><span
                                                    class="icon material-icons-star"></span><span
                                                    class="icon material-icons-star"></span><span
                                                    class="icon material-icons-star_half"></span></div><a
                                                class="product-big-reviews" href="#">5 customer reviews</a>
                                        </div>
                                        <p class="product-big-text">The beautiful and inviting island nation of
                                            Mauritius is an ideal ‘flop and drop’ at the conclusion of your safari.
                                            Indulge in the delightful scents of the fragrant...</p><a
                                            class="button button-black-outline button-ujarak" href="#">Buy This Tour</a>
                                        <div class="product-big-price-wrap"><span class="product-big-price">€350</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Subscribe-->
        <section class="section bg-default text-center offset-top-50">
            <div class="parallax-container" data-parallax-img="img/home/foto2.jpeg">
                <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
                    <div class="container">
                        <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span
                                class="d-block font-weight-semi-bold">Come discover the </span><span
                                class="d-block font-weight-light">Algarvian coast!</span></h2>

                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                            <div class="wrapper">
                                <div class="circle pulse"></div>
                                <div class="circle">
                                    <svg style="color:white !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 100">
                                        <polygon points="40,30 65,50 40,70"></polygon>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <style>
            .wrapper {
                position: relative;
                width: 150px;
                height: 150px;
                margin: 0 auto;
            }

            .wrapper .circle {
                width: 100px;
                height: 100px;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                border-radius: 50%;
                background-color: white;
                margin: auto;
                transform: scale(1, 1);
            }

            .wrapper .circle.pulse {
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease;
                -webkit-animation: pulse 2s infinite;
                animation: pulse 2s infinite;
                background-color: #64abb4;
            }

            .wrapper svg {
                fill: #64abb4;
                stroke: #177483;
                stroke-linejoin: round;
                stroke-width: 5;
                transition: all 0.3s;
            }

            .wrapper svg:hover {
                cursor: pointer;
                fill: #177483;
                stroke: #64abb4;
                transform: scale(1.2, 1.2);
            }

            @-webkit-keyframes pulse {
                0% {
                    transform: scale(1, 1);
                }

                25% {
                    transform: scale(1, 1);
                }

                50% {
                    transform: scale(1.2, 1.2);
                }

                100% {
                    transform: scale(1, 1);
                }
            }

            @keyframes pulse {
                0% {
                    transform: scale(1, 1);
                }

                25% {
                    transform: scale(1, 1);
                }

                50% {
                    transform: scale(1.2, 1.2);
                }

                100% {
                    transform: scale(1, 1);
                }
            }
            </style>
            <script>
            $(function() {
                $('.popup-youtube, .popup-vimeo').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });
            </script>
        </section>

        <!-- What people Say-->
        <section class="section section-sm section-last bg-default">
            <div class="container">
                <h3>What People Say</h3>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30"
                    data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                                    src="images/user-16-100x100.jpg" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">Pharetra vel turpis nunc eget lorem dolor sed viverra ipsum. Diam phasellus
                                    vestibulum lorem sed risus ultricies. Aenean et tortor at risus viverra adipiscing.
                                    Aliquet enim tortor at auctor urna. Tortor aliquam nulla facilisi cras fermentum.
                                    Malesuada pellentesque elit eget gravida cum sociis natoque.</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">Catherine Williams</a></h5>
                            <p class="quote-lisa-status">Regular Client</p>
                        </div>
                    </article>
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                                    src="images/user-17-100x100.jpg" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">Sodales ut etiam sit amet nisl purus. Maecenas accumsan lacus vel facilisis
                                    volutpat est. Suscipit adipiscing bibendum est ultricies integer quis auctor.
                                    Viverra aliquet eget sit amet tellus cras adipiscing. Posuere ac ut consequat semper
                                    viverra nam libero justo laoreet. Iaculis eu non diam phasellus vestibulum lorem sed
                                    risus ultricies.</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">Rupert Wood</a></h5>
                            <p class="quote-lisa-status">Regular Client</p>
                        </div>
                    </article>
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                                    src="images/user-18-100x100.jpg" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">Lacus vestibulum sed arcu non odio euismod lacinia. Pellentesque elit
                                    ullamcorper dignissim cras. Ultrices eros in cursus turpis massa tincidunt dui. Nunc
                                    pulvinar sapien et ligula ullamcorper malesuada proin. Commodo odio aenean sed
                                    adipiscing diam. Sed euismod nisi porta lorem mollis aliquam.</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">Samantha Brown</a></h5>
                            <p class="quote-lisa-status">Regular Client</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!--	Instagrram wondertour-->
        <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
            <div class="container-fluid">
                <h6 class="gallery-title">Gallery</h6>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2"
                    data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15"
                    data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/gallery-image-1-270x195.jpg" alt=""
                                width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="images/gallery-image-1-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="images/gallery-image-1-270x195.jpg" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/gallery-image-2-270x195.jpg" alt=""
                                width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="images/gallery-image-2-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="images/gallery-image-2-270x195.jpg" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/gallery-image-3-270x195.jpg" alt=""
                                width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="images/gallery-image-3-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="images/gallery-image-3-270x195.jpg" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/gallery-image-4-270x195.jpg" alt=""
                                width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="images/gallery-image-4-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="images/gallery-image-4-270x195.jpg" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/gallery-image-5-270x195.jpg" alt=""
                                width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="images/gallery-image-5-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="images/gallery-image-5-270x195.jpg" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/gallery-image-6-270x195.jpg" alt=""
                                width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="images/gallery-image-6-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="images/gallery-image-6-270x195.jpg" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/gallery-image-7-270x195.jpg" alt=""
                                width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="images/gallery-image-7-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="images/gallery-image-7-270x195.jpg" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Page Footer-->
        <footer class="section footer-corporate context-dark">
            <div class="footer-corporate-inset">
                <div class="container">
                    <div class="row row-40 justify-content-lg-between">
                        <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInRight" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                                    <ul class="footer-contacts d-inline-block d-sm-block">
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                                <div class="unit-body"><a class="link-phone" href="tel:#">+1
                                                        323-913-4688</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                                <div class="unit-body"><a class="link-aemail"
                                                        href="mailto:#">info@demolink.org</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-location-arrow"></span>
                                                </div>
                                                <div class="unit-body"><a class="link-location" href="#">4730 Crystal
                                                        Springs Dr, Los Angeles, CA 90027</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInDown" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">Popular news</h6>
                                    <!-- Post Minimal 2-->
                                    <article class="post post-minimal-2">
                                        <p class="post-minimal-2-title"><a href="#"><img style="height:4rem;"
                                                    src="img/home/livro_reclamacoes.png" alt=""></a></p>

                                    </article>
                                    <!-- Post Minimal 2-->
                                    <article class="post post-minimal-2">
                                        <p class="post-minimal-2-title"><img style="height:4rem;"
                                                src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg"
                                                alt=""></p>

                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInLeft" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                                    <ul
                                        class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="#">Our Tours</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Gallery</a></li>
                                    </ul>
                                    <div class="group-md group-middle justify-content-sm-start"><a
                                            class="button button-lg button-primary button-ujarak" href="#">Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-corporate-bottom-panel">
                <div class="container">
                    <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
                        <div class="col-sm-6 col-md-3 text-sm-right text-md-center">
                            <div>
                                <ul class="list-inline list-inline-sm footer-social-list-2">
                                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 order-sm-first">
                            <!-- Rights-->
                            <p class="rights">Copyright<span>&copy;&nbsp;</span><span
                                    class="copyright-year"></span><span>&nbsp;</span><span>Sétima Onda Trip Boat</span>.
                                <br>All
                                Rights Reserved.
                            </p>
                        </div>
                        <div class="col-sm-6 col-md-3 text-md-right">
                            <p class="rights"><a href="#">Terms & Conditions</a></p>
                        </div>
                        <div class="col-sm-6 col-md-3 text-md-right">
                            <p class="rights"><a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>