@extends('frontend.master')
@section('content')

    <!-- @include('products.banner') -->

    <div class="container" style="max-width: 1170px;">

        <ol class="breadcrumb" style="padding-left: 0px;">
            <li><a href="">Trang chủ</a></li>
            <li><a href="{{route('product')}}">Kiến thức</a></li>
            <li>Tên bài viết</li>
        </ol>

        <div class="row" style="padding-top: 60px;">
            <!-- Sidebar -->
            <div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <!-- Block - Recent Posts -->
                <div class="block posts recent-posts">
                    <h3 class="block-title">Bài viết mới nhất</h3>

                    <div class="block-content">
                        <div class="post-item">
                            <a class="post-title" href="/kien-thuc/a">5 Best Fruits To Make You Fresh And Healthy</a>
                            <div class="post-info">
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                            </div>
                            <div class="post-description">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat ipsum... </div>
                            <div class="post-readmore"><a href="/kien-thuc/a">Read more</a></div>
                        </div>

                        <div class="post-item">
                            <a class="post-title" href="/kien-thuc/a">5 Best Fruits To Make You Fresh And Healthy</a>
                            <div class="post-info">
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                            </div>
                            <div class="post-description">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat ipsum... </div>
                            <div class="post-readmore"><a href="/kien-thuc/a">Read more</a></div>
                        </div>
                    </div>
                </div>

                <!-- Block - Blog Tags -->
                <div class="block tags blog-tags">
                    <h3 class="block-title">Blog Tags</h3>

                    <div class="block-content">
                        <ul>
                            <li><a href="#" title="Hot Trend">Hot Trend</a></li>
                            <li><a href="#" title="Jewelry">Jewelry</a></li>
                            <li><a href="#" title="Man">Man</a></li>
                            <li><a href="#" title="Party">Party</a></li>
                            <li><a href="#" title="SamSung">SamSung</a></li>
                            <li><a href="#" title="Shirt Dresses">Shirt Dresses</a></li>
                            <li><a href="#" title="Shoes">Shoes</a></li>
                            <li><a href="#" title="Summer">Summer</a></li>
                            <li><a href="#" title="Sweaters">Sweaters</a></li>
                            <li><a href="#" title="Winter">Winter</a></li>
                            <li><a href="#" title="Woman">Woman</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Block - Banner -->
                <div class="block banner">
                    <div class="block-content">
                        <div class="effect">
                            <img class="img-responsive" src="{{asset('theme/img/blog-banner.jpg')}}" alt="Banner">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="blog-detail">
                    <div class="post-item">
                        <div class="post-image">
                            <img class="img-responsive" src="{{asset('theme/img/blog/blog-1.jpg')}}" alt="Blog Image">
                        </div>

                        <h1 class="post-title">5 Best Fruits To Make You Fresh And Healthy</h1>

                        <div class="post-content border-bottom">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut iaculis arcu. Proin tincidunt, ipsum nec vehicula euismod, neque nibh pretium lorem, at ornare risus sem et risus. Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum.</p>
                            <h5>Here, we bring you a look-see:</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut iaculis arcu. Proin tincidunt, ipsum nec vehicula euismod, neque nibh pretium lorem, at ornare risus sem et risus. Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img class="img-responsive" src="{{asset('theme/img/blog/blog-detail-1.jpg')}}" alt=""></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img class="img-responsive" src="{{asset('theme/img/blog/blog-detail-2.jpg')}}" alt=""></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut iaculis arcu. Proin tincidunt, ipsum nec vehicula euismod, neque nibh pretium lorem, at ornare risus sem et risus. Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut iaculis arcu. Proin tincidunt, ipsum nec vehicula euismod neque</p>
                        </div>

                        <div class="post-meta border-bottom">
                            <div class="post-info">
                                <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                                <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                <span class="author item"><i class="zmdi zmdi-account"></i>TivaTheme</span>
                            </div>

                            <div class="post-share">
                                <div class="item">
                                    <a href="#"><i class="zmdi zmdi-share" aria-hidden="true"></i><span class="text">Share</span></a>
                                </div>
                                <div class="item">
                                    <a href="#"><i class="zmdi zmdi-email" aria-hidden="true"></i><span class="text">Send to a friend</span></a>
                                </div>
                                <div class="item">
                                    <a href="#"><i class="zmdi zmdi-print" aria-hidden="true"></i><span class="text">Print</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="post-author d-flex">
                            <div class="author-left">
                                <div class="avatar">
                                    <img src="{{asset('theme/img/avatar.jpg')}}" alt="" width="100" height="100">
                                </div>
                            </div>
                            <div class="author-body">
                                <div class="author-meta">
                                    <span class="name">John Doe</span> | <span class="role">Administrator</span>
                                </div>
                                <div class="author-info">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="latest-news layout-2">
                            <div class="block-title">
                                <h2 class="title">Related <span>News</span></h2>
                            </div>

                            <div class="block-content">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="blog-item">
                                            <div class="blog-image">
                                                <a href="/kien-thuc/a" class="zoom-effect">
                                                <a href="blog-detail.html" class="zoom-effect">
                                                    <img src="{{asset('theme/img/blog/blog-1.jpg')}}" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="blog-info">
                                                <div class="blog-title"><a href="/kien-thuc/a">5 Best fruits to make you fresh and healthy</a></div>
                                                <div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="blog-item">
                                            <div class="blog-image">
                                                <a href="/kien-thuc/a" class="zoom-effect">
                                                <a href="blog-detail.html" class="zoom-effect">
                                                    <img src="{{asset('theme/img/blog/blog-2.jpg')}}" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="blog-info">
                                                <div class="blog-title"><a href="/kien-thuc/a">5 Best fruits to make you fresh and healthy</a></div>
                                                <div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="blog-item">
                                            <div class="blog-image">
                                                <a href="/kien-thuc/a" class="zoom-effect">
                                                <a href="blog-detail.html" class="zoom-effect">
                                                    <img src="{{asset('theme/img/blog/blog-3.jpg')}}" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="blog-info">
                                                <div class="blog-title"><a href="/kien-thuc/a">5 Best fruits to make you fresh and healthy</a></div>
                                                <div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-reviews reviews">
                            <div class="comments-list">
                                <div class="block-title">
                                    <h2 class="title"><span>Comments</span></h2>
                                </div>

                                <div class="item d-flex">
                                    <div class="comment-left">
                                        <div class="avatar">
                                            <img src="{{asset('theme/img/avatar.jpg')}}" alt="" width="70" height="70">
                                        </div>
                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                        </div>
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <span class="author">Peter</span> - <span class="time">June 02, 2018</span>
                                        </div>
                                        <div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                                    </div>
                                </div>

                                <div class="item d-flex">
                                    <div class="comment-left">
                                        <div class="avatar">
                                            <img src="{{asset('theme/img/avatar.jpg')}}" alt="" width="70" height="70">
                                        </div>
                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <span class="author">Merry</span> - <span class="time">June 17, 2018</span>
                                        </div>
                                        <div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review-form">
                                <div class="block-title">
                                    <h2 class="title">Submit <span>Comment</span></h2>
                                </div>

                                <form action="http://tivatheme.com/html/freshmart/index.html" method="post" class="form-validate">
                                    <div class="form-group">
                                        <div class="text">Your Rating</div>
                                        <div class="product-rating">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="text">You review<sup class="required">*</sup></div>
                                        <textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary">Send your review</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro -->
    @include('partials.layouts.intro')
@endsection
