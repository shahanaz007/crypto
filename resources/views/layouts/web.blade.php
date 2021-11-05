<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>Swiz</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{asset('web/assets/css/bootstrap.min.css')}}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{asset('web/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('web/assets/css/blue.css')}}">
<link rel="stylesheet" href="{{asset('web/assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('web/assets/css/owl.transitions.css')}}">
<link rel="stylesheet" href="{{asset('web/assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('web/assets/css/rateit.css')}}">
<link rel="stylesheet" href="{{asset('web/assets/css/bootstrap-select.min.css')}}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{asset('web/assets/css/font-awesome.css')}}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">
  .main-header {
    background: white;
  }
  .main-header .navbar-default .navbar-collapse .navbar-nav > li > a {
    color: black;
  }
  .top-bar {
    background: #ec3237;
  }
  
  .breadcrumb-item a{
    color:#ec3237;
  }
  .navbar-default .navbar-nav>.active>a{
    color: #ec3237 !important;
    background-color: white;
  }
  .dropdown:hover .dropdown-menu{
    display: block;
    margin-top: 0;
  }
  .yamm .dropdown{
    position: relative;
  }

  .navbar-toggle .icon-bar {
    background-color: #ec3237 !important;
  }


  @media only screen and (max-width: 600px) {
  .navmenu {
    margin-top: -16%;
  }

}

@media only screen and (max-width: 767px){


.navbar-default .navbar-nav>.open>a {
    color: black !important;
}
.navbar-nav .open a {
  color: black !important;
}
}
  @media only screen and (max-width: 400px) {
  .navmenu {
    margin-top: -18%;
  }
}



 
    @media only screen and (max-width: 340px) {
  .navmenu {
    margin-top: -20%;
  }
}


.bg-img {
  background-position: right bottom;
}

.coupon_s .owl-item {
  width: 380px !important;
}

</style>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <?php
              // if (Cookie::get('region_id') == null){
              //   $region = App\Models\Coupon::select('location_id')->where('used','=',0)->first();
              //   Cookie::queue('region_id', $region->location_id);
              // }

              // if (Cookie::get('currency') == null){
              //   Cookie::queue('currency', 'USD');
              // }
            ?>  
            
            @if (Auth::user())
              <li><a href="{{url('/home')}}"><i class="fa fa-user"></i>&nbsp; My Account</a></li>
            @else
              <li><a href="{{url('login')}}"><i class="fa fa-lock"></i>&nbsp;Login</a></li>
            @endif
            <!-- <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
            <li><a href="sign-in.html"><i class="icon fa fa-lock"></i>Become a Vendor</a></li> -->
          </ul>
        </div>
        <!-- /.cnt-account -->
        <?PHP
          $currencies = App\Models\Currency::All();
        ?>
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">
          {{ Cookie::get('currency') }}  </span><b class="caret"></b></a>
              @if(count($currencies) > 0)
              <ul class="dropdown-menu">
                @foreach($currencies as $currency)
                  <li><a href="{{url('/setcurrency',$currency->currency_code)}}">{{$currency->currency_code}}</a></li>
                @endforeach

              </ul>
              @endif
            </li>
            <!-- <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li> -->
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-lg-2 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{ url('/') }}"> <img src="{{asset('assets/img/swiz_small.png')}}" alt="logo" width="130px"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-lg-5 col-md-4 col-sm-5 col-xs-12 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <!-- <div class="search-area"> -->
            <!-- <form>
              <div class="control-group">
                  <input class="search-field" placeholder="Search here..." />
                <a class="search-button" href="#" ></a> </div>
            </form> -->
          <!-- </div> -->
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        <?php
        $type= 'admin?';                      
        ?>  
        
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 navmenu" style="float: right !important;"> 
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
              <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                  <span class="sr-only">Toggle navigation</span> 
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span> 
              </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                @if (Auth::user())
                  <li class="@yield('home_select')"><a href="{{ route('home') }}">Home</a></li>
                  <li class="dropdown @yield('wallet_select')"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Wallet</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a href="{{ route('payment.create') }}">Deposit</a></li>
                                <li><a href="{{route('withdraw.create') }}">Withdraw</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown @yield('Tokenwallet_select')"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Token Wallet</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a href="{{ route('token_wallet.index') }}">Token Wallet</a></li>
                                <li><a href="{{route('token_wallet.create') }}">Withdraw Request</a></li>
                                <li><a href="{{ route('stake_tokens.index') }}">Stake Tokens</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown @yield('coupon_select')"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Coupons</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a href="{{ route('coupon_purchase.index')}}">Coupon Purchase</a></li>
                                <li><a href="{{ route('my_coupons.index') }}">My Coupons</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="@yield('referal_select')"><a href="{{ route('user.index') }}">My Referrals</a></li>
                  <li class="@yield('tokenpur_select')"><a href="{{ route('token_purchase.index') }}">Token Purchase</a></li>
                  <li class="@yield('history_select')"><a href="{{ route('payment.index') }}">History</a></li>
                  <li class="dropdown @yield('user_select')"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                @if(Auth::user()->$type)
                                  <li><a href="{{ route('admin_kyc.index') }}">KYC</a></li>
                                  @elseif(Auth::user()->kyc_approved != 1)
                                   <li> <a href="{{ route('kyc.index') }}">KYC</a>
                                  </li>
                                @endif
                                @if(Auth::user()->merchant != 1)  
                                  <li><a href="{{ url('/merchant_request') }}">Merchant Request</a></li>
                                @endif 
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a></li> 
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                @else
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/about')}}">About</a></li>
                  <li><a href="#">Coupons</a></li>
                  <li><a href="{{url('/faq')}}">FAQ</a></li>
                  <li><a href="{{url('/terms')}}">Terms</a></li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                @endif


               <!--  <li class="dropdown"> <a href="#"  class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Deals</a> 
                 <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="deals-grid.html">Grid/List View</a></li>
                              <li><a href="deals-detail.html">Deal Detail</a></li>
                              </ul>
                              </div>
                              </div>
                              </div>
                              </li>
                              </ul>
                
                </li> -->
               <!--  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Coupons</a> 
                <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="coupons.html">Coupons Grid</a></li>
                              <li><a href="coupons-sidebar.html">Grid Sidebar</a></li>
                              </ul>
                              </div>
                              </div>
                              </div>
                              </li>
                              </ul>
                </li> -->
               <!--  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Stores</a> 
                <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="stores.html">Stores Grid</a></li>
                              <li><a href="store-detail.html">Store Details</a></li>
                              </ul>
                              </div>
                              </div>
                              </div>
                              </li>
                              </ul>
                </li> -->
                <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="home.html">Home</a></li>
                              <li><a href="deals-grid.html">Shop</a></li>
                                 <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                              <li><a href="checkout.html">Checkout</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="blog-details.html">Blog Detail</a></li>
                              <li><a href="contact.html">Contact</a></li>
                              <li><a href="sign-in.html">Sign In</a></li>
                              <li><a href="my-wishlist.html">Wishlist</a></li>
                              <li><a href="terms-conditions.html">Terms and Condition</a></li>
                              <li><a href="track-orders.html">Track Orders</a></li>
                              <li><a href="product-comparison.html">Product-Comparison</a></li>
                              <li><a href="faq.html">FAQ</a></li>
                              <li><a href="404.html">404</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li> -->
            
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
     
    </div>
    <!-- /.container-class --> 
    

        
        </div>
    
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
 
  
</header>

<!-- ============================================== HEADER : END ============================================== --> 
<?php
    $path = \Request::route()->getName();
    $cls="";
    if($path == 'welcome')
    {
        $cls="outer-top-ts";
    }
?>
<div class="body-content {{$cls}}" id="top-banner-and-menu">
 


@include('include.messages')
@yield('content')








   


    <!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <div class="module-heading">
            <h4 class="module-title">Help and Support</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="Contact us">Term of Use</a></li>
              <li><a href="#" title="About us">Search Terms</a></li>
              <li><a href="#" title="faq">Store Location</a></li>
              <li><a href="#" title="Popular Searches">Orders and Returns</a></li>
              <li class="last"><a href="#" title="Where is my order?">Deliveries</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <div class="module-heading">
            <h4 class="module-title">Customer Service</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="Contact us">My Account</a></li>
              <li><a href="#" title="About us">Order History</a></li>
              <li><a href="#" title="faq">FAQ</a></li>
              <li><a href="#" title="Popular Searches">Specials</a></li>
              <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <div class="module-heading">
            <h4 class="module-title">Corporation</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a title="Your Account" href="#">About us</a></li>
              <li><a title="Information" href="#">Customer Service</a></li>
              <li><a title="Addresses" href="#">Company</a></li>
              <li><a title="Addresses" href="#">Investor Relations</a></li>
              <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <div class="module-heading">
            <h4 class="module-title">Why Choose Us</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
              <li><a href="#" title="Blog">Blog</a></li>
              <li><a href="#" title="Company">Company</a></li>
              <li><a href="#" title="Investor Relations">Investor Relations</a></li>
              <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
      </div>
    </div>
  </div>
 <!--  <div class="copyright-bar white-bg">
    <div class="container">
      <div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 del-info">
        We have our very own fleet of delivery vans. Your order will be packed with care at our warehouse and delivered right to your door by our friendly DealDots team.
      </div>
      
      <div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 no-padding">
        <div class="clearfix payment-methods">
          <ul>
            <li><img src="{{asset('web/assets/images/payments/1.png')}}" alt=""></li>
            <li><img src="{{asset('web/assets/images/payments/2.png')}}" alt=""></li>
            <li><img src="{{asset('web/assets/images/payments/3.png')}}" alt=""></li>
            <li><img src="{{asset('web/assets/images/payments/4.png')}}" alt=""></li>
           
          </ul>
        </div>
      -->
        <!-- /.payment-methods --> 
      </div>
    </div>
  </div> 
  <div class="copyright-bar">
    <div class="container">
      <div class="col-xs-12 col-sm-12 no-padding social">
        <ul class="link">
          <li class="fb"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
          <li class="tw"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
          <li class="googleplus"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
          <li class="rss"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
          <li class="pintrest"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
          <li class="linkedin"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
          <li class="youtube"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 no-padding copyright">&copy; {{date("Y")}} Swiz. All Rights Reserved. </div>
      
    </div>
  </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= --> 
  
      <!-- /.homebanner-holder --> 
      

 
    <!-- /.row --> 
   

</div>
<!-- /#top-banner-and-menu --> 

 



<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{asset('web/assets/js/jquery-1.11.1.min.js')}}"></script> 
<script src="{{asset('web/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('web/assets/js/bootstrap-hover-dropdown.min.js')}}')}}"></script> 
<script src="{{asset('web/assets/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('web/assets/js/echo.min.js')}}"></script> 
<script src="{{asset('web/assets/js/jquery.easing-1.3.min.js')}}"></script> 
<script src="{{asset('web/assets/js/bootstrap-slider.min.js')}}"></script> 
<script src="{{asset('web/assets/js/jquery.rateit.min.js')}}"></script> 
<script src="{{asset('web/assets/js/lightbox.min.js')}}"></script> 
<script src="{{asset('web/assets/js/bootstrap-select.min.js')}}"></script> 
<script src="{{asset('web/assets/js/wow.min.js')}}"></script> 
<script src="{{asset('web/assets/js/scripts.js')}}"></script>
<script src="{{asset('web/assets/js/countdown.js')}}"></script> 
<script>
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
</body>
</html>