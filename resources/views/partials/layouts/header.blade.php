<header id="header">
	<div class="container">
		<div class="header-top">
			<div class="row align-items-center">
				<!-- Header Left -->
				<div class="col-lg-5 col-md-5 col-sm-12">
					<!-- Main Menu -->
					<div id="main-menu">
						<ul class="menu">
							<li class="dropdown">
								<a href="/" title="Trang chủ - Thực phẩm sạch">Trang chủ</a>
							</li>
							
							<li class="dropdown">
								<a href="{{route('product')}}" title="Thực phẩm sạch- Sản phẩm">Sản phẩm</a>
								<div class="dropdown-menu">
									<ul>
										<li class="has-image">
											<img src="{{ asset('theme/img/product/product-category-1.png')}}" alt="Product Category Image">
											<a href="#" title="Vegetables">Rau củ</a>
										</li>
										<li class="has-image">
											<img src="{{ asset('theme/img/product/product-category-2.png')}}" alt="Product Category Image">
											<a href="#" title="Fruits">Hoa quả</a>
										</li>
										<li class="has-image">
											<img src="{{ asset('theme/img/product/product-category-3.png')}}" alt="Product Category Image">
											<a href="#" title="Bread">Bánh</a>
										</li>
										<li class="has-image">
											<img src="{{ asset('theme/img/product/product-category-4.png')}}" alt="Product Category Image">
											<a href="#" title="Juices">Nước ép</a>
										</li>
										<li class="has-image">
											<img src="{{ asset('theme/img/product/product-category-5.png')}}" alt="Product Category Image">
											<a href="#" title="Tea and coffee">Trà và coffee</a>
										</li>
									</ul>
								</div>
							</li>
							
							<li>
								<a href="{{route('blog')}}">Kiến thức</a>
							</li>
							
							<li>
								<a href="{{route('aboutus')}}">Về chúng tôi</a>
							</li>
							
							<li>
								<a href="{{route('contact')}}">Liên hệ</a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- Header Center -->
				<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
					<!-- Logo -->		
					<div class="logo">
						<a href="">
							<img class="img-responsive" src="{{ asset('theme/img/logo.png')}}" alt="Logo">
						</a>
					</div>
					
					<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
				</div>
				
				
				<!-- Header Right -->
				<div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
					<!-- Search -->							
					<div class="form-search">
						<form action="" method="get">
							<input type="text" class="form-input" placeholder="Tìm kiếm">
							<button type="submit" class="fa fa-search"></button>
						</form>
					</div>
					
					<!-- Cart -->
					<div class="block-cart dropdown">
						<div class="cart-title">
							<i class="fa fa-shopping-basket" aria-hidden="true"></i>
							<span class="cart-count">2</span>
						</div>
						
						<div class="dropdown-content">
							<div class="cart-content">
								<table>
									<tbody>
										<tr>
											<td class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{ asset('theme/img/product/7.jpg')}}" alt="Product">
												</a>
											</td>
											<td>
												<div class="product-name">
													<a href="product-detail-left-sidebar.html">Organic Strawberry Fruits</a>
												</div>
												<div>	
													2 x <span class="product-price">$28.98</span>
												</div>
											</td>
											<td class="action">
												<a class="remove" href="#">
													<i class="fa fa-trash-o" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										
										<tr>
											<td class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{ asset('theme/img/product/6.jpg')}}" alt="Product">
												</a>
											</td>
											<td>
												<div class="product-name">
													<a href="product-detail-left-sidebar.html">Organic Strawberry</a>
												</div>
												<div>	
													1 x <span class="product-price">$35.00</span>
												</div>
											</td>
											<td class="action">
												<a class="remove" href="#">
													<i class="fa fa-trash-o" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										
										<tr class="total">
											<td>Total:</td>
											<td colspan="2">$92.96</td>
										</tr>
										
										<tr>
											<td colspan="3">
												<div class="cart-button">
													<a class="btn btn-primary" href="product-cart.html" title="View Cart">View Cart</a>
													<a class="btn btn-primary" href="product-checkout.html" title="Checkout">Checkout</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					<!-- My Account -->
					<div class="my-account dropdown toggle-icon">
						<div class="dropdown-toggle" data-toggle="dropdown">
							<i class="zmdi zmdi-menu"></i>
						</div>
						<div class="dropdown-menu">										
							<div class="item">
								<a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>Tài khoản của bạn</a>
							</div>
							<div class="item">
								<a href="{{route('getLogin')}}" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Đăng nhập</a>
							</div>
							<div class="item">
								<a href="{{route('register')}}" title="Register Account"><i class="fa fa-user"></i>Đăng ký</a>
							</div>
							<div class="item">
								<a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
							</div>
							<div class="item">
								<!-- Language -->
								<div class="language switcher">
									<a href="#" title="Language English" class="active"><img src="{{ asset('theme/img/language-en.jpg')}}" alt="Language English"></a>
									<a href="#" title="Language Vietnamess"><img src="{{ asset('theme/img/language-fr.jpg')}}" alt="Language French"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</header>