@extends('frontend.master')
@section('content')
<!-- Slideshow -->
	<!-- @include('products.banner') -->
	
	<div class="container" style="max-width: 1170px;">

		<ol class="breadcrumb" style="padding-left: 0px;">
		 	<li><a href="">Trang chủ</a></li>
		  	<li><a href="{{route('product')}}">Sản phẩm</a></li>
		  	<li>Dừa Bến Tre</li>
		</ol>

		<div class="product-detail">
			<div class="products-block layout-5">
				@include('products.item')
			</div>
		</div>
		
		<!-- Related Products -->
		<div class="products-block related-products item-4" style="padding-bottom: 60px;">
			<div class="block-title">
				<h2 class="title">Sản phẩm cùng danh mục</h2>
			</div>
			
			<div class="block-content home-list">
				<div class="products owl-theme owl-carousel">
					 <div class="product-item">
                        <div class="product-image">
                            <a href="product-detail-left-sidebar.html">
                                <img src="https://uphinhnhanh.com/images/2018/11/05/botsanday.jpg" alt="Product Image">
                            </a>
                        </div>
                        <div class="product-title">
                            <a href="product-detail-left-sidebar.html">
                                Bột sắn dây Đông Triều 500 Gram
                            </a>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">80.000 <sup>đ</sup></span>
                            <!-- <span class="base-price">$90.00</span> -->
                        </div>
                        <div class="product-buttons">
							<a class="add-to-cart" href="#">
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
							</a>
							<a class="add-wishlist" href="#">
								<i class="fa fa-heart" aria-hidden="true"></i>		
							</a>
							<a class="quickview" href="#">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</a>
						</div>
                    </div>
                    
                    <div class="product-item">
                        <div class="product-image">
                            <a href="product-detail-left-sidebar.html">
                                <img src="https://uphinhnhanh.com/images/2018/11/05/thanhlongd.md.jpg" alt="Product Image">
                            </a>
                        </div>
                        <div class="product-title">
                            <a href="product-detail-left-sidebar.html">
                                Thanh Long Ruột Đỏ Bình Thuận
                            </a>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">25.000 <sup>đ</sup></span>
                            <span class="base-price">20.000 <sup>đ</sup></span>
                        </div>
                        <div class="product-buttons">
							<a class="add-to-cart" href="#">
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
							</a>
							<a class="add-wishlist" href="#">
								<i class="fa fa-heart" aria-hidden="true"></i>		
							</a>
							<a class="quickview" href="#">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</a>
						</div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <a href="product-detail-left-sidebar.html">
                                <img src="https://uphinhnhanh.com/images/2018/11/05/camvinh2.jpg" alt="Product Image">
                            </a>
                        </div>
                        <div class="product-title">
                            <a href="product-detail-left-sidebar.html">
                                Cam Vinh
                            </a>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">35.000 <sup>đ</sup></span>
                            <!-- <span class="base-price">35000 <sup>đ</sup></span> -->
                        </div>
                        <div class="product-buttons">
							<a class="add-to-cart" href="#">
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
							</a>
							<a class="add-wishlist" href="#">
								<i class="fa fa-heart" aria-hidden="true"></i>		
							</a>
							<a class="quickview" href="#">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</a>
						</div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <a href="product-detail-left-sidebar.html">
                                <img src="https://uphinhnhanh.com/images/2018/11/05/buoi-nam-roi-1.jpg" alt="Product Image">
                            </a>
                        </div>
                        <div class="product-title">
                            <a href="product-detail-left-sidebar.html">
                                Bưởi Năm Roi 
                            </a>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">32.000 <sup>đ</sup></span>
                            <span class="base-price">30.000 <sup>đ</sup></span>
                        </div>

                        <div class="product-buttons">
							<a class="add-to-cart" href="#">
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
							</a>
							<a class="add-wishlist" href="#">
								<i class="fa fa-heart" aria-hidden="true"></i>		
							</a>
							<a class="quickview" href="#">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</a>
						</div>
                    </div>

				</div>
			</div>
		</div>
	</div>
@endsection