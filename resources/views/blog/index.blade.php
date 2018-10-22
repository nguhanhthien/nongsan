@extends('frontend.master')
@section('content')
    <!-- Breadcrumb -->
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Kiến thức</h2>

            <ul class="breadcrumb">
                <li><a href="{{route('index')}}" title="Home">Trang chủ</a></li>
                <li><span>Kiến thức</span></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="blog-list full-width">
            <div class="posts-list">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="{{route('blog-detail','ten-bai-viet')}}l">
                                    <img class="img-responsive" src="{{asset('theme/img/blog/blog-1.jpg')}}" alt="Blog Image">
                                </a>
                            </div>
                            <a class="post-title" href="{{route('blog-detail','ten-bai-viet')}}">5 loại trái cây lành mạnh và tốt cho sức khỏe</a>
                            <div class="post-info">
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                            </div>
                            <div class="post-description">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                <span class="post-readmore"><a href="blog-detail.html">Xem thêm</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="{{route('blog-detail','ten-bai-viet')}}">
                                    <img class="img-responsive" src="{{asset('theme/img/blog/blog-2.jpg')}}" alt="Blog Image">
                                </a>
                            </div>
                            <a class="post-title" href="{{route('blog-detail','ten-bai-viet')}}">5 loại trái cây lành mạnh và tốt cho sức khỏe</a>
                            <div class="post-info">
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                            </div>
                            <div class="post-description">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                <span class="post-readmore"><a href="blog-detail.html">Xem thêm</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="blog-detail.html">
                                    <img class="img-responsive" src="{{asset('theme/img/blog/blog-3.jpg')}}" alt="Blog Image">
                                </a>
                            </div>
                            <a class="post-title" href="{{route('blog-detail','ten-bai-viet')}}">5 loại trái cây lành mạnh và tốt cho sức khỏe</a>
                            <div class="post-info">
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                            </div>
                            <div class="post-description">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                <span class="post-readmore"><a href="blog-detail.html">Xem thêm</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="blog-detail.html">
                                    <img class="img-responsive" src="{{asset('theme/img/blog/blog-4.jpg')}}" alt="Blog Image">
                                </a>
                            </div>
                            <a class="post-title" href="{{route('blog-detail','ten-bai-viet')}}">5 loại trái cây lành mạnh và tốt cho sức khỏe</a>
                            <div class="post-info">
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                            </div>
                            <div class="post-description">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                <span class="post-readmore"><a href="blog-detail.html">Xem thêm</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="{{route('blog-detail','ten-bai-viet')}}">
                                    <img class="img-responsive" src="{{asset('theme/img/blog/blog-5.jpg')}}" alt="Blog Image">
                                </a>
                            </div>
                            <a class="post-title" href="{{route('blog-detail','ten-bai-viet')}}">5 loại trái cây lành mạnh và tốt cho sức khỏe</a>
                            <div class="post-info">
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                            </div>
                            <div class="post-description">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                <span class="post-readmore"><a href="blog-detail.html">Xem thêm</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="{{route('blog-detail','ten-bai-viet')}}">
                                    <img class="img-responsive" src="{{asset('theme/img/blog/blog-6.jpg')}}" alt="Blog Image">
                                </a>
                            </div>
                            <a class="post-title" href="blog-detail.html">5 loại trái cây lành mạnh và tốt cho sức khỏe</a>
                            <div class="post-info">
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                            </div>
                            <div class="post-description">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                <span class="post-readmore"><a href="blog-detail.html">Xem thêm</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination Bar -->
            <div class="pagination-bar">
                <div class="pagination">
                    <ul class="page-list">
                        <li><a href="#" class="prev">Previous</a></li>
                        <li><a href="#" class="current">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#" class="next">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro -->
    @include('partials.layouts.intro')
@endsection
