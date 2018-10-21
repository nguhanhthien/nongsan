@extends('frontend.master')
@section('content')
    <!-- Breadcrumb -->
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Liên hệ</h2>

            <ul class="breadcrumb">
                <li><a href="{{route('index')}}" title="Home">Trang chủ</a></li>
                <li><span>Liên hệ</span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="contact-page">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="item d-flex">
                            <div class="item-left">
                                <div class="icon"><i class="zmdi zmdi-email"></i></div>
                            </div>
                            <div class="item-right d-flex">
                                <div class="title">Email:</div>
                                <div class="content">
                                    <a href="mailto:support@domain.com">support@domain.com</a><br>
                                    <a href="mailto:contact@domain.com">contact@domain.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="item d-flex justify-content-center">
                            <div class="item-left">
                                <div class="icon"><i class="zmdi zmdi-home"></i></div>
                            </div>
                            <div class="item-right d-flex">
                                <div class="title">Address:</div>
                                <div class="content">
                                    23 Suspendis matti, Visaosang Building VST<br> District, NY Accums, North American
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="item d-flex justify-content-end">
                            <div class="item-left">
                                <div class="icon"><i class="zmdi zmdi-phone"></i></div>
                            </div>
                            <div class="item-right d-flex">
                                <div class="title">Holine:</div>
                                <div class="content">
                                    0123-456-78910<br>
                                    0987-654-32100
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-map">
                <div id="map"></div>
                <div class="hidden-lg hidden-md hidden-sm hidden-xs contact-address">815 Sunset Boulevard Ca 70079</div>
            </div>

            <div class="contact-intro">
                <p>“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit auctor”</p>
                <img src="{{asset('theme/img/contact-icon.png')}}" alt="Contact Comment">
            </div>

            <div class="contact-form form">
                <form action="http://tivatheme.com/html/freshmart/index.html" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="YOUR NAME">
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="YOUR EMAIL">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" placeholder="SUBJECT">
                    </div>

                    <div class="form-group">
                        <textarea rows="10" name="content" placeholder="MESSAGE"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Intro -->
    @include('partials.layouts.intro')
    <!-- Map google -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCHw5d0S8zNjrr5Eo4Rg0j2pE8JK9UDZWY"></script>
@endsection