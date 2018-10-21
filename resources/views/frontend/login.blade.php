@extends('frontend.master')
@section('content')
    <!-- Breadcrumb -->
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Đăng nhập</h2>

            <ul class="breadcrumb">
                <li><a href="{{route('index')}}" title="Home">Trang chủ</a></li>
                <li><span>Đăng nhập</span></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="login-page">
            <div class="login-form form">
                <div class="block-title">
                    <h2 class="title"><span>Đăng nhập</span></h2>
                </div>

                <form action="http://tivatheme.com/html/freshmart/index.html" method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="" name="email">
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" value="" name="password">
                    </div>

                    <div class="form-group text-center">
                        <div class="link">
                            <a href="#">Quên mật khẩu?</a>
                            <a href="{{route('register')}}">Đăng kí?</a>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Đăng nhập">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Intro -->
    @include('partials.layouts.intro')
@endsection
