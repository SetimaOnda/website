<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/img/home/7onda-logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Sétima Onda">
    <meta property="og:image" content="img/home/7onda-logo.png" />
    <title>Sétima Onda - Boat trips</title>


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>

    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
</head>

<style>
.nav-item {
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
    font-size: 1.2rem;
    margin-right: 5rem;
}

.nav-link {
    color: black;
}

.dropdown-menu a:hover {
    color: #000 !important;
}
</style>

<body class="antialiased">
    <script>
    $(document).ready(function() {

        $('ul.navbar-nav > li')
            .click(function(e) {
                $('ul.navbar-nav > li')
                    .removeClass('active');
                $(this).addClass('active');
            });
    });
    </script>

    <div class="superNav border-bottom py-2 shadow" style="background-color:#65abb4;color:white !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 centerOnMobile">
                    <span class="me-3"><i class="fi-xnsuxl-map-marker-solid"></i>
                        Praia dos Pescadores, 8365-114 Armação de Pera</span>
                    <span class="me-3"><i class="fi-xnsrxl-phone-solid"></i>
                        +351 926 461 342</span>
                    <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><i
                            class="fi-xwsuxl-envelope-solid"></i>info@7onda.com</span>

                </div>
                <div
                    class="col-lg-2 col-md-2 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                    <span class="me-3"><a class="text-muted" href="#"><i style="color:white !important"
                                class="fi-xnsuxl-instagram"></i></a></span>
                    <span class="me-3"><a class="text-muted" href="#"><i style="color:white !important"
                                class="fi-xnsuxl-facebook"></i></a></span>
                    <span class="me-3"><a class="text-muted" href="#"><i
                                style="color:white !important;font-size:1.15rem !important;"
                                class="fi-xnsuxl-youtube"></i></a></span>
                </div>
            </div>
        </div>
    </div>
    <!--<nav class="navbar navbar-light" style="background-color:#65abb4;padding: 0 !important;">
        <div class="container" style="color:white;">
            
            <div class="row">
                <div class="col-md-1" style="padding-bottom:0.5rem !important;"><i style="font-size:0.9rem !important;"
                        class="fi-xnsuxl-map-marker-solid"></i></div>
                <div class="col-md-11" style="padding-top:0.38rem !important;font-size:0.6rem !important;">
                    <h6 style="font-size:0.8rem !important;">Praia dos Pescadores, 8365-114 Armação de Pera</h6>
                </div>

            </div>
            <div class="row">
                <div class="col-md-1" style="padding-bottom:0.5rem !important;"><i style="font-size:0.9rem !important;"
                        class="fi-xnsuxl-map-marker-solid"></i></div>
                <div class="col-md-11" style="padding-top:0.38rem !important;font-size:0.6rem !important;">
                    <h6 style="font-size:0.8rem !important;">Praia dos Pescadores, 8365-114 Armação de Pera</h6>
                </div>

            </div>
        </div>
    </nav>-->
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <a class="navbar-brand" href="/"><img style="width:6rem;" src="img/home/7onda-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/tours">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/contact">Contact</a>
                    </li>
                    <!---->
                </ul>
                <form class="d-flex">
                    <span class="me-3"><a class="text-muted" href="#"><img src="img/home/pt.svg" style="width:1.5rem;"
                                alt=""></a></span>
                    <span class="me-3"><a class="text-muted" href="#"><img src="img/home/gb.svg" style="width:1.5rem;"
                                alt=""></a></span>
                </form>
            </div>
        </div>
    </nav>

    <main style="height:100%;">
        @yield('content')
    </main>

    <footer class="text-center text-lg-start text-white footer-16371" style="background-color: #fffff;">
        <!-- Copyright -->
        <div class="text-center text-black p-3" style="font-family: 'pegadinha_alternativo';">
            © 2022 Copyright
            <a style="font-family: 'pegadinha';" class="text-black" href="https://127.0.0.1:8000">Sétima Onda</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>