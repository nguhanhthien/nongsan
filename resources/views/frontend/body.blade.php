@extends('frontend.master')
@section('content')
    <!-- Slideshow -->
    @include('body.slider')
    <!-- Payment Intro -->
    <div class="section payment-intro">
        <div class="container">
            <div class="payment-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item d-flex">
                            <div class="item-left">
                                <img src="{{ asset('theme/img/home1-payment-1.png')}}" alt="Thực phẩm sạch - shipping">
                            </div>
                            <div class="item-right">
                                <h3 class="title">Giao sản phẩm tận nơi</h3>
                                <div class="content">Tích hợp với các nhà vận chuyển trên 64 tỉnh thành</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item d-flex">
                            <div class="item-left">
                                <img src="{{ asset('theme/img/home1-payment-2.png')}}" alt="Payment Intro">
                            </div>  
                            <div class="item-right">
                                <h3 class="title">Bảo mật thanh toán</h3>
                                <div class="content">Mọi thông tin của khách hàng thanh toán trên website đều được bảo mật.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item d-flex">
                            <div class="item-left">
                                <img src="{{ asset('theme/img/home1-payment-3.png')}}" alt="Payment Intro">
                            </div>
                            <div class="item-right">
                                <h3 class="title">ĐẢM BẢO HOÀN TIỀN</h3>
                                <div class="content">Mọi thông tin của khách hàng thanh toán trên website đều được bảo mật.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item d-flex">
                            <div class="item-left">
                                <img src="{{ asset('theme/img/home1-payment-4.png')}}" alt="Payment Intro">
                            </div>
                            <div class="item-right">
                                <h3 class="title">Vận chuyển nhanh chóng</h3>
                                <div class="content">Mọi thông tin của khách hàng thanh toán trên website đều được bảo mật.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product - Our Products -->
    @include('body.list-products')
    <!-- Intro -->
    <div class="section intro">
        <div class="block-content">
            <div class="container">
                <div class="intro-wrap">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">                           
                            <div class="intro-header">
                                <h3>Why Choose Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud</p>
                            </div>
                            <div class="intro-social">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('theme/img/intro-social-1.png')}}" alt="Social Item"></a></li>
                                    <li><a href="#"><img src="{{ asset('theme/img/intro-social-2.png')}}" alt="Social Item"></a></li>
                                    <li><a href="#"><img src="{{ asset('theme/img/intro-social-3.png')}}" alt="Social Item"></a></li>
                                    <li><a href="#"><img src="{{ asset('theme/img/intro-social-4.png')}}" alt="Social Item"></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 top-left text-center">
                            <div class="intro-item">
                                <p><img src="{{ asset('theme/img/intro-icon-1.png')}}" alt="Intro Image"></p>
                                <h4>Always Fresh</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 top-right text-center">
                            <div class="intro-item">
                                <p><img src="{{ asset('theme/img/intro-icon-2.png')}}" alt="Intro Image"></p>
                                <h4>100% Natural</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 bottom-left text-center">
                            <div class="intro-item">
                                <p><img src="{{ asset('theme/img/intro-icon-3.png')}}" alt="Intro Image"></p>
                                <h4>Super Healthy</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                                                        
                        <div class="col-lg-6 col-md-6 col-sm-6 bottom-right text-center">
                            <div class="intro-item">
                                <p><img src="{{ asset('theme/img/intro-icon-4.png')}}" alt="Intro Image"></p>
                                <h4>Premium Quality</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection