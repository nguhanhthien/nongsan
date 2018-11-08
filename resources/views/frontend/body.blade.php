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
                                <h3 class="title">Hợp Tác cùng Nông Dân</h3>
                                <div class="content">Các Thực Phẩm Sạch trên website đều có nguồn gốc từ Nông dân Việt Nam.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item d-flex">
                            <div class="item-left">
                                <img src="{{ asset('theme/img/home1-payment-4.png')}}" alt="Payment Intro">
                            </div>  
                            <div class="item-right">
                                <h3 class="title">Cam Kết Chất Lượng</h3>
                                <div class="content">Tất cả sản phẩm đều có giấy chứng nhận cam kết về chất lượng và nguồn gốc của sản phẩm .</div>
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
                                <h3 class="title">Đảm bảo hoàn tiền</h3>
                                <div class="content">Hoàn tiền 100% khi sản phẩm bạn nhận được không đúng cam kết.</div>
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