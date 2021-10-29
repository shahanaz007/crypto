 	<header>
		<nav hidden class="nav-white nav-transparent dark-overlay">
			<div class="nav-header" style="width: 8%;background: #ffe4c400;">
				<a href="index.html" class="brand">
					<img src="{{asset('assets/img/swiz.png')}}" alt="swiz logo" style="width:50%" />
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
				<li class="dropdown">
					<a href="#">Coupons</a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('coupon_purchase.index') }}">{{ __('Coupon Purchase') }}</a></li>
						<li><a href="{{ route('my_coupons.index') }}">{{ __('My Coupons') }}</a></li>
					</ul>
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
			<!-- <ul class="attributes">
				<li class="d-md-block d-none"><a href="#" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
				
			</ul> -->
			@endif

			<!-- <div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div> -->
		</nav>
	</header>