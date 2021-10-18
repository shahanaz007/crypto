<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/front-end/images/favicon.ico')}}">

    <title>Crypto Currency HTML Template</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('assets/front-end/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('assets/front-end/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/front-end/css/skin_color.css')}}">
     
  </head>

<body class="theme-warning bg-dark-body">
	
	<header>
		<nav hidden class="nav-white nav-transparent dark-overlay">
			<div class="nav-header">
				<a href="index.html" class="brand">
					<img src="{{asset('assets/front-end/images/logo-light-text2.png')}}" alt=""/>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>								
			<ul class="menu">		
			<li>
					<a href="{{ route('home') }}">{{ __('Home') }}</a>
				</li>		
				<!-- <li class="dropdown">
					<a href="#">Home</a>
					<ul class="dropdown-menu">
						<li><a href="index.html">Home 1</a></li>
						<li><a href="index2.html">Home 2</a></li>
						<li><a href="index3.html">Home 3</a></li>
						<li><a href="index4.html">Home 4</a></li>
					</ul>
				</li>	 -->

				<?php
        $type= 'admin?';                      
        ?>	
    	@if(Auth::check())
      @if(Auth::user()->$type)			
				<li>
					<a href="{{URL::to('/withdraw_request/index')}}">{{ __('Withdraw Request') }}</a>
				</li>
				<li>
					<a href="{{URL::to('/merchant_request/index')}}">{{ __('Merchant Request') }}</a>
				</li>	
				 <li>
                                    <a  href="{{ route('location.index') }}">{{ __('Locations') }}</a>
                                </li>
                                <li >
                                    <a  href="{{ route('brand.index') }}">{{ __('Brands') }}</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/coupon_category/index')}}">{{ __('Coupon Category') }}</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/admin_coupon/index')}}">{{ __('Coupons') }}</a>
                                </li>			
				<li class="dropdown">
					<a href="#">Reports</a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('purchase_report.index') }}">{{ __('Purchases') }}</a></li>
						<li><a href="{{route('referral_report.index') }}">{{ __('Referral') }}</a></li>
						<li><a href="{{ route('rewards_report.index') }}">{{ __('Rewards') }}</a></li>
					</ul>
				</li>
				@else

				<li class="dropdown">
					<a href="#">Wallet</a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('payment.create') }}">{{ __('Deposit') }}</a></li>
						<li><a href="{{route('withdraw.create') }}">{{ __('Withdraw') }}</a></li>
						<li><a href="{{ route('coinaddress.index') }}">{{ __('Deposit Addresses') }}</a></li>
					</ul>
				</li>

				<li class="nav-item">
          <a class="nav-link" href="{{ route('hotels.index') }}">{{ __('Hotels') }}</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('coupon_purchase.index') }}">{{ __('Coupon Purchase') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('my_coupons.index') }}">{{ __('My Coupons') }}</a>
        </li>


        <li class="nav-item">
           <a class="nav-link" href="{{ route('token_purchase.index') }}">{{ __('Token Purchase') }}</a>
        </li>

        <li class="nav-item">
           <a class="nav-link" href="{{ route('payment.index') }}">{{ __('History') }}</a>
        </li>

				<!-- <li class="megamenu">
					<a href="#">Pages</a>
					<div class="megamenu-content">
						<div class="row">
							<div class="col-lg-3 col-12">
								<ul class="list-group">
									<li><h4 class="menu-title">User Pages</h4></li>
									<li><a href="faqs.html"><i class="ti-arrow-circle-right me-10"></i>FAQs</a></li>
									<li><a href="inovice.html"><i class="ti-arrow-circle-right me-10"></i>Invoice</a></li>
									<li><a href="membership.html"><i class="ti-arrow-circle-right me-10"></i>Membership</a></li>
									<li><a href="testimonial.html"><i class="ti-arrow-circle-right me-10"></i>Testimonial</a></li>
									<li><a href="about.html"><i class="ti-arrow-circle-right me-10"></i>About</a></li>
									<li><a href="404.html"><i class="ti-arrow-circle-right me-10"></i>404</a></li>
									<li><a href="500.html"><i class="ti-arrow-circle-right me-10"></i>500</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-12">
								<ul class="list-group">
									<li><h4 class="menu-title">Widgets</h4></li>
									<li><a href="widgets.html"><i class="ti-arrow-circle-right me-10"></i>Widgets</a></li>
									<li><a href="register.html"><i class="ti-arrow-circle-right me-10"></i>Register</a></li>
									<li><a href="login.html"><i class="ti-arrow-circle-right me-10"></i>Login</a></li>
									<li><a href="register_login.html"><i class="ti-arrow-circle-right me-10"></i>Register & Login</a></li>
									<li><a href="forgot_pass.html"><i class="ti-arrow-circle-right me-10"></i>Forgot Password</a></li>
									<li><a href="lockscreen.html"><i class="ti-arrow-circle-right me-10"></i>Lock Screen</a></li>
									<li><a href="maintenance.html"><i class="ti-arrow-circle-right me-10"></i>Under Constructions</a></li>
								</ul>
							</div>
							<div class="col-md-3 col-12">
								<ul class="list-group">
									<li><h4 class="menu-title">Footer</h4></li> 
									<li><a href="footer_style1.html"><i class="ti-arrow-circle-right me-10"></i>Footer One</a></li>
									<li><a href="footer_style2.html"><i class="ti-arrow-circle-right me-10"></i>Footer Two</a></li>
									<li><a href="footer_style3.html"><i class="ti-arrow-circle-right me-10"></i>Footer Three</a></li>
									<li><a href="footer_style4.html"><i class="ti-arrow-circle-right me-10"></i>Footer Four</a></li>
									<li><a href="footer_style5.html"><i class="ti-arrow-circle-right me-10"></i>Footer Five</a></li>
									<li><a href="footer_style6.html"><i class="ti-arrow-circle-right me-10"></i>Footer Six</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-12">
								<ul class="list-group">
									<li><h4 class="menu-title">Header</h4></li>
									<li><a href="header_default.html"><i class="ti-arrow-circle-right me-10"></i>Header One</a></li>
									<li><a href="header_style2.html"><i class="ti-arrow-circle-right me-10"></i>Header Two</a></li>
									<li><a href="header_style3.html"><i class="ti-arrow-circle-right me-10"></i>Header Three</a></li>
									<li><a href="header_style4.html"><i class="ti-arrow-circle-right me-10"></i>Header Four</a></li>
									<li><a href="header_style5.html"><i class="ti-arrow-circle-right me-10"></i>Header Five</a></li> 
								</ul>
							</div>
						</div>
					</div>
				</li> -->				
				<!-- <li class="dropdown">
					<a href="#">Blog</a>
					<ul class="dropdown-menu">
						<li class="dropdown">
							<a href="#">Grid Blog</a>
							<ul class="dropdown-menu">
								<li><a href="blog_grid_2.html">Grid 2 colunm</a></li>
								<li><a href="blog_grid_3.html">Grid 3 colunm</a></li>
								<li><a href="blog_grid_left_sidebar.html">blog left sidebar</a></li>
								<li><a href="blog_grid_right_sidebar.html">blog right sidebar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#">List Blog</a>
							<ul class="dropdown-menu">
								<li><a href="blog_list.html">Blog List</a></li>
								<li><a href="blog_list_left_sidebar.html">Blog List Left Sidebar</a></li>
								<li><a href="blog_list_right_sidebar.html">Blog List right Sidebar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#">Single Blog Post</a>
							<ul class="dropdown-menu">
								<li><a href="blog_single_grid_post.html">Single Grid Post</a></li>
								<li><a href="blog_single_html5video_post.html">Single html5 Video-post</a></li>
								<li><a href="blog_single_image_post.html">Single Image Post</a></li>
								<li><a href="blog_single_slider_post.html">Single Slider Post</a></li>
								<li><a href="blog_single_soundcloud_post.html">Single SoundCloud Post</a></li>
								<li><a href="blog_single_vimeo_post.html">Single Vimeo Post</a></li>
								<li><a href="blog_single_post.html">Single without image post</a></li>
								<li><a href="blog_single_youtube_post.html">Single Youtube Post</a></li>
							</ul>
						</li>
					</ul>
				</li>	 -->
			@endif

			<li class="dropdown">
					<a href="#">{{ Auth::user()->name }}</a>
					<ul class="dropdown-menu">
						@if(Auth::user()->$type)
						<li>
							<a href="{{ route('admin_kyc.index') }}">{{ __('KYC ') }}</a>
              @elseif(Auth::user()->kyc_approved != 1)
              <a href="{{ route('kyc.index') }}">{{ __('KYC ') }}</a>
						</li>
						@endif
						@if(Auth::user()->merchant != 1)
						<li><a href="{{ url('/merchant_request') }}">{{ __('Merchant Request') }}</a></li>
						@endif
						<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
               </form>
					</ul>
				</li>
				
				<!-- <li>
					<a href="contact_us.html">Contact</a>
				</li> -->
			</ul>
			@else
			<ul class="attributes">
				<li class="d-md-block d-none"><a href="#" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
				
			</ul>
			@endif

			<div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div>
		</nav>
	</header>
	<div id="particles-js" class="overflow-hidden z-0"></div>
	@yield('content')
	
	<footer class="footer_three">
		<div class="footer-top pt-50 bg-dark3">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title text-white">About</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        </div>
                    </div>											
					<div class="col-lg-3 col-12">
						<div class="widget">
							<h4 class="footer-title text-white">Contact Info</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="list list-unstyled mb-30">
								<li> <i class="fa fa-map-marker"></i> 123, Lorem Ipsum, Dummy City,<br>FL-12345 USA</li>
								<li> <i class="fa fa-phone"></i> <span>+(1) 123-878-1649 </span><br><span>+(1) 123-878-1649 </span></li>
								<li> <i class="fa fa-envelope"></i> <span>hello@multipurposethemes.com </span><br><span>support@multipurposethemes.com </span></li>
							</ul>
						</div>
					</div>					
					<div class="col-12 col-lg-3">
                        <div class="widget footer_widget clearfix">
                            <h4 class="footer-title text-white">Our Gallery</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <ul class="list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">Instant Buy & Sell</a></li>
								<li><a href="#">Trade</a></li>
								<li><a href="#">Pages</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title text-white">Accept Card Payments</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="payment-icon list-unstyled d-flex gap-items-1">
								<li class="ps-0">
									<a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
								</li>
							</ul>
                            <h4 class="footer-title mt-20 text-white">Newsletter</h4>
							<hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto w-60">
                            <div class="mb-20">
								<form class="" action="" method="post">
									<div class="input-group">
										<input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
										<button name="submit" value="Submit" type="submit" class="btn btn-primary"> <i class="fa fa-envelope"></i> </button>
									</div>
								</form>
							</div>
                        </div>
                    </div>
                </div>				
            </div>
        </div>		
		<div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 text-md-start text-center"> © 2021 <span class="text-white"> Multipurpose Themes</span>  All Rights Reserved.</div>
					<div class="col-md-6 mt-md-0 mt-20">
						<div class="social-icons">
							<ul class="list-unstyled d-flex gap-items-1 justify-content-md-end justify-content-center">
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
	</footer>
	
	
	<!-- Vendor JS -->
	<script src="{{asset('assets/front-end/js/vendors.min.js')}}"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="{{asset('assets/front-end/corenav-master/coreNavigation-1.1.3.js')}}"></script>
    <script src="{{asset('assets/front-end/js/nav.js')}}"></script>
	<script src="{{asset('assets/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js')}}"></script>
	<script src="{{asset('assets/assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	<script src="{{asset('assets/front-end/js/particles.js')}}"></script>
	<script src="{{asset('assets/front-end/js/app.js')}}"></script>
	
	<!-- CryptoCurrency front end -->
	<script src="{{asset('assets/front-end/js/template.js')}}"></script>
	
	
</body>
</html>
