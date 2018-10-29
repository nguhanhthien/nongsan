<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{!! config('Title') !!}</title>
    
    <meta name="keywords" content="{!! config('Keywords') !!}">
    <meta name="description" content="{!! config('Description') !!}">
    <meta name="author" content="Nguyễn Thế Hồng Khê">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('theme/img/favicon.png') }}" type="image/png">
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Fonts -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('theme/libs/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/libs/font-awesome/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/libs/font-material/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/libs/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/libs/nivo-slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/libs/nivo-slider/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/libs/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/libs/slider-range/css/jslider.css')}}">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/css/reponsive.css')}}">
    @yield('style')
</head>
<body class="home home-4">
    <div id="all">
        <!-- HEADER -->
        @include('partials.layouts.header')
        <!-- //HEADER -->
        <!-- Main Content -->
        <div id="content" class="site-content"> 
        @yield('content')
        </div>
        <!-- End main -->
         <!-- FOOTER -->
        @include('partials.layouts.footer')
        <!-- //FOOTER -->
    <!-- Go Up button -->
        <div class="go-up">
            <a href="#">
                <i class="fa fa-long-arrow-up"></i>
            </a>
        </div>
        
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
    </div>
    @include('partials.layouts.javascripts')
    @yield('script')
</body>
</html>