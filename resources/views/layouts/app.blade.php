<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/crypto.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                                </li>

                            <?php
                                $type= 'admin?';
                                
                            ?>
                            @if(Auth::user()->$type)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}">{{ __('Users') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/withdraw_request/index')}}">{{ __('Withdraw Request') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/merchant_request/index')}}">{{ __('Merchant Request') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('location.index') }}">{{ __('Locations') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('brand.index') }}">{{ __('Brands') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/coupon_category/index')}}">{{ __('Coupon Category') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/admin_coupon/index')}}">{{ __('Coupons') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Reports
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('purchase_report.index') }}">{{ __('Purchases') }}</a>
                                        <a class="dropdown-item" href="{{route('referral_report.index') }}">
                                        {{ __('Referral') }}</a>
                                        <a class="dropdown-item" href="{{ route('rewards_report.index') }}">{{ __('Rewards') }}</a>               
                                    </div>
                                </li>

                            @else
                                    
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Wallet
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('payment.create') }}">{{ __('Deposit') }}</a>

                                    <a class="dropdown-item" href="{{route('withdraw.create') }}">
                                    {{ __('Withdraw') }}</a>

                                    <!-- <a class="dropdown-item" href="{{ route('transfer.create') }}">{{ __('Transfer') }}</a> -->

                                    <a class="dropdown-item" href="{{ route('coinaddress.index') }}">{{ __('Deposit Addresses') }}</a>

                                                                       
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Token Wallet
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{ route('token_wallet.index') }}">{{ __('Token Wallet') }}</a>

                                    <a class="nav-link" href="{{route('token_wallet.create') }}">
                                    {{ __('Withdraw Request') }}</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hotels.index') }}">{{ __('Hotels') }}</a>
                            </li>

                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('coinaddress.index') }}">{{ __('Addresses') }}</a>
                                </li> -->

                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('payment.create') }}">{{ __('Deposit') }}</a>
                                </li> -->




                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('payment.create') }}">{{ __('Deposit2') }}</a>
                                </li> -->

                               <!--  <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Deposit2
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('deposit/BTC') }}">
                                        {{ __('BTC') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('deposit/ETH') }}">
                                        {{ __('ETH') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('deposit/USDT.BEP2') }}">
                                        {{ __('USDT.BEP2') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('deposit/TRX') }}">
                                        {{ __('TRX') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('deposit/LTCT') }}">
                                        {{ __('LTCT') }}
                                    </a>

                                    
                                </div>
                            </li> -->


                               <!--  <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/convert') }}">{{ __('Convert Coin') }}</a>
                                </li> -->


                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('coupon_purchase.index') }}">{{ __('Coupon Purchase') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my_coupons.index') }}">{{ __('My Coupons') }}</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('token_purchase.index') }}">{{ __('Token Purchase') }}</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('transfer.create') }}">{{ __('Transfer') }}</a>
                            </li> -->


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('payment.index') }}">{{ __('History') }}</a>
                            </li>

                        @endif        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->$type)
                                        <a class="dropdown-item" href="{{ route('admin_kyc.index') }}">{{ __('KYC ') }}</a>
                                    @elseif(Auth::user()->kyc_approved != 1)
                                        <a class="dropdown-item" href="{{ route('kyc.index') }}">{{ __('KYC ') }}</a>
                                    @endif
                                    @if(Auth::user()->merchant != 1)
                                        <a class="dropdown-item" href="{{ url('/merchant_request') }}">{{ __('Merchant Request') }}</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                        

                        @if (session('status'))
                        <div class="container col-md-8 justify-content-center alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="container col-md-8 justify-content-center alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
