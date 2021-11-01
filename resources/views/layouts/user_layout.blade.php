<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/front-end/images/favicon.ico')}}">

    <title>Swiz</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('assets/front-end/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('assets/front-end/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/front-end/css/skin_color.css')}}">
	  
     <style type="text/css">
     	nav .brand {
     		/*padding: 0px;*/
     		/*margin: -8px;*/
     	}
     	.top-bar .core-nav.nav-core-sticky.on-scroll {
     		box-shadow: 0px 0px 5px 0px;
     	}
     </style>
  </head>

<body class="theme-warning">
	
	<header class="top-bar">
		<!-- <div class="topbar">
		  <div class="container">
			<div class="row justify-content-end">
			  <div class="col-lg-6 col-12 d-lg-block d-none">
				<div class="topbar-social text-center text-md-start topbar-left">
				  <ul class="list-inline d-md-flex d-inline-block">
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-question-circle"></i> Ask a Question</a></li>
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-envelope"></i> hello@multipurposethemes.com</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-lg-6 col-12 xs-mb-10">
				<div class="topbar-call text-center text-lg-end topbar-right">
				  <ul class="list-inline d-lg-flex justify-content-end">				  
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option>USD</option>
							<option>EUR</option>
							<option>GBP</option>
							<option>INR</option>
						</select>
					 </li>
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option data-icon="flag-icon flag-icon-us">Eng USA</option>
							<option data-icon="flag-icon flag-icon-gb">Eng UK</option>
						</select>
					 </li>
					 <li class="me-10 ps-10"><a href="#"><i class="text-white fa fa-sign-in d-md-inline-block d-none"></i> Login</a></li>
					 <li class="me-10 ps-10"><a href="#"><i class="text-white fa fa-dashboard d-md-inline-block d-none"></i> My Account</a></li>
				  </ul>
				</div>
			  </div>
			 </div>
		  </div>
		</div> -->

		<nav hidden class="nav-white nav-transparent" style="top: 10px !important;">
			<div class="nav-header">
				<a href="{{url('/')}}" class="brand">
					<img src="{{asset('assets/img/swiz.png')}}" alt="" style="width:68%"/>
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
      		<li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">{{ __('Users') }}</a>
            </li>		
				<li>
					<a href="{{URL::to('/withdraw_request/index')}}">{{ __('Withdraw Request') }}</a>
				</li>
				<li>
					<a href="{{ route('add_tokens.index') }}">{{ __('Token Withdraw Request') }}</a>
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
				<li class="dropdown">
					<a href="#">Token Wallet</a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('token_wallet.index') }}">{{ __('Token Wallet') }}</a></li>
						<li><a href="{{route('token_wallet.create') }}">{{ __('Withdraw Request') }}</a></li>
						<li><a href="{{ route('stake_tokens.index') }}">{{ __('Stake Tokens') }}</a></li>
					</ul>
				</li>
				<!-- <li class="dropdown">
					<a href="#">Coupons</a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('coupon_purchase.index') }}">{{ __('Coupon Purchase') }}</a></li>
						<li><a href="{{ route('my_coupons.index') }}">{{ __('My Coupons') }}</a></li>
					</ul>
				</li> -->

				<li class="nav-item">
		           <a class="nav-link" href="{{ route('user.index') }}">{{ __('My Referrals') }}</a>
		        </li>
		        <li class="nav-item">
		           <a class="nav-link" href="{{ route('token_purchase.index') }}">{{ __('Token Purchase') }}</a>
		        </li>
		        

		        <li class="nav-item">
		           <a class="nav-link" href="{{ route('payment.index') }}">{{ __('History') }}</a>
		        </li>

				
			@endif

			<li class="dropdown">
					<a href="#">{{ Auth::user()->name }}</a>
					<ul class="dropdown-menu">
						@if(Auth::user()->$type)
						<li>
							<a href="{{ route('admin_kyc.index') }}" >{{ __('KYC ') }}</a>
              @elseif(Auth::user()->kyc_approved != 1)
              <a href="{{ route('kyc.index') }}" style="color: #172b4c;">{{ __('KYC ') }}</a>
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
			<!-- @else -->
			<!-- <ul class="attributes">
				<li class="d-md-block d-none"><a href="#" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
				
			</ul> -->
			@endif
			<!-- <ul class="attributes">
				<li class="d-md-block d-none"><a href="#" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
				
			</ul>
 -->
			<!-- <div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div> -->
		</nav>
	</header>
	
	<!---page Title --->

	
	@yield('content')
	
	<footer class="footer_three">
		<div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">About</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        </div>
                    </div>											
					<div class="col-lg-3 col-12">
						<div class="widget">
							<h4 class="footer-title">Contact Info</h4>
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
                            <h4 class="footer-title">Our Gallery</h4>
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
                            <h4 class="footer-title">Accept Card Payments</h4>
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
                            <h4 class="footer-title mt-20">Newsletter</h4>
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
	<script src="{{asset('assets/assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	<script src="{{asset('assets/assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
	<script>
		if ($('.coins-exchange').length) {
		   $('.coins-exchange').select2();
		}
		if ($('.money-exchange').length) {
		   $('.money-exchange').select2();
		}
	</script>
	
	
	<!-- CryptoCurrency front end -->
	<script src="{{asset('assets/front-end/js/template.js')}}"></script>
	
</body>
</html>
