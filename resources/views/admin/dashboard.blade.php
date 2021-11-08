
@extends('layouts.admin_default')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
		<div class="row">
			<div class="col-md-6 col-xl-3">
				<div class="box pull-up">
					<div class="box-body">
						<div class="row align-items-center">
							<div class="col-3">
								<i class="cc BTC font-size-30" title="BTC"></i>
							</div>
							<div class="col-6">
								<h4 class="counter text-dark text-center mb-0">BTC <small class="text-danger pl-10"><i class="mdi mdi-arrow-down text-danger"></i> {{$btc}}</small></h4>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="box pull-up">
					<div class="box-body">
						<div class="row align-items-center">
							<div class="col-3">
								<i class="cc ETH font-size-30" title="ETH"></i>
							</div>
							<div class="col-6">
								<h4 class="counter text-dark text-center mb-0">ETH <small class="text-success pl-10"><i class="mdi mdi-arrow-up text-success"></i> {{$eth}}</small></h4>
								
							</div>
							
							<!-- <div class="col-12">
								<div id="sparkline1" class="mt-10"></div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="box pull-up">
					<div class="box-body">
						<div class="row align-items-center">
							<div class="col-3">
								<i class="cc DASH font-size-30" title="TRX"></i>
							</div>
							<div class="col-6">
								<h4 class="counter text-dark text-center mb-0">TRX <small class="text-danger pl-10"><i class="mdi mdi-arrow-down text-danger"></i>{{$trx}}</small></h4>
								
							</div>
							<!-- <div class="col-3">
								<a href="#" class="btn btn-success btn-sm float-right">Buy</a>
							</div> -->
							<!-- <div class="col-12">
								<div id="sparkline2" class="mt-10"></div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="box pull-up">
					<div class="box-body">
						<div class="row align-items-center">
							<div class="col-3">
								<i class="cc LTC font-size-30" title="USDT"></i>
							</div>
							<div class="col-6">
								<h4 class="counter text-dark text-center mb-0">USDT.BEP2<small class="text-success pl-10"><i class="mdi mdi-arrow-up text-success"></i> {{$usdt}}</small></h4>
								
							</div>
							
							<!-- <div class="col-12">
								<div id="sparkline3" class="mt-10"></div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- <div class="box">
		  <div class="box-body tickers-block">
			  <ul id="webticker-1">
				<li><i class="cc BTC"></i> BTC <span class="text-yellow"> $11.039232</span></li> 
				<li><i class="cc ETH"></i> ETH <span class="text-yellow"> $1.2792</span></li> 
				<li><i class="cc GAME"></i> GAME <span class="text-yellow"> $11.039232</span></li> 
				<li><i class="cc LBC"></i> LBC <span class="text-yellow"> $0.588418</span></li> 
				<li><i class="cc NEO"></i> NEO <span class="text-yellow"> $161.511</span></li> 
				<li><i class="cc STEEM"></i> STE <span class="text-yellow"> $0.551955</span></li> 
				<li><i class="cc LTC"></i> LIT <span class="text-yellow"> $177.80</span></li> 
				<li><i class="cc NOTE"></i> NOTE <span class="text-yellow"> $13.399</span></li>
				<li><i class="cc MINT"></i> MINT <span class="text-yellow"> $0.880694</span></li> 
				<li><i class="cc IOTA"></i> IOT <span class="text-yellow"> $2.555</span></li> 
				<li><i class="cc DASH"></i> DAS <span class="text-yellow"> $769.22</span></li>   
			  </ul>
		  </div>
		</div>
 -->
	</section>
    <!-- /.content -->
  </div>

  @endsection