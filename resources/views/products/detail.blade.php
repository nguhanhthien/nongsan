@extends('frontend.master')
@section('content')
<!-- Slideshow -->
	<!-- @include('products.banner') -->
	
	<div class="container" style="max-width: 1170px;">

		<ol class="breadcrumb" style="padding-left: 0px;">
		 	<li><a href="">Trang chủ</a></li>
		  	<li><a href="{{route('product')}}">Sản phẩm</a></li>
		  	<li>Tên sản phẩm</li>
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
			
			<div class="block-content">
				<div class="products owl-theme owl-carousel">
					<div class="product-item">
						<div class="product-image">
							<a href="product-detail-left-sidebar.html">
								<img src="{{asset('theme/img/product/4.jpg')}}" alt="Product Image">
							</a>
						</div>
						
						<div class="product-title">
							<a href="product-detail-left-sidebar.html">
								Organic Strawberry Fruits
							</a>
						</div>
						
						<ul class="product-rating list-inline">
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star-o"></i></li>
						</ul>
						
						<div class="product-price">
							<span class="sale-price">$80.00</span>
							<span class="base-price">$90.00</span>
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
								<img src="{{asset('theme/img/product/15.jpg')}}" alt="Product Image">
							</a>
						</div>
						
						<div class="product-title">
							<a href="product-detail-left-sidebar.html">
								Organic Strawberry Fruits
							</a>
						</div>
						
						<ul class="product-rating list-inline">
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star-o"></i></li>
						</ul>
						
						<div class="product-price">
							<span class="sale-price">$120.00</span>
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
								<img src="{{asset('theme/img/product/31.jpg')}}" alt="Product Image">
							</a>
						</div>
						
						<div class="product-title">
							<a href="product-detail-left-sidebar.html">
								Organic Strawberry Fruits
							</a>
						</div>
						
						<ul class="product-rating list-inline">
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star-o"></i></li>
						</ul>
						
						<div class="product-price">
							<span class="sale-price">$80.00</span>
							<span class="base-price">$90.00</span>
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
								<img src="{{asset('theme/img/product/9.jpg')}}" alt="Product Image">
							</a>
						</div>
						
						<div class="product-title">
							<a href="product-detail-left-sidebar.html">
								Organic Strawberry Fruits
							</a>
						</div>
						
						<ul class="product-rating list-inline">
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star-o"></i></li>
						</ul>
						
						<div class="product-price">
							<span class="sale-price">$80.00</span>
							<span class="base-price">$90.00</span>
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
								<img src="{{asset('theme/img/product/15.jpg')}}" alt="Product Image">
							</a>
						</div>
						
						<div class="product-title">
							<a href="product-detail-left-sidebar.html">
								Organic Strawberry Fruits
							</a>
						</div>
						
						<ul class="product-rating list-inline">
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li class="active"><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star-o"></i></li>
						</ul>
						
						<div class="product-price">
							<span class="sale-price">$120.00</span>
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