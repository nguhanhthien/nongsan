@extends('frontend.master')
@section('content')
 
    <div class="container" style="max-width: 1170px;">

        <ol class="breadcrumb" style="padding-left: 0px;">
            <li><a href="">Trang chủ</a></li>
            <li><a href="{{route('product')}}">Liên hệ Thực phẩm sạch</a></li>
        </ol>

        <div class="contact-page">

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
            
             <div class="contact-map">
                <div id="map"></div>
                <div class="hidden-lg hidden-md hidden-sm hidden-xs contact-address">815 Sunset Boulevard Ca 70079</div>
            </div>


        </div>

    </div>
    <!-- Intro -->
    @include('partials.layouts.intro')
    <!-- Map google -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCHw5d0S8zNjrr5Eo4Rg0j2pE8JK9UDZWY"></script>
@endsection