@extends('frontend.master')
@section('content')

    <div class="container" style="max-width: 1170px;">

        <ol class="breadcrumb" style="padding-left: 0px;">
            <li><a href="">Trang chủ</a></li>
            <li><a href="{{route('product')}}">Về chúng tôi</a></li>
        </ol>

        <div class="row" style="padding-top: 60px;padding-bottom: 60px;">
        <div class="about-us intro">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="intro-header">
                            <h3>Welcome To FreshMart</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="intro-left">
                            <div class="intro-item">
                                <p><img src="{{asset('theme/img/intro-icon-1.png')}}" alt="Intro Image"></p>
                                <h4>Luôi tươi mới</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="intro-item">
                                <p><img src="{{asset('theme/img/intro-icon-3.png')}}" alt="Intro Image"></p>
                                <h4>Tốt cho sức khỏe</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="effect">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('theme/img/intro-1.png')}}" alt="Intro Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="intro-right">
                            <div class="intro-item">
                                <p><img src="{{asset('theme/img/intro-icon-2.png')}}" alt="Intro Image"></p>
                                <h4>100% từ thiên nhiên</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="intro-item">
                                <p><img src="{{asset('theme/img/intro-icon-4.png')}}" alt="Intro Image"></p>
                                <h4>Chất lượng hàng đầu</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro -->
    {{--@include('partials.layouts.intro')--}}
@endsection