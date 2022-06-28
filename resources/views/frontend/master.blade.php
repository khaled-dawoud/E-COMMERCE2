<!DOCTYPE  html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">


<!-- home207:13-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', env('APP_NAME'))</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libs/nivo-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libs/nivo-slider/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libs/nivo-slider/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libs/font-material/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libs/slider-range/css/jslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libs/owl-carousel/assets/owl.carousel.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/reponsive.css') }}">
    @yield('styles')
</head>

<body id="home2">

    @include('frontend.body.header')

    @yield('content')

    <!-- footer -->
    @include('frontend.body.footer')

    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- menu mobie left -->
    @include('frontend.body.menu_left')

    <!-- menu mobie right -->
    @include('frontend.body.menu_right')


    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <!-- search -->
    {{-- <div id="tiva-searchBox" class="d-flex align-items-center text-center active">
        <div class="container">
            <span class="tiva-seachBoxClose">
                <i class="zmdi zmdi-close"></i>
            </span>
            <div class="tiva-seachBoxInner">
                <div class="title-search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span>Search</span>
                </div>
                <div class="description">
                    Find your product with fast search. Enter some keyword such as dress, shirts, shoes etc. Or can search by product sku.
                </div>
                <!-- Block search module TOP -->
                <div id="search" class="search-widget d-flex justify-content-center">
                    <form method="get" action="#">
                        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        <input type="text" name="s" value="" placeholder="Search" class="ui-autocomplete-input" autocomplete="off">
                        <button type="button">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Vendor JS -->
    <script src="{{ asset('frontend/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/popper/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('frontend/libs/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/slider-range/js/tmpl.js') }}"></script>
    <script src="{{ asset('frontend/libs/slider-range/js/jquery.dependClass-0.1.js') }}"></script>
    <script src="{{ asset('frontend/libs/slider-range/js/draggable-0.1.js') }}"></script>
    <script src="{{ asset('frontend/libs/slider-range/js/jquery.slider.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('frontend/js/theme.js') }}"></script>
    @yield('scripts')
</body>


<!-- home207:34-->
</html>
