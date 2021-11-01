@extends('layouts.default')

@section('content')
<section class="pt-130 pb-50" style="min-height:850px">
<div style="text-align: center;color:white;font-size:40px; padding-bottom: 20px;">
</div>
<div style="text-align: center;color:white;font-size:20px; padding-bottom: 20px;">
    {{url('register').'/'.Auth::user()->myrefercode}} <i class="fa fa-copy"> </i>
</div>
 
<div class="row col-md-12 justify-content-center" style="margin: auto;width:85%">
    <div class="col-3 col-md-6 col-xl-3">
        <div class="box bg-dark box-body pull-up">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
             <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

             <!-- <img width="50px" src="{{asset('assets/img/user.png')}}"> -->
                
                <center><h3>Wallet Balance</h3></center>
                <center><h4>  $ {{Auth::user()->usd_balance()}}  </h4></center>
              <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
              
        </div>
            <!-- TradingView Widget END -->
        </div>          
    </div>
        <div class="col-3 col-md-6 col-xl-3">
            <div class="box bg-dark box-body pull-up">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
                 <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

                 <!-- <img width="50px" src="{{asset('assets/img/user.png')}}"> -->
                    
                    <center><h3>Token Balance</h3></center>
                    <center><h4> {{Auth::user()->token_balance()}} </h4></center>
                  <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
                  
            </div>
                <!-- TradingView Widget END -->
            </div>          
        </div>
        <div class="col-3 col-md-6 col-xl-3">
            <div class="box bg-dark box-body pull-up">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
                 <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

                 <!-- <img width="50px" src="{{asset('assets/img/user.png')}}"> -->
                    
                    <center><h3>Staked Tokens</h3></center>
                    <center><h4> {{Auth::user()->stake()}}  </h4></center>
                  <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
                  
            </div>
                <!-- TradingView Widget END -->
            </div>          
        </div>
        <div class="col-3 col-md-6 col-xl-3">
            <div class="box bg-dark box-body pull-up">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
                 <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

                 <!-- <img width="50px" src="{{asset('assets/img/user.png')}}"> -->
                    
                    <center><h3>USDT Balance</h3></center>
                    <center><h4> {{Auth::user()->usdt_balance()}}  </h4></center>
                  <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
                  
            </div>
                <!-- TradingView Widget END -->
            </div>          
        </div>
   
</div>






</section>
@endsection
