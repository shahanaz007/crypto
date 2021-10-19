
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
								<h4 class="counter text-dark text-center mb-0">$ 12458 <small class="text-danger pl-10"><i class="mdi mdi-arrow-down text-danger"></i> -7.45%</small></h4>
								
							</div>
							<div class="col-3">
								<a href="#" class="btn btn-success btn-sm float-right">Buy</a>
							</div>
							<div class="col-12">
								<div id="sparkline0" class="mt-10"></div>
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
								<h4 class="counter text-dark text-center mb-0">$ 845 <small class="text-success pl-10"><i class="mdi mdi-arrow-up text-success"></i> +5.45%</small></h4>
								
							</div>
							<div class="col-3">
								<a href="#" class="btn btn-danger btn-sm float-right">Sell</a>
							</div>
							<div class="col-12">
								<div id="sparkline1" class="mt-10"></div>
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
								<i class="cc DASH font-size-30" title="DASH"></i>
							</div>
							<div class="col-6">
								<h4 class="counter text-dark text-center mb-0">$ 4587 <small class="text-danger pl-10"><i class="mdi mdi-arrow-down text-danger"></i> -4.45%</small></h4>
								
							</div>
							<div class="col-3">
								<a href="#" class="btn btn-success btn-sm float-right">Buy</a>
							</div>
							<div class="col-12">
								<div id="sparkline2" class="mt-10"></div>
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
								<i class="cc LTC font-size-30" title="LTC"></i>
							</div>
							<div class="col-6">
								<h4 class="counter text-dark text-center mb-0">$ 1458 <small class="text-success pl-10"><i class="mdi mdi-arrow-up text-success"></i> +5.45%</small></h4>
								
							</div>
							<div class="col-3">
								<a href="#" class="btn btn-danger btn-sm float-right">Sell</a>
							</div>
							<div class="col-12">
								<div id="sparkline3" class="mt-10"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="box">
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
      
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Bitcoin Exchange ETH/BTC</h4>
						<ul class="box-controls pull-right">
						  <li><a class="box-btn-close" href="#"></a></li>
						  <li><a class="box-btn-slide" href="#"></a></li>	
						  <li><a class="box-btn-fullscreen" href="#"></a></li>
						</ul>
					</div>
					<div class="box-body">
						<div class="chart">
							<div id="chartdiv1" style="height: 500px;"></div>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="row">
					<div class="col-lg-6 col-12">
					  <!-- Chart -->
					  <div class="box">
						<div class="box-body">
						  <div class="chart">
							<div id="chartdiv3" class="" style="height:192px;"></div>	
						  </div>
						</div>
						<!-- /.box-body -->
					  </div>
					  <!-- /.box -->			
					</div>
					<div class="col-lg-6 col-12">
					  <a class="box box-link-pop text-center" href="javascript:void(0)">
						<div class="box-body">
							<p class="font-size-40 text-pink">
								<i class="fa fa-money text-muted mr-5 mb-20"></i><br>
								<strong>987€</strong>
							</p>
						</div>
						<div class="box-body py-25 bg-light">
							<h3 class="font-weight-600 mt-0">
								Balance
							</h3>
						</div>
					 </a>			
					</div>
					<div class="col-12">
					  <div class="box">
						<div class="box-body">
						  <div class="chart">
							<div id="chartdiv4" class="" style="height:315px;"></div>	
						  </div>
						</div>
						<!-- /.box-body -->
					  </div>
					  <!-- /.box -->			
					</div>		
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="box">
				  <div class="media bb-1 border-fade">
					<img class="avatar avatar-lg" src="{{asset('assets/back-end/images/avatar/3.jpg')}}" alt="...">
					<div class="media-body">
					  <p>
						<strong>Denial Webar</strong>
						<time class="float-right text-lighter" datetime="2017">24 min ago</time>
					  </p>
					  <p><small>Designer</small></p>
					</div>
				  </div>
				  <div id="scroll-1">
					  <div class="box-body bb-1 border-fade">
						<p class="lead">Authoritatively syndicate goal-oriented leadership skills for clicks-and-mortar outsourcing. Synergistically reconceptualize enabled catalysts for change.</p>

						<div class="gap-items-4 mt-10">
						  <a class="text-lighter hover-light" href="#">
							<i class="fa fa-thumbs-up mr-1"></i> 1254
						  </a>
						  <a class="text-lighter hover-light" href="#">
							<i class="fa fa-comment mr-1"></i> 25
						  </a>
						  <a class="text-lighter hover-light" href="#">
							<i class="fa fa-share-alt mr-1"></i> 12
						  </a>
						</div>
					  </div>

					  <div class="media-list media-list-divided bg-lighter">
						<div class="media">
						  <a class="avatar" href="#">
							<img src="{{asset('assets/back-end/images/avatar/6.jpg')}}" alt="...">
						  </a>
						  <div class="media-body">
							<p>
							  <a href="#"><strong>Rock Tele</strong></a>
							  <time class="float-right text-fade" datetime="2017-07-14 20:00">Just now</time>
							</p>
							<p>Uniquely enhance world-class channels with just in time schemas.</p>

							<div class="media px-0 mt-20">
							  <a class="avatar" href="#">
								<img src="{{asset('assets/back-end/images/avatar/8.jpg')}}" alt="...">
							  </a>
							  <div class="media-body">
								<p>
								  <a href="#"><strong>Brock Lensar</strong></a>
								  <time class="float-right text-fade" datetime="2017-07-14 20:00">26 mins ago</time>
								</p>
								<p>Thank you for your nice comment.</p>
							  </div>
							</div>

						  </div>
						</div>

						<div class="media">
						  <a class="avatar" href="#">
							<img src="{{asset('assets/back-end/images/avatar/9.jpg')}}" alt="...">
						  </a>
						  <div class="media-body">
							<p>
							  <a href="#"><strong>Tony Stark</strong></a>
							  <time class="float-right text-fade" datetime="2017-07-14 20:00">2 hours ago</time>
							</p>
							<p>Continually drive user friendly solutions through performance based infomediaries.</p>
						  </div>
						</div>
					  </div>
				  </div>
					  <form class="publisher bt-1 border-fade bg-white">
						<img class="avatar avatar-sm" src="{{asset('assets/back-end/images/avatar/4.jpg')}}" alt="...">
						<input class="publisher-input" type="text" placeholder="Add Your Comment">
						<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
						<span class="publisher-btn file-group">
						  <i class="fa fa-camera file-browser"></i>
						  <input type="file">
						</span>
					  </form>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="box">
				  <div class="media bb-1 border-fade">
					<img class="avatar avatar-lg" src="{{asset('assets/back-end/images/avatar/5.jpg')}}" alt="...">
					<div class="media-body">
					  <p>
						<strong>Ronit Roy</strong>
						<time class="float-right text-lighter" datetime="2017">24 min ago</time>
					  </p>
					  <p><small>Designer</small></p>
					</div>
				  </div>				  
			      <div id="scroll-2">
					  <div class="box-body">
						<p>Best memory from the beach...</p>
					  </div>

					  <div class="row gap-1" data-provide="photoswipe">
						<a class="col-6" href="#">
						  <img src="{{asset('assets/back-end/images/gallery/thumb/12.jpg')}}" alt="...">
						</a>

						<a class="col-6" href="#">
						  <img src="{{asset('assets/back-end/images/gallery/thumb/10.jpg')}}" alt="...">
						</a>
					  </div>

					  <div class="box-body py-12">
						<div class="gap-items-4">
						  <a class="text-lighter hover-light" href="#">
							<i class="fa fa-thumbs-up mr-1"></i> 541
						  </a>
						  <a class="text-lighter hover-light" href="#">
							<i class="fa fa-comment mr-1"></i> 254
						  </a>
						  <a class="text-lighter hover-light" href="#">
							<i class="fa fa-share-alt mr-1"></i> 30
						  </a>
						</div>
					  </div>

					  <div class="media-list media-list-divided bg-lighter">
						<div class="media">
						  <a class="avatar" href="#">
							<img src="{{asset('assets/back-end/images/avatar/7.jpg')}}" alt="...">
						  </a>
						  <div class="media-body">
							<p>
							  <a href="#"><strong>Tony stark</strong></a>
							  <time class="float-right text-fade" datetime="2017-07-14 20:00">25 Jan</time>
							</p>
							<p>Continually drive user friendly solutions through performance based infomediaries.</p>
						  </div>
						</div>
					  </div>
				  </div>

					  <form class="publisher bg-transparent bt-1 border-fade">
						<img class="avatar avatar-sm" src="{{asset('assets/back-end/images/avatar/5.jpg')}}" alt="...">
						<input class="publisher-input" type="text" placeholder="Add Comment">
						<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
						<span class="publisher-btn file-group">
						  <i class="fa fa-camera file-browser"></i>
						  <input type="file">
						</span>
					  </form>
				</div>
			  </div>
		</div>
		<div class="row">
			
			<div class="col-lg-4 col-12">
			  <!-- Chart -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Traffic Types</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
				  <div class="chart">
					<div id="e_chart_5" class="" style="height:500px;"></div>	
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			
		   <div class="col-lg-3 col-12">
			  <!-- Chart -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Daly Analysis</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
				  <div class="chart">
					<div id="e_chart_2" class="" style="height:500px;"></div>	
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
		   </div>
		  <div class="col-lg-5 col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Market Depth</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
					<div class="chart">
						<div id="e_chart_3" style="height: 500px;"></div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
		  </div>			
			<div class="col-12 col-lg-3">
				<div class="box box-body pull-up bg-hexagons-dark">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a>
					</div>
					<div>
					  <h2 class="no-margin">Bitcoin BTC</h2>
					</div>
				  </div>
				  <div class="flexbox align-items-center mt-25">
					<div>
					  <p class="no-margin">2.340000434 <span class="text-gray">BTC</span> <span class="text-info">$0.04</span></p>
					</div>
					<div class="text-right">
					  <p class="no-margin"><span class="text-success">+5.35%</span></p>
					</div>
				  </div>
				</div>
			</div>
			<div class="col-12 col-lg-3">
				<div class="box box-body pull-up bg-hexagons-dark">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="cc LTC mr-5" title="LTC"></i></a>
					</div>
					<div>
					  <h2 class="no-margin">Litecoin LTC</h2>
					</div>
				  </div>
				  <div class="flexbox align-items-center mt-25">
					<div>
					  <p class="no-margin">1.34000434 <span class="text-gray">LTC</span> <span class="text-info">$0.14</span></p>
					</div>
					<div class="text-right">
					  <p class="no-margin"><span class="text-danger">-2.35%</span></p>
					</div>
				  </div>
				</div>	
			</div>
			<div class="col-12 col-lg-3">
				<div class="box box-body pull-up bg-hexagons-dark">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="cc NEO mr-5" title="NEO"></i></a>
					</div>
					<div>
					  <h2 class="no-margin">Neo NEO</h2>
					</div>
				  </div>
				  <div class="flexbox align-items-center mt-25">
					<div>
					  <p class="no-margin">0.30000434 <span class="text-gray">NEO</span> <span class="text-info">$5.04</span></p>
					</div>
					<div class="text-right">
					  <p class="no-margin"><span class="text-success">+4.35%</span></p>
					</div>
				  </div>
				</div>
			</div>
			<div class="col-12 col-lg-3">
				<div class="box box-body pull-up bg-hexagons-dark">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="cc DASH mr-5" title="DASH"></i></a>
					</div>
					<div>
					  <h2 class="no-margin">Dash DASH</h2>
					</div>
				  </div>
				  <div class="flexbox align-items-center mt-20">
					<div>
					  <p class="no-margin">0.34000434 <span class="text-gray">DASH</span> <span class="text-info">$0.54</span></p>
					</div>
					<div class="text-right">
					  <p class="no-margin"><span class="text-danger">-5.35%</span></p>
					</div>
				  </div>
				</div>	
           </div>
		  <div class="col-lg-4 col-12">         
			 <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Data Tables Markets</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-striped table-bordered no-margin">
						  <thead>
							 <tr class="bg-pale-dark">
								<th>Coin</th>
								<th>Price</th>
								<th>Change %</th>
							 </tr>
						  </thead>
						   <tbody>
							  <tr>
								 <td><p class="font-size-18 no-margin">BTC</p></td>
								 <td><p class="no-margin"><span>$</span> 11,723.40</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -15.20%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">ETH</p></td>
								 <td><p class="no-margin"><span>$</span> 1,070.39</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -11.74%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">XRP</p> </td>
								 <td><p class="no-margin"><span>$</span> 1.64</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -16.44%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">ADA</p></td>
								 <td><p class="no-margin"><span>$</span> 0.68</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -5.91%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">LTC</p></td>
								 <td><p class="no-margin"><span>$</span> 198.88</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -15.74%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">DASH</p></td>
								 <td><p class="no-margin"><span>$</span> 865.27</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -16.47%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">ETH</p></td>
								 <td><p class="no-margin"><span>$</span> 1,070.39</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -11.74%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">XRP</p> </td>
								 <td><p class="no-margin"><span>$</span> 1.64</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -16.44%</span></td>
							  </tr>
							</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->       
			</div>
			
		  <div class="col-lg-8 col-12">
			<div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Latest Transactions</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-bordered no-margin">
						  <thead>					
							<tr class="bg-pale-dark">
							  <th>Transaction Hash</th>
							  <th>BTC</th>
							  <th>Time</th>
							  <th>Miner Preference</th>
							  <th>Status</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  9d2c7b06bfa0
								</a>
								...
							  </td>
							  <td>1.2126281 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>medium</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  5de67415bfc6
								</a>
								...
							  </td>
							  <td>0.20522881 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-warning">Unconfirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  733de15b3cec
								</a>
								...
							  </td>
							  <td>2.02622033 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  6793bcfa4f7f
								</a>
								...
							  </td>
							  <td>2.43220578 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  2c66087936b5
								</a>
								...
							  </td>
							  <td>14.01099978 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  51935e53c294
								</a>
								...
							  </td>
							  <td>0.3024534 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-warning">Unconfirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  a3976b73cf5e
								</a>
								...
							  </td>
							  <td>0.20518486 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:59Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>medium</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  c6b59368635c
								</a>
								...
							  </td>
							  <td>42.99698306 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:58Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  a261fc1d717d
								</a>
								...
							  </td>
							  <td>1.0281818 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:58Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

		  </div> 
			
		</div>	
		
		
	</section>
    <!-- /.content -->
  </div>

  @endsection