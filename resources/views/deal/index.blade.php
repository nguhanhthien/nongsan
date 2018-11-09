@extends('frontend.master')
@section('content')
<!-- Slideshow -->
	<!-- @include('products.banner') -->
	<div class="container" style="max-width: 1170px;">
		<ol class="breadcrumb" style="padding-left: 0px;">
		 	<li><a href="">Trang chủ</a></li>
		  	<li><a href="{{route('product')}}">Hot Deal</a></li>
		</ol>
		<div class="row" style="padding-top: 60px;">
			<!-- Sidebar -->
			@include('products.sidebar')
			<!-- Page Content -->
			<div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="product-category-page">
					<!-- Nav Bar -->
					<div class="products-bar">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="total-products">Bạn đang xem 12/100 deal</div>
							</div>
							
							<div class="col-md-6 col-xs-6">
								<div class="filter-bar">
									<form action="#" class="pull-right">
										<div class="select">
											<select class="form-control">
												<option value="">Sắp sếp</option>
												<option value="1">Giá: Tăng dần</option>
												<option value="2">Giá: Giảm dần</option>
												<option value="3">Tên: A to Z</option>
												<option value="4">Tên: Z to A</option>
												<option value="5">Đánh giá</option>
											</select>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Products Grid -->
					<div id="products-grid" style="padding-bottom: 60px;">
						<div class="products-block">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="product-item">
										<div class="product-image">
											<a href="{{ route('detail-deal','san-pham-a') }}">
												<img class="img-responsive" src="{{ asset('theme/img//product/4.jpg')}}" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="/san-pham-a-c">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-price">
											<span class="sale-price">$80.00</span>
										</div>

										<div class="progress-home">
		                                    <p>
		                                        <span class="text-left"><b>70/100kg</b></span>
		                                        <span class="pull-right">70%</span>
		                                    </p>
		                                    <div class="progress height-7px">
		                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
		                                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
		                                        </div>
		                                    </div>
		                                    <p><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<b>Còn 35 giờ</b></p>
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
								
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="product-item">
										<div class="product-image">
											<a href="/san-pham-a">
												<img class="img-responsive" src="{{ asset('theme/img//product/14.jpg')}}" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="/san-pham-a">
												Organic Strawberry Fruits
											</a>
										</div>
										
										<div class="product-price">
											<span class="sale-price">$80.00</span>
										</div>
										
										<div class="progress-home">
		                                    <p>
		                                        <span class="text-left"><b>70/100kg</b></span>
		                                        <span class="pull-right">70%</span>
		                                    </p>
		                                    <div class="progress height-7px">
		                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
		                                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
		                                        </div>
		                                    </div>
		                                    <p><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<b>Còn 35 giờ</b></p>
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
								
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="product-item">
										<div class="product-image">
											<a href="/san-pham-a">
												<img class="img-responsive" src="{{ asset('theme/img//product/17.jpg')}}" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="/san-pham-a">
												Organic Strawberry Fruits
											</a>
										</div>
										
										<div class="product-price">
											<span class="sale-price">$80.00</span>
										</div>

										<div class="progress-home">
		                                    <p>
		                                        <span class="text-left"><b>70/100kg</b></span>
		                                        <span class="pull-right">70%</span>
		                                    </p>
		                                    <div class="progress height-7px">
		                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
		                                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
		                                        </div>
		                                    </div>
		                                    <p><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<b>Còn 35 giờ</b></p>
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

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="product-item">
										<div class="product-image">
											<a href="/san-pham-a">
												<img class="img-responsive" src="{{ asset('theme/img//product/4.jpg')}}" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="/san-pham-a-c">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-price">
											<span class="sale-price">$80.00</span>
										</div>

										<div class="progress-home">
		                                    <p>
		                                        <span class="text-left"><b>70/100kg</b></span>
		                                        <span class="pull-right">70%</span>
		                                    </p>
		                                    <div class="progress height-7px">
		                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
		                                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
		                                        </div>
		                                    </div>
		                                    <p><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<b>Còn 35 giờ</b></p>
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
								
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="product-item">
										<div class="product-image">
											<a href="/san-pham-a">
												<img class="img-responsive" src="{{ asset('theme/img//product/14.jpg')}}" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="/san-pham-a">
												Organic Strawberry Fruits
											</a>
										</div>
										
										<div class="product-price">
											<span class="sale-price">$80.00</span>
										</div>
										
										<div class="progress-home">
		                                    <p>
		                                        <span class="text-left"><b>70/100kg</b></span>
		                                        <span class="pull-right">70%</span>
		                                    </p>
		                                    <div class="progress height-7px">
		                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
		                                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
		                                        </div>
		                                    </div>
		                                    <p><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<b>Còn 35 giờ</b></p>
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
								
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="product-item">
										<div class="product-image">
											<a href="/san-pham-a">
												<img class="img-responsive" src="{{ asset('theme/img//product/17.jpg')}}" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="/san-pham-a">
												Organic Strawberry Fruits
											</a>
										</div>
										
										<div class="product-price">
											<span class="sale-price">$80.00</span>
										</div>

										<div class="progress-home">
		                                    <p>
		                                        <span class="text-left"><b>70/100kg</b></span>
		                                        <span class="pull-right">70%</span>
		                                    </p>
		                                    <div class="progress height-7px">
		                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
		                                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
		                                        </div>
		                                    </div>
		                                    <p><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<b>Còn 35 giờ</b></p>
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
					<!-- Pagination Bar -->
					<div class="pagination-bar">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="text">XEM 12/100 DEAL</div>
							</div>
							
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="pagination">
									<ul class="page-list">
										<li><a href="#" class="prev">Quay lại</a></li>
										<li><a href="#" class="current">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#" class="next">Tiếp</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection