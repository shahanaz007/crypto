<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="index.html">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>Crypto </b>Admin</span>
			</a>
		</div>
        <div class="image">
          <img src="{{asset('assets/back-end/images/user2-160x160.jpg')}}" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p>Admin Template</p>
			<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="active">
          <a href="{{url('admin_dashboard')}}">
            <i class="icon-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('users.index') }}">
            <i class="icon-refresh"></i> <span>{{ __('Users') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
         <li>
          <a href="{{URL::to('/withdraw_request/index')}}">
            <i class="icon-refresh"></i> <span>{{ __('Withdraw Request') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('add_tokens.index') }}">
            <i class="icon-refresh"></i> <span>{{ __('Token Withdraw Request') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="{{URL::to('/merchant_request/index')}}">
            <i class="icon-refresh"></i> <span>{{ __('Merchant Request') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('location.index') }}">
            <i class="icon-refresh"></i> <span>{{ __('Locations') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('brand.index') }}">
            <i class="icon-refresh"></i> <span>{{ __('Brands') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="{{URL::to('/coupon_category/index')}}">
            <i class="icon-refresh"></i> <span>{{ __('Coupon Category') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <!-- <li>
          <a href="{{URL::to('/admin_coupon/index')}}">
            <i class="icon-refresh"></i> <span>{{ __('Coupons') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/admin_coupon/index')}}">{{ __('Coupons') }}</a></li>
            <li><a href="{{route('purchase_pendings.index') }}">{{ __('Coupon Purchase Pending') }}</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('currency.index') }}">
            <i class="icon-refresh"></i> <span>{{ __('Currencies') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('purchase_report.index') }}">{{ __('Purchases') }}</a></li>
            <li><a href="{{route('referral_report.index') }}">{{ __('Referral') }}</a></li>
            <li><a href="{{ route('rewards_report.index') }}">{{ __('Rewards') }}</a></li>
            <!-- <li><a href="pages/reports/crypto-stats.html">Crypto Stats</a></li> -->
          </ul>
        </li>
          </ul>     
    </section>
  </aside>