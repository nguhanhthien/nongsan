<!-- Footer -->
<footer id="footer">
	<div class="footer">
		<div class="container">
			<div class="footer-wrap">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
						<div class="block text">
							<div class="block-content">
								<a href="home-4.html" class="logo-footer">
									<img src="{{ asset('theme/img/logo-3.png')}}" alt="Logo">
								</a>
								{!! config('Introduce') !!}
								
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
						<div class="block text">
							<div class="block-content">
								<h2 class="block-title">Liên kết</h2>
								<ul>
									<li><a href="">Về chúng tôi</a></li>
									<li><a href="">Hướng dẫn mua Deal</a></li>
									<li><a href="">Hướng dẫn mua sản phẩm</a></li>
									<li><a href="">Điều khoản mua bán hàng hóa</a></li>
									<li><a href="">Chính sách bảo mật</a></li>
									<li><a href="">Liên hệ</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
						<div class="block text">
							<h2 class="block-title">Giờ mở cửa</h2>
							<div class="block-content">
								{!! config('Opening') !!}
							</div>
						</div>
						<div class="block newsletter">
							<div class="block-content">
								<p class="description">Đăng ký để nhận Hot Deal và Khuyến mãi mới mỗi ngày</p>
								<form action="l" method="post">
									<input type="text" placeholder="Email đăng ký">
									<button type="submit" class="btn btn-primary">Đăng ký ngay</button>
								</form>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
						<div class="block text">
							<h2 class="block-title">Liên hệ</h2>
							<div class="block-content">
								<div class="contact">
									{!! config('Contact') !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	
	<!-- Copyright -->
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<div class="copyright">Copyright © {{date('Y')}} - Thực phẩm sạch. Powered by Trần Danh Đại.</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
					<div class="payment">
						<img src="{{ asset('theme/img/payment.png')}}" alt="Payment - Thực phẩm sạch">
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>