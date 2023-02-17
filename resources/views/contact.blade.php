<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Contact Us</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
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
    <!-- <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
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
    </div>-->
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
                                                    href="tel:+351 966 940 015">+351 966 940 015</a></div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social"
                                    style="display: flex;flex-wrap: wrap;width: 100%;list-style: none;justify-content: flex-end;">
                                    <li><a class=" icon fa fa-instagram"
                                            href="http://instagram.com/setimaondaboattrips"></a></li>
                                    <li><a class="icon fa fa-facebook"
                                            href="https://pt-pt.facebook.com/setimaondaboat"></a></li>
                                    <li><a class="icon fa fa-youtube"
                                            href="https://www.youtube.com/channel/UCFQGgZaHI8a9AnIN-CzBV-g"></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">

                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <div class="rd-nav-item">
                                        <!--Brand--><a class="brand" href="/" style="padding:0.5rem;"><img
                                                src="img/home/7onda-logo.png" alt="" width="112.5" height="9" /></a>
                                    </div>
                                    <li class="rd-nav-item active"><a class="rd-nav-link"
                                            href="/">{{__('messages.home_navbar')}}</a>
                                    </li>
                                    <li class="rd-nav-item dropdown">
                                        <a class="rd-nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{__('messages.tours_navbar')}}
                                        </a>
                                        <ul class="dropdown-menu rd-megamenu-list"
                                            style="background-color:#162e44 !important;width:16rem;">
                                            <li><a style="color:white !important" class="rd-dropdown-item"
                                                    href="/tours/1">{{__('messages.trad_tour')}}</a></li>
                                            <li><a style="color:white !important" class="rd-dropdown-item"
                                                    href="/tours/2">{{__('messages.priv_tour')}}</a></li>
                                            <li><a style="color:white !important" class="rd-dropdown-item"
                                                    href="/tours/3">{{__('messages.sunset_tour')}}</a></li>
                                            <li><a style="color:white !important" class="rd-dropdown-item"
                                                    href="/tours/4">{{__('messages.priv_special')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/sobre-nos">{{__('messages.about_navbar')}}</a>
                                    </li>

                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/contact">{{__('messages.contacts_navbar')}}</a>
                                    </li>


                                </ul>
                                <div class="nav-item" style="display:flex;margin-left:auto;margin-right:auto;">

                                    <a class="nav-link"
                                        style="<?php if(strcmp(session()->get('applocale'),"en")==0){ ?> text-decoration: underline;<?php } ?> padding-left:.08 !important;padding-right:.08 !important;"
                                        href="{{ route('lang.switch', 'en') }}"><img src="img/en.png" alt="Inglês" style="width:1.3rem;"> </a>
                                  
                                    <a class="nav-link"
                                        style="<?php if(strcmp(session()->get('applocale'),"pt")==0){ ?> text-decoration: underline;<?php } ?> padding-right:0 !important;padding-left:0 !important;margin-right:1.5rem;"
                                        href="{{ route('lang.switch', 'pt') }}"> <img src="img/pt.png" alt="Português" style="width:1.5rem;"></a>


                                </div>
                                <ul style="list-style: none;justify-content: flex-end;">
                                    <li class="rd-nav-item"> <a class="button button-default-outline button-ujarak"
                                            href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">{{__('messages.book_button')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- RD Google Map-->

        <!-- Contact information-->
        <section class="breadcrumbs-custom-inset">
            <div class="breadcrumbs-custom context-dark bg-overlay-60">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">{{__('messages.contacts_navbar')}}</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="/">{{__('messages.home_navbar')}}</a></li>
                        <li class="active">{{__('messages.contacts_navbar')}}</li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(img/benagil2.jpg);"></div>
            </div>
        </section>

        <section class="section section-sm section-first bg-default">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <h3 class="text-spacing-25 font-weight-normal title-opacity-9">{{__('messages.need_help_title')}}
                        </h3>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                            <!-- Nav tabs-->
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div>
                                    <p style="font-size:1rem;color:#162e44;text-align:justify;"> {{__('messages.need_help_desc')}} <br><br>
                                    <div style="margin-bottom:2rem;"><a data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop"
                                            class="button button-secondary button-pipaluk">{{__('messages.meeting_button')}}</a></div>
                                            {{__('messages.evaluation')}} 🙂</p>


                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title fs-5" id="staticBackdropLabel">{{__('messages.meeting_button')}}
                                                    </h3>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">{{__('messages.close_popup_button')}}</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="text-align: justify;">{{__('messages.meeting_popup_desc')}}</p>

                                                    <section class="section section-fluid" style="margin-top:3rem;">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3182.186275167964!2d-8.359489485632354!3d37.10068315842879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ad16db0fe8341%3A0x1d8ef3c2656c86c0!2sBarcos%20S%C3%A9tima%20Onda!5e0!3m2!1spt-PT!2spt!4v1675399971103!5m2!1spt-PT!2spt"
                                                            width="100%" height="250" style="border:0;"
                                                            allowfullscreen="" loading="lazy"
                                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </section>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <button type="button" class="close" data-dismiss="alert">+</button>
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (Session::get('erro'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">+</button>
                            <strong>{{Session::get('erro')}}</strong>
                        </div>
                        @endif
                        @if (Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">+</button>
                            <strong>{{Session::get('success')}}</strong>
                        </div>
                        @endif
                        <form action="/contactoy" style="margin-top:4rem;">

                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">{{__('messages.first_name')}}<span style="color:red">*</span></label>
                                    <input type="text" required name="first_name" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">{{__('messages.last_name')}}<span style="color:red">*</span></label>
                                    <input type="text" required name="last_name" class="form-control"
                                        id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">{{__('messages.email')}}<span style="color:red">*</span></label>
                                <input type="email" required name="email" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> {{__('messages.subject')}}<span
                                        style="color:red">*</span></label>
                                <textarea name="assunto" required class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">{{__('messages.send_button')}}</button>
                        </form>
                    </div>



                    <div class="col-md-4">
                        <div class="row justify-content-center">

                            <article class="box-contacts" style="width: 10rem;    height: 10rem;">
                                <div class="box-contacts-body">
                                    <div class="box-contacts-icon fa-phone"></div>
                                    <div class="box-contacts-decor"></div>
                                    <p class="box-contacts-link"><a href="tel:+351 966 940 015">+351 966 940 015</a>
                                    </p>
                                    <!-- <p class="box-contacts-link"><a href="tel:#">+1 323-888-4554</a></p>-->
                                </div>
                            </article>
                        </div>

                        <div class="row justify-content-center">
                            <article class="box-contacts" style="width: 10rem;    height: 10rem;">
                                <div class="box-contacts-body">
                                    <div class="box-contacts-icon fa-map-marker"></div>
                                    <div class="box-contacts-decor"></div>
                                    <p class="box-contacts-link"><a href="#">PRAIA DOS PESCADORES, 8365-114 ARMAÇÃO DE
                                            PÊRA</a></p>
                                </div>
                            </article>
                        </div>
                        <div class="row justify-content-center">
                            <article class="box-contacts" style="width: 10rem;    height: 10rem;">
                                <div class="box-contacts-body">
                                    <div class="box-contacts-icon fa-envelope-o"></div>
                                    <div class="box-contacts-decor"></div>
                                    <p class="box-contacts-link"><a
                                            href="mailto:info@setimaondaboattrips.com">info@setimaondaboattrips.com</a>
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>


                </div>

            </div>
        </section>

        <!--  -->

        <!-- Page Footer-->
        <footer class="section footer-corporate context-dark">
            <div class="footer-corporate-inset">
                <div class="container">
                    <div class="row row-40 justify-content-lg-between">
                        <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInRight" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">{{__('messages.contacts_navbar')}}</h6>
                                    <ul class="footer-contacts d-inline-block d-sm-block">
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                                <div class="unit-body"><a class="link-phone"
                                                        href="tel:+351966940015">+351 966 940 015 </a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                                <div class="unit-body"><a class="link-aemail"
                                                        href="mailto:info@setimaondaboattrips.com">info@setimaondaboattrips.com</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-location-arrow"></span>
                                                </div>
                                                <div class="unit-body"><a class="link-location">PRAIA DOS
                                                        PESCADORES, 8365-114 ARMAÇÃO DE PÊRA
                                                    </a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInDown" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase"></h6>
                                    <!-- Post Minimal 2-->

                                    <div class="row">
                                        <div class="col">
                                            <article class="post post-minimal-2">
                                                <p class="post-minimal-2-title"><img style="height:4rem;"
                                                        src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg"
                                                        alt=""></p>

                                            </article>
                                        </div>
                                        <div class="col">
                                            <article class="post post-minimal-2">
                                                <p class="post-minimal-2-title"><a href="#"><img style="height:3.5rem;"
                                                            src=" https://portugalcleanandsafe.com/assets/badge.png"
                                                            alt=""></a></p>

                                            </article>
                                        </div>

                                    </div>

                                    <article class="post post-minimal-2" style="text-align: end;">
                                        <p class="post-minimal-2-title"><a href="#"><img style="height:4rem;"
                                                    src="{{ asset('img/home/livro_reclamacoes.png')}}" alt=""></a></p>

                                    </article>


                                    <!-- Post Minimal 2-->

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInLeft" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase"></h6>
                                    <p style="text-align: justify;"> {!!__('messages.footer_desc')!!}

                                        <br><br>RNAAT nº: 73/2023
                                    </p>

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
                                    <li><a class=" icon fa fa-instagram"
                                            href="http://instagram.com/setimaondaboattrips"></a></li>
                                    <li><a class="icon fa fa-facebook"
                                            href="https://pt-pt.facebook.com/setimaondaboat"></a></li>
                                    <li><a class="icon fa fa-youtube"
                                            href="https://www.youtube.com/channel/UCFQGgZaHI8a9AnIN-CzBV-g"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 order-sm-first">
                            <!-- Rights-->
                            <p class="rights">Copyright<span>&copy;&nbsp;</span><span
                                    class="copyright-year"></span><span>&nbsp;</span><span>Sétima Onda Boat
                                    Trips</span>.
                                <br>All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-sm-6 col-md-3 text-md-right">
                            <p class="rights"><a href="/termos">Termos e condições</a></p>
                        </div>
                        <div class="col-sm-6 col-md-3 text-md-right">
                            <p class="rights"><a href="/politica">Politica de Privacidade</a></p>
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
    <!--
    <div id="whatswidget-pre-wrapper" class="">
        <div id="whatswidget-widget-wrapper" class="whatswidget-widget-wrapper" style="all:revert;">
            <div id="whatswidget-conversation" class="whatswidget-conversation"
                style="color: revert; font: revert; font-feature-settings: revert; font-kerning: revert; font-optical-sizing: revert; font-palette: revert; font-synthesis: revert; font-variation-settings: revert; forced-color-adjust: revert; text-orientation: revert; text-rendering: revert; -webkit-font-smoothing: revert; -webkit-locale: revert; -webkit-text-orientation: revert; -webkit-writing-mode: revert; writing-mode: revert; zoom: revert; accent-color: revert; place-content: revert; place-items: revert; place-self: revert; alignment-baseline: revert; animation: revert; app-region: revert; appearance: revert; aspect-ratio: revert; backdrop-filter: revert; backface-visibility: revert; background: revert; background-blend-mode: revert; baseline-shift: revert; block-size: revert; border-block: revert; border: revert; border-radius: revert; border-collapse: revert; border-end-end-radius: revert; border-end-start-radius: revert; border-inline: revert; border-start-end-radius: revert; border-start-start-radius: revert; inset: revert; box-shadow: revert; box-sizing: revert; break-after: revert; break-before: revert; break-inside: revert; buffered-rendering: revert; caption-side: revert; caret-color: revert; clear: revert; clip: revert; clip-path: revert; clip-rule: revert; color-interpolation: revert; color-interpolation-filters: revert; color-rendering: revert; color-scheme: revert; columns: revert; column-fill: revert; gap: revert; column-rule: revert; column-span: revert; contain: revert; contain-intrinsic-block-size: revert; contain-intrinsic-size: revert; contain-intrinsic-inline-size: revert; container: revert; content: revert; content-visibility: revert; counter-increment: revert; counter-reset: revert; counter-set: revert; cursor: revert; cx: revert; cy: revert; d: revert; display: none; dominant-baseline: revert; empty-cells: revert; fill: revert; fill-opacity: revert; fill-rule: revert; filter: revert; flex: revert; flex-flow: revert; float: revert; flood-color: revert; flood-opacity: revert; grid: revert; grid-area: revert; height: revert; hyphenate-character: revert; hyphenate-limit-chars: revert; hyphens: revert; image-orientation: revert; image-rendering: revert; inline-size: revert; inset-block: revert; inset-inline: revert; isolation: revert; letter-spacing: revert; lighting-color: revert; line-break: revert; list-style: revert; margin-block: revert; margin: revert; margin-inline: revert; marker: revert; mask: revert; mask-type: revert; math-depth: revert; math-shift: revert; math-style: revert; max-block-size: revert; max-height: revert; max-inline-size: revert; max-width: revert; min-block-size: revert; min-height: revert; min-inline-size: revert; min-width: revert; mix-blend-mode: revert; object-fit: revert; object-position: revert; object-view-box: revert; offset: revert; opacity: 0; order: revert; origin-trial-test-property: revert; orphans: revert; outline: revert; outline-offset: revert; overflow-anchor: revert; overflow-clip-margin: revert; overflow-wrap: revert; overflow: revert; overscroll-behavior-block: revert; overscroll-behavior-inline: revert; overscroll-behavior: revert; padding-block: revert; padding: revert; padding-inline: revert; page: revert; page-orientation: revert; paint-order: revert; perspective: revert; perspective-origin: revert; pointer-events: revert; position: revert; quotes: revert; r: revert; resize: revert; rotate: revert; ruby-position: revert; rx: revert; ry: revert; scale: revert; scroll-behavior: revert; scroll-margin-block: revert; scroll-margin: revert; scroll-margin-inline: revert; scroll-padding-block: revert; scroll-padding: revert; scroll-padding-inline: revert; scroll-snap-align: revert; scroll-snap-stop: revert; scroll-snap-type: revert; scrollbar-gutter: revert; shape-image-threshold: revert; shape-margin: revert; shape-outside: revert; shape-rendering: revert; size: revert; speak: revert; stop-color: revert; stop-opacity: revert; stroke: revert; stroke-dasharray: revert; stroke-dashoffset: revert; stroke-linecap: revert; stroke-linejoin: revert; stroke-miterlimit: revert; stroke-opacity: revert; stroke-width: revert; tab-size: revert; table-layout: revert; text-align: revert; text-align-last: revert; text-anchor: revert; text-combine-upright: revert; text-decoration: revert; text-decoration-skip-ink: revert; text-emphasis: revert; text-emphasis-position: revert; text-indent: revert; text-overflow: revert; text-shadow: revert; text-size-adjust: revert; text-transform: revert; text-underline-offset: revert; text-underline-position: revert; touch-action: revert; transform: revert; transform-box: revert; transform-origin: revert; transform-style: revert; transition: revert; translate: revert; user-select: revert; vector-effect: revert; vertical-align: revert; visibility: revert; border-spacing: revert; -webkit-box-align: revert; -webkit-box-decoration-break: revert; -webkit-box-direction: revert; -webkit-box-flex: revert; -webkit-box-ordinal-group: revert; -webkit-box-orient: revert; -webkit-box-pack: revert; -webkit-box-reflect: revert; -webkit-highlight: revert; -webkit-line-break: revert; -webkit-line-clamp: revert; -webkit-mask-box-image: revert; -webkit-mask: revert; -webkit-mask-composite: revert; -webkit-print-color-adjust: revert; -webkit-rtl-ordering: revert; -webkit-ruby-position: revert; -webkit-tap-highlight-color: revert; -webkit-text-combine: revert; -webkit-text-decorations-in-effect: revert; -webkit-text-fill-color: revert; -webkit-text-security: revert; -webkit-text-stroke: revert; -webkit-user-drag: revert; -webkit-user-modify: revert; white-space: revert; widows: revert; width: revert; will-change: revert; word-break: revert; word-spacing: revert; x: revert; y: revert; z-index: revert;">
                <div class="whatswidget-conversation-header" style="all:revert;">
                    <div id="whatswidget-conversation-title" class="whatswidget-conversation-title" style="all:revert;">
                        Sétima Onda</div>
                </div>
                <div id="whatswidget-conversation-message" class="whatswidget-conversation-message "
                    style="all:revert;"> <span style="all:revert;">Se tens alguma questão, precisas de ajuda ou
                        simplesmente queres deixar um comentário, fica à vontade para nos deixar uma mensagem!</span>
                </div>
                <div class="whatswidget-conversation-cta" style="all:revert;"> <a style="all:revert;"
                        id="whatswidget-phone-desktop" target="_blank"
                        href="https://web.whatsapp.com/send?phone=351926461342"
                        class="whatswidget-cta whatswidget-cta-desktop">Enviar Mensagem</a> <a
                        id="whatswidget-phone-mobile" target="_blank" href="https://wa.me/351926461342"
                        class="whatswidget-cta whatswidget-cta-mobile" style="all:revert;">Enviar Mensagem</a></div><a
                    target="_blank" class="whatswidget-link" href="https://www.adamante.com.br/code/whatsapp-site/"
                    title="Feito no WhatsWidget" style="all:revert;"><img
                        src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfjBhQXLyFLI2siAAABBElEQVQoz33OPSjEcQDG8c/v/ogbkCiFRVJeyiCTl8FmkE0ZlAxkIpRMxCg2STcpUgYpJXd13SJZbUcWkcUgCyXJ8L+TQb7LMzwvPUFMmcaC8gEeYw0g4dCDTwzjFCWajPkqBjZc28eUKsGLFEZ1W4rnJ6yBDscSgiNdYN009DuQQLmMelAnI4lgz2CQd+cNrd49FC43qXCLpBaGpECfFUVW9YJtI7BoHkHmJ5ARsGCBCJfGlchr8+oJPSplDem3XGyUOtGl3SbY0qnDqTK/qJHT4Fwk4Uy9nNrYiAqBd1d2XYg0+zJrzn1shF8rA+Y9C6rtyPqTSTduzPiHtLR/iX5eFfgGDog51TrYD/cAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDYtMjBUMjE6NDc6MzMrMDI6MDDmYSb9AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTA2LTIwVDIxOjQ3OjMzKzAyOjAwlzyeQQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAASUVORK5CYII="
                        style="all:revert;"></a>
            </div>
            <div id="whatswidget-conversation-message-outer" class="whatswidget-conversation-message-outer"
                style="color: revert; font: revert; font-feature-settings: revert; font-kerning: revert; font-optical-sizing: revert; font-palette: revert; font-synthesis: revert; font-variation-settings: revert; forced-color-adjust: revert; text-orientation: revert; text-rendering: revert; -webkit-font-smoothing: revert; -webkit-locale: revert; -webkit-text-orientation: revert; -webkit-writing-mode: revert; writing-mode: revert; zoom: revert; accent-color: revert; place-content: revert; place-items: revert; place-self: revert; alignment-baseline: revert; animation: revert; app-region: revert; appearance: revert; aspect-ratio: revert; backdrop-filter: revert; backface-visibility: revert; background: revert; background-blend-mode: revert; baseline-shift: revert; block-size: revert; border-block: revert; border: revert; border-radius: revert; border-collapse: revert; border-end-end-radius: revert; border-end-start-radius: revert; border-inline: revert; border-start-end-radius: revert; border-start-start-radius: revert; inset: revert; box-shadow: revert; box-sizing: revert; break-after: revert; break-before: revert; break-inside: revert; buffered-rendering: revert; caption-side: revert; caret-color: revert; clear: revert; clip: revert; clip-path: revert; clip-rule: revert; color-interpolation: revert; color-interpolation-filters: revert; color-rendering: revert; color-scheme: revert; columns: revert; column-fill: revert; gap: revert; column-rule: revert; column-span: revert; contain: revert; contain-intrinsic-block-size: revert; contain-intrinsic-size: revert; contain-intrinsic-inline-size: revert; container: revert; content: revert; content-visibility: revert; counter-increment: revert; counter-reset: revert; counter-set: revert; cursor: revert; cx: revert; cy: revert; d: revert; display: none; dominant-baseline: revert; empty-cells: revert; fill: revert; fill-opacity: revert; fill-rule: revert; filter: revert; flex: revert; flex-flow: revert; float: revert; flood-color: revert; flood-opacity: revert; grid: revert; grid-area: revert; height: revert; hyphenate-character: revert; hyphenate-limit-chars: revert; hyphens: revert; image-orientation: revert; image-rendering: revert; inline-size: revert; inset-block: revert; inset-inline: revert; isolation: revert; letter-spacing: revert; lighting-color: revert; line-break: revert; list-style: revert; margin-block: revert; margin: revert; margin-inline: revert; marker: revert; mask: revert; mask-type: revert; math-depth: revert; math-shift: revert; math-style: revert; max-block-size: revert; max-height: revert; max-inline-size: revert; max-width: revert; min-block-size: revert; min-height: revert; min-inline-size: revert; min-width: revert; mix-blend-mode: revert; object-fit: revert; object-position: revert; object-view-box: revert; offset: revert; opacity: revert; order: revert; origin-trial-test-property: revert; orphans: revert; outline: revert; outline-offset: revert; overflow-anchor: revert; overflow-clip-margin: revert; overflow-wrap: revert; overflow: revert; overscroll-behavior-block: revert; overscroll-behavior-inline: revert; overscroll-behavior: revert; padding-block: revert; padding: revert; padding-inline: revert; page: revert; page-orientation: revert; paint-order: revert; perspective: revert; perspective-origin: revert; pointer-events: revert; position: revert; quotes: revert; r: revert; resize: revert; rotate: revert; ruby-position: revert; rx: revert; ry: revert; scale: revert; scroll-behavior: revert; scroll-margin-block: revert; scroll-margin: revert; scroll-margin-inline: revert; scroll-padding-block: revert; scroll-padding: revert; scroll-padding-inline: revert; scroll-snap-align: revert; scroll-snap-stop: revert; scroll-snap-type: revert; scrollbar-gutter: revert; shape-image-threshold: revert; shape-margin: revert; shape-outside: revert; shape-rendering: revert; size: revert; speak: revert; stop-color: revert; stop-opacity: revert; stroke: revert; stroke-dasharray: revert; stroke-dashoffset: revert; stroke-linecap: revert; stroke-linejoin: revert; stroke-miterlimit: revert; stroke-opacity: revert; stroke-width: revert; tab-size: revert; table-layout: revert; text-align: revert; text-align-last: revert; text-anchor: revert; text-combine-upright: revert; text-decoration: revert; text-decoration-skip-ink: revert; text-emphasis: revert; text-emphasis-position: revert; text-indent: revert; text-overflow: revert; text-shadow: revert; text-size-adjust: revert; text-transform: revert; text-underline-offset: revert; text-underline-position: revert; touch-action: revert; transform: revert; transform-box: revert; transform-origin: revert; transform-style: revert; transition: revert; translate: revert; user-select: revert; vector-effect: revert; vertical-align: revert; visibility: revert; border-spacing: revert; -webkit-box-align: revert; -webkit-box-decoration-break: revert; -webkit-box-direction: revert; -webkit-box-flex: revert; -webkit-box-ordinal-group: revert; -webkit-box-orient: revert; -webkit-box-pack: revert; -webkit-box-reflect: revert; -webkit-highlight: revert; -webkit-line-break: revert; -webkit-line-clamp: revert; -webkit-mask-box-image: revert; -webkit-mask: revert; -webkit-mask-composite: revert; -webkit-print-color-adjust: revert; -webkit-rtl-ordering: revert; -webkit-ruby-position: revert; -webkit-tap-highlight-color: revert; -webkit-text-combine: revert; -webkit-text-decorations-in-effect: revert; -webkit-text-fill-color: revert; -webkit-text-security: revert; -webkit-text-stroke: revert; -webkit-user-drag: revert; -webkit-user-modify: revert; white-space: revert; widows: revert; width: revert; will-change: revert; word-break: revert; word-spacing: revert; x: revert; y: revert; z-index: revert;">
                <span id="whatswidget-text-header-outer" class="whatswidget-text-header-outer"
                    style="all:revert;">Sétima Onda</span><br>
                <div id="whatswidget-text-message-outer" class="whatswidget-text-message-outer" style="all:revert;">
                    Texto da mensagem!</div>
            </div>
            <div class="whatswidget-button-wrapper" style="all:revert;">
                <div class="whatswidget-button" id="whatswidget-button" style="all:revert;">
                    <div style="margin:0 auto;width:38.5px;all:revert;"> <img class="whatswidget-icon"
                            style="all:revert;"
                            src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAXAAAAFkCAYAAAA5XmCyAAAAhnpUWHRSYXcgcHJvZmlsZSB0eXBlIGV4aWYAAHjaVY7tDcMwCET/M0VHOAPBZpxISaRu0PF7Lk2iPAnz/IVO9s/7kNekAeJLH5ERIJ6eulIGCgOaos3Otfh3azSlbLUX05LI0eH3Q8eTBTHi6M7iF1PdLVj2u+QMwYyQ94B+mj3Pw69MleALmvYrSXthNkAAAAoGaVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/Pgo8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA0LjQuMC1FeGl2MiI+CiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIKICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIgogICBleGlmOlBpeGVsWERpbWVuc2lvbj0iMzY4IgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzU2IgogICB0aWZmOkltYWdlV2lkdGg9IjM2OCIKICAgdGlmZjpJbWFnZUhlaWdodD0iMzU2IgogICB0aWZmOk9yaWVudGF0aW9uPSIxIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg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">
                    </div>
                </div>
            </div>
            <script id="whatswidget-script" type="text/javascript">
            document.getElementById("whatswidget-conversation").style.display = "none";
            document.getElementById("whatswidget-conversation").style.opacity = "0";
            var button = document.getElementById("whatswidget-button");
            button.addEventListener("click", openChat);
            var conversationMessageOuter = document.getElementById("whatswidget-conversation-message-outer");
            conversationMessageOuter.addEventListener("click", openChat);
            var chatOpen = !1;

            function openChat() {
                0 == chatOpen ? (document.getElementById("whatswidget-conversation").style.display = "block", document
                    .getElementById("whatswidget-conversation").style.opacity = 100, chatOpen = !0, document
                    .getElementById("whatswidget-conversation-message-outer").style.display = "none") : (document
                    .getElementById("whatswidget-conversation").style.opacity = 0, document.getElementById(
                        "whatswidget-conversation").style.display = "none", chatOpen = !1)
            }
            </script>
        </div>
        <style id="whatswidget-style">
        .whatswidget-widget-wrapper {
            font-family: "Helvetica Neue", "Apple Color Emoji", Helvetica, Arial, sans-serif !important;
            font-size: 16px !important;
            position: fixed !important;
            bottom: 20px !important;
            right: 30px !important;
            z-index: 1001 !important
        }

        .whatswidget-conversation {
            background-color: #e4dcd4 !important;
            background-image: url('data:image/png !important;base64,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') !important;
            background-repeat: repeat !important;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 5px 40px !important;
            width: 250px !important;
            height: 300px !important;
            border-radius: 10px !important;
            transition-duration: 0.5s !important;
            margin-bottom: 80px !important
        }

        .whatswidget-conversation-header {
            background-color: white !important;
            padding: 10px !important;
            padding-left: 25px !important;
            box-shadow: 0px 1px #00000029 !important;
            font-weight: 600 !important;
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important
        }

        .whatswidget-conversation-message {
            line-height: 1.2em !important;
            background-color: white !important;
            padding: 10px !important;
            margin: 10px !important;
            margin-left: 15px !important;
            border-radius: 5px !important
        }

        .whatswidget-conversation-message-outer {
            background-color: #FFF !important;
            padding: 10px !important;
            margin: 10px !important;
            margin-left: 0px !important;
            border-radius: 5px !important;
            box-shadow: rgba(0, 0, 0, 0.342) 0px 2.5px 10px !important;
            cursor: pointer !important;
            animation: nudge 2s linear infinite !important;
            margin-bottom: 70px !important
        }

        .whatswidget-text-header-outer {
            font-weight: bold !important;
            font-size: 90% !important
        }

        .whatswidget-text-message-outer {
            font-size: 90% !important
        }

        .whatswidget-conversation-cta {
            border-radius: 25px !important;
            width: 175px !important;
            font-size: 110% !important;
            padding: 10px !important;
            margin: 0 auto !important;
            text-align: center !important;
            background-color: #23b123 !important;
            color: white !important;
            font-weight: bold !important;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 2.5px 10px !important;
            transition: 1s !important;
            position: absolute !important;
            top: 62% !important;
            left: 10% !important
        }

        .whatswidget-conversation-cta:hover {
            transform: scale(1.1) !important;
            filter: brightness(1.3) !important
        }

        .whatswidget-cta {
            text-decoration: none !important;
            color: white !important
        }

        .whatswidget-cta-desktop {
            display: none !important
        }

        .whatswidget-cta-mobile {
            display: inherit !important
        }

        @media (min-width: 48em) {
            .whatswidget-cta-desktop {
                display: inherit !important
            }

            .whatswidget-cta-mobile {
                display: none !important
            }
        }

        .whatswidget-button-wrapper {
            position: fixed !important;
            bottom: 15px !important;
            right: 15px !important
        }

        .whatswidget-button {
            position: relative !important;
            right: 0px !important;
            background-color: #31d831 !important;
            border-radius: 100% !important;
            width: 60px !important;
            height: 60px !important;
            box-shadow: 2px 1px #0d630d63 !important;
            transition: 1s !important
        }

        .whatswidget-icon {
            width: 42px !important;
            height: 42px !important;
            position: absolute !important;
            bottom: 10px !important;
            left: 10px !important;
        }

        .whatswidget-button:hover {
            filter: brightness(115%) !important;
            transform: rotate(15deg) scale(1.15) !important;
            cursor: pointer !important
        }

        @keyframes nudge {

            20%,
            100% {
                transform: translate(0, 0)
            }

            0% {
                transform: translate(0, 5px);
                transform: rotate(2deg)
            }

            10% {
                transform: translate(0, -5px);
                transform: rotate(-2deg)
            }
        }

        .whatswidget-link {
            position: absolute !important;
            bottom: 90px !important;
            right: 5px !important;
            opacity: 0.5 !important
        }
        </style>
    </div> -->

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-ae2d48ee-b505-4355-8700-fa8035647d31"></div>
</body>

</html>