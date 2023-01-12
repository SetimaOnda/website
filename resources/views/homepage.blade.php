@extends('layout')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<section>
    <style>
    .landing-hero {
        background-size: 100% 120vh;
        height: 100vh;
        background-repeat: no-repeat;
    }

    .landing-hero2 {
        background-size: 100% 80vh;
        height: 80vh;
        background-repeat: no-repeat;
    }

    .booknow:hover {
        background-color: white !important;
        color: #65abb4 !important;

    }
    </style>
    <div class="landing-hero" style="background-image: url(img/home/foto1.jpeg);">
        <div style="backdrop-filter: blur(3px);background: rgba(255,255,255,0.2);width:100%;height:100%">
            <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);text-align:center;">
                <div style="font-size:4rem;color:#1EC4BD;text-align:center"><img src="img/home/7onda-logo.png"
                        style="width:25rem;" alt=""></div>
                <h1 style="text-shadow: 1px 2px #585858;text-align:center;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;font-weight:bold;"
                    id="textoCarousel1"> Bem vindo à Sétima Onda!
                </h1>
                <h4 style="text-shadow: 2px 2px #585858;text-align:center;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;margin-bottom:2rem;"
                    id="textoCarousel1"> Navegue connosco na experiência inesquecivel que é conhecer a famosa gruta de
                    Benagil e as demais praias selvagens!
                </h4>
                <a class="booknow"
                    style="text-align:center;text-decoration:none !important;font-weight:bold;color:white;background-color:#65abb4; border: 2px solid white;padding:0.5rem;border-radius:15px;"
                    href="">Book Now <i class="fi-cnlrxl-chevron-solid"></i></a>
            </div>
        </div>
    </div>

</section>
<section style="">
    <div class="container">
        <h2 style="text-align:left;letter-spacing:0.05px;color:#65abb4;line-height:40px;line-height:1.5;font-weight:bold;"
            id="textoCarousel1"> As Nossas Tours
        </h2>
        <h6 style="text-align:center;letter-spacing:0.05px;color:gray;line-height:40px;line-height:1.5;margin-bottom:2rem;"
            id="textoCarousel1">Se pretende ter uma experiência de sonho, está no sítio certo! Junte-se a nós num dos
            nosso passeios de barco ao longo da nossa costa algarvia e visite 8 praias e 10 grutas, entre elas, a Praia
            da Marinha, o Arco de Albandeira e uma das 10 Maravilhas do Mundo, a gruta de Benagil!
        </h6>
    </div>
</section>
<section style="background-color:#f6f6f6;">

    <div class="container">
        <style>
        .gallery-container h1 {
            text-align: center;
            font-family: 'Droid Sans', sans-serif;
            font-weight: bold;
        }

        .gallery-container p.page-description {
            text-align: center;
            margin: 25px auto;
            font-size: 18px;
            color: #999;
        }

        .tz-gallery {
            padding: 40px;
            margin-left: 8rem;
        }

        /* Override bootstrap column paddings */
        .tz-gallery .row>div {
            padding: 0px;
        }

        .tz-gallery .lightbox img {
            width: 100%;
            border-radius: 0;
            position: relative;
        }

        .tz-gallery .lightbox:before {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -13px;
            margin-left: -13px;
            opacity: 0;
            color: #fff;
            font-size: 26px;
            font-family: 'Glyphicons Halflings';
            content: '\e003';
            pointer-events: none;
            z-index: 9000;
            transition: 0.4s;
        }


        .tz-gallery .lightbox:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            background-color: rgba(46, 132, 206, 0.7);
            content: '';
            transition: 0.4s;
        }

        .tz-gallery .lightbox:hover:after,
        .tz-gallery .lightbox:hover:before {
            opacity: 1;
        }

        .baguetteBox-button {
            background-color: transparent !important;
        }

        .img3-blur:hover {
            backdrop-filter: blur(6px) !important;
        }

        .img4-blur:hover {
            backdrop-filter: blur(6px) !important;
        }

        .img2-blur:hover {
            backdrop-filter: blur(6px) !important;
        }

        .img1-blur:hover {
            backdrop-filter: blur(6px) !important;
        }
        </style>
        <div class="container gallery-container">
            <div class="tz-gallery">

                <div class="row" style="width:50rem;">
                    <div class="col-sm-12 col-md-12"
                        style="background-image: url(img/home/foto1.jpeg);height: 10rem;    background-size: 100% 10rem;">
                        <div class="img1-blur"
                            style="backdrop-filter: blur(2px);background: rgba(255,255,255,0.2);width:100%;height:100%;text-align:center;">
                            <a class="" href="" style="text-decoration:none !important">
                                <h3 style="margin-left:3rem;text-shadow: 1px 2px #585858;text-align:left;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;font-weight:bold;"
                                    id="textoCarousel1"> Tradicional Benagil
                                </h3>
                                <h6 style="margin-left:2rem;text-shadow: 2px 2px #585858;text-align:left;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;margin-bottom:2rem;"
                                    id="textoCarousel1"> Venha descobrir uma das mais famosas grutas do mundo!
                                </h6>
                                <a class="booknow"
                                    style="text-align:center;text-decoration:none !important;font-weight:bold;color:white;background-color:#65abb4; border: 2px solid white;padding:0.5rem;border-radius:15px;"
                                    href="">Book Now <i class="fi-cnlrxl-chevron-solid"></i></a>
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12"
                        style="background-image: url(img/home/foto1.jpeg);height: 10rem;    background-size: 100% 10rem;">
                        <div class="img2-blur"
                            style="backdrop-filter: blur(2px);background: rgba(255,255,255,0.2);width:100%;height:100%;text-align:center;">
                            <a class="" href="" style="text-decoration:none !important">
                                <h3 style="margin-left:3rem;text-shadow: 1px 2px #585858;text-align:left;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;font-weight:bold;"
                                    id="textoCarousel1"> Tradicional Benagil
                                </h3>
                                <h6 style="margin-left:2rem;text-shadow: 2px 2px #585858;text-align:left;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;margin-bottom:2rem;"
                                    id="textoCarousel1"> Venha descobrir uma das mais famosas grutas do mundo!
                                </h6>
                                <a class="booknow"
                                    style="text-align:center;text-decoration:none !important;font-weight:bold;color:white;background-color:#65abb4; border: 2px solid white;padding:0.5rem;border-radius:15px;"
                                    href="">Book Now <i class="fi-cnlrxl-chevron-solid"></i></a>
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6"
                        style="background-image: url(img/home/foto1.jpeg);height: 10rem;    background-size: 100% 10rem;">
                        <div class="img3-blur"
                            style="backdrop-filter: blur(2px);background: rgba(255,255,255,0.2);width:100%;height:100%;text-align:center;">
                            <a class="" href="" style="text-decoration:none !important">
                                <h3 style="margin-left:3rem;text-shadow: 1px 2px #585858;text-align:left;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;font-weight:bold;"
                                    id="textoCarousel1"> Tradicional Benagil
                                </h3>
                                <h6 style="text-shadow: 2px 2px #585858;text-align:center;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;margin-bottom:0.7rem;"
                                    id="textoCarousel1"> Venha descobrir uma das mais famosas grutas do mundo!
                                </h6>
                                <a class="booknow"
                                    style="text-align:center;text-decoration:none !important;font-weight:bold;color:white;background-color:#65abb4; border: 2px solid white;padding:0.5rem;border-radius:15px;"
                                    href="">Book Now <i class="fi-cnlrxl-chevron-solid"></i></a>
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6"
                        style="background-image: url(img/home/foto1.jpeg);height: 10rem;    background-size: 100% 10rem;"">
                        <div class=" img4-blur"
                        style="backdrop-filter: blur(2px);background: rgba(255,255,255,0.2);width:100%;height:100%;text-align:center;">
                        <a class="" href="" style="text-decoration:none !important">
                            <h3 style="margin-left:3rem;text-shadow: 1px 2px #585858;text-align:left;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;font-weight:bold;"
                                id="textoCarousel1"> Tradicional Benagil
                            </h3>
                            <h6 style="text-shadow: 2px 2px #585858;text-align:center;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;margin-bottom:0.7rem;"
                                id="textoCarousel1"> Venha descobrir uma das mais famosas grutas do mundo!
                            </h6>
                            <a class="booknow"
                                style="text-align:center;text-decoration:none !important;font-weight:bold;color:white;background-color:#65abb4; border: 2px solid white;padding:0.5rem;border-radius:15px;"
                                href="">Book Now <i class="fi-cnlrxl-chevron-solid"></i></a>
                        </a>

                    </div>
                </div>


            </div>

        </div>

    </div>
    </div>

</section>

<section>
    <div class="landing-hero2" style="background-image: url(img/home/foto2.jpeg);">
        <div style="backdrop-filter: blur(5px);background: rgba(255,255,255,0.2);width:100%;height:100%">
            <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);text-align:center;">
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
                <h1 style="text-shadow: 1px 2px #585858;text-align:center;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5;font-weight:bold;"
                    id="textoCarousel1"> Venha descobrir a costa Algarvia!
                </h1>
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

<section>
    <div class="container">
        <h2 style="text-align:left;margin-bottom:4rem;letter-spacing:0.05px;color:#65abb4;line-height:40px;line-height:1.5;font-weight:bold;margin-top:3rem;"
            id="textoCarousel1"> Sobre nós
        </h2>
        <div class="row justify-content-center  d-flex align-items-center" style="margin-bottom:5rem;">
            <div class="col-md-8 col-lg-6 col-xl-6 justify-content-center mx-auto d-flex align-items-center"
                style="width:22rem !important;height:18rem !important;">
                <div style="filter: drop-shadow(-3px -6px 11px #000) !important;">
                    <img src="img/home/equipa.jpg"
                        style="width:25rem;clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%);"
                        alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-6 mx-auto">
                <h5>A sétima Onda é uma empresa familiar com experiência nesta atividade e com várias embarcações
                    comandadas
                    por profissionais certificados. </h5>
                <br>
                <h5> Temos como principal objetivo, proporcionar a todos os nossos
                    clientes
                    uma experiência única através das vistas deslumbrantes que projetamos nos nossos Passeios, bem como,
                    a
                    história de cada gruta que os nossos antepassados nos contam.</h5>

                <br>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container" style="margin-bottom:8rem;">
        <h2 style="text-align:left;margin-bottom:4rem;letter-spacing:0.05px;color:#65abb4;line-height:40px;line-height:1.5;font-weight:bold;margin-top:3rem;"
            id="textoCarousel1"> Testemunhas
        </h2>
        <div class="sd_master_wrapper">
            <div class="sdtestBg2"></div>
            <div class="sdtestBg3"></div>
            <div class="slideshow">

                <div class="content">
                    <!-- slide 1 -->
                    <div class="thumbnail" style="margin-top:5rem;">

                    </div>
                    <div class="btnNtxt">
                        <div class="sdAllContent">

                            <div class="sd_scroll">
                                <h1 class="sdCustomSliderHeadig">A wonderful, user-friendly HR solution! Farsight HR
                                    Solution helped us implement ESS (Employee Self Service) portal for our large
                                    enterprise, which made both employees and Human Resources more productive.
                                    User-oriented
                                    interface and professional team.</h1>
                            </div>
                            <p class="SdClientName">Manuel Joaquim</p>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <!-- slide 2 -->
                    <div class="thumbnail" style="margin-top:5rem;">

                    </div>
                    <div class="btnNtxt">
                        <div class="sdAllContent">

                            <div class="sd_scroll">
                                <h1 class="sdCustomSliderHeadig">For us, Farsight has become much more than a software
                                    solution provider. Farsight has been our helping hand with implementing business
                                    automation. The team's expertise, skill, and commitment to excellence are what makes
                                    them so great.</h1>
                            </div>
                            <p class="SdClientName">Manuel Joaquim</p>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <!-- slide 3 -->
                    <div class="thumbnail" style="margin-top:5rem;">

                    </div>
                    <div class="btnNtxt">
                        <div class="sdAllContent">

                            <div class="sd_scroll">
                                <h1 class="sdCustomSliderHeadig">I would like to place on record my sincere appreciation
                                    for
                                    helping us to automate the Salary Revision Exercise and also the Leave Management
                                    System
                                    at Schneider Electric India. We have had huge challenges in the past to manage these
                                    2
                                    complex exercises and it was a nightmare for HR every March/April. However when we
                                    engaged you and worked closely to develop a Software Tool customised for Schneider
                                    Electric, our lives have become very much easy. What used to be a pain for us became
                                    a
                                    huge gain for HR Shared Services.</h1>
                            </div>
                            <p class="SdClientName">Manuel Joaquim</p>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <!-- slide 4 -->
                    <div class="thumbnail" style="margin-top:5rem;">
                    </div>
                    <div class="btnNtxt">
                        <div class="sdAllContent">
                            <div class="sd_scroll">
                                <h1 class="sdCustomSliderHeadig">With Farsight’s Employee Self Service Portal, our
                                    Vision of
                                    implementing an HR Software in Honda R&D (India) could be realized for the easy and
                                    smooth functioning of operations. Processes and Policies were well understood by the
                                    Team and extended a solution in the System, we look forward for more such
                                    customizations
                                    where customer is always given a priority. We wish them success for all the future
                                    endeavors. </h1>
                            </div>
                            <p class="SdClientName">Manuel Joaquim</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <style>
        .sd_master_wrapper {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
            padding: 0;
            border-radius: 10px;
            z-index: 9999;
        }

        .sdtestBg3 {
            height: 100%;
            width: 80%;
            background: #fff;
            position: absolute;
            bottom: -40px;
            left: 10%;
            border-radius: 20px;
            box-shadow: 0px 18px 52.8537px rgb(215 228 249 / 50%);
            z-index: 1;
        }

        .sdtestBg2 {
            height: 100%;
            width: 90%;
            background: #fff;
            position: absolute;
            bottom: -22px;
            left: 5%;
            border-radius: 20px;
            box-shadow: 0px 18px 52.8537px rgb(215 228 249 / 50%);
            z-index: 2;
        }

        .sd_scroll {
            height: auto;
            max-height: 180px;
            overflow: auto;
        }

        .slideshow {
            position: relative;
            min-height: 300px;
            height: auto;
            background: #fff;
            box-shadow: 0px 18px 52.8537px rgba(215, 228, 249, 0.5);
            border-radius: 20px;
            background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/quote1.png), url(https://farsighttechnologies.com/wp-content/uploads/2021/03/quote.png);
            background-position: top 15px left 15px, bottom 40% right 15px;
            background-repeat: no-repeat;
            background-size: 180px, 180px;
            z-index: 3;
        }

        button.slick-prev.slick-arrow {
            position: absolute;
            z-index: 9999;
            bottom: -80px;
            right: 160px;
            background: transparent;
            color: transparent;
            border: none;
            outline: none;
            cursor: pointer;
            height: 15px;
            width: 30px;
            padding: 0;
            background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/left-icon.png);
            background-size: 100% 100%;
        }

        button.slick-next.slick-arrow {
            position: absolute;
            bottom: -82px;
            right: 105px;
            background: transparent;
            color: transparent;
            border: none;
            padding: 0;
            cursor: pointer;
            outline: none;
            height: 18px;
            width: 40px;
            background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/right-icon.png);
            background-size: 100% 100%;
        }

        .pagingInfo {
            position: absolute;
            bottom: 0;
            z-index: 999;
        }

        .sdCustomSliderHeadig {
            color: #94A2B3;
            font-family: "Poppins", Sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.6em;
            text-align: center;
        }

        .sdCustomSliderBtn {
            display: inline-block;
            text-decoration: none;
            font-family: montserrat;
            background: #E31C3A;
            color: #fff;
            padding: 12px 25px;
            margin-top: 30px;
            border-radius: 4px;
            outline: none;
            font-size: 14px;
            font-weight: 500;
        }

        .sdAllContent {
            width: 75%;
            margin: auto;
        }

        .thumbnail img {
            height: 55px;
            width: 55px;
            border-radius: 50%;
            margin: auto;
            margin-top: 15px;
        }

        .content {
            display: block !important;
            padding: 5px;
        }

        .SdClientName {
            text-align: center;
            color: #272D4E;
            font-family: "Poppins", Sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.4em;
            margin-top: 15px;
        }

        .SdClientDesc {
            text-align: center;
            color: #7854F7;
            font-family: "Poppins", Sans-serif;
            font-size: 14px;
            line-height: 1.4em;
            margin-bottom: 10px;
        }


        /* style for moblile */
        @media (max-width:576px) {
            .sd_scroll {
                height: auto;
                overflow: auto;
                max-height: 240px;
            }

            .thumbnail,
            .btnNtxt {
                width: 100% !important;
                display: block !important;
            }

        }

        /* scroll bar */
        /* total width */
        .sd_scroll::-webkit-scrollbar {
            background-color: transparent;
            width: 6px;
        }

        /* background of the scrollbar except button or resizer */
        .sd_scroll::-webkit-scrollbar-track {
            background-color: transparent;
        }

        .sd_scroll::-webkit-scrollbar-track:hover {
            background-color: transparent;
        }

        /* scrollbar itself */
        .sd_scroll::-webkit-scrollbar-thumb {
            background-color: #babac0;
            border-radius: 16px;

        }

        .sd_scroll::-webkit-scrollbar-thumb:hover {
            background-color: #a0a0a5;
        }
        </style>
        <script>
        jQuery(document).ready(function($) {
            var $slickElement = $('.slideshow');

            $slickElement.slick({
                autoplay: true,
                dots: false,
            });

        });
        </script>
    </div>
</section>



<script>
baguetteBox.run('.tz-gallery');
</script>
@endsection