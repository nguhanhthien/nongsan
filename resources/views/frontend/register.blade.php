@extends('frontend.master')
@section('content')
    <!-- Breadcrumb -->
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Đăng kí</h2>

            <ul class="breadcrumb">
                <li><a href="{{route('index')}}" title="Home">Trang chủ</a></li>
                <li><span>Đăng kí</span></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="register-page">
            <div class="register-form form">
                <div class="block-title">
                    <h2 class="title"><span>Tạo tài khoản</span></h2>
                </div>

                <form action="http://tivatheme.com/html/freshmart/index.html" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Họ</label>
                        <input type="text" value="" name="first_name">
                    </div>

                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" value="" name="last_name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="" name="email">
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" value="" name="password">
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Tạo tài khoản">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Intro -->
    @include('partials.layouts.intro')
@endsection
