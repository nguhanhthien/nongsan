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
    @include('partials.layouts.intro')
@endsection