@extends('layouts.web')
@section('content')
<section class="pt-130 pb-50" style="min-height:850px">
<div style="text-align: center;color:white;font-size:40px; padding-bottom: 20px;">
</div>
<div style="text-align: center;font-size:20px; padding-bottom: 20px;">
   Referral Link : <b><font id="ref_link">{{url('register').'/'.Auth::user()->myrefercode}} </font></b><i class="fa fa-copy"  style="cursor:pointer" onclick="ref_link()"> </i>
</div>
 
<div class="row col-md-12 justify-content-center" style="margin: auto;float: none;width:85%">
    <div class="col-3 col-md-3 col-xl-3 sign-in-page">
        <div class="box bg-dark box-body pull-up">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
             <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

             <!-- <img width="50px" src="{{asset('assets/img/user.png')}}"> -->
                
                <center><h3>Wallet Balance</h3></center>
                <center><h3>  $ {{Auth::user()->usd_balance()}}  </h3></center>
              <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
              
        </div>
            <!-- TradingView Widget END -->
        </div>          
    </div>
        <div class="col-3 col-md-3 col-xl-3 sign-in-page">
            <div class="box bg-dark box-body pull-up">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
                 <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

                 <!-- <img width="50px" src="{{asset('assets/img/user.png')}}"> -->
                    
                    <center><h3>Token Balance</h3></center>
                    <center><h3> {{Auth::user()->token_balance()}} </h3></center>
                  <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
                  
            </div>
                <!-- TradingView Widget END -->
            </div>          
        </div>
        <div class="col-3 col-md-3 col-xl-3 sign-in-page">
            <div class="box bg-dark box-body pull-up">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
                 <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

                 <!-- <img width="50px" src="{{asset('assets/img/user.png')}}"> -->
                    
                    <center><h3>Staked Tokens</h3></center>
                    <center><h3> {{Auth::user()->stake()}}  </h3></center>
                  <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
                  
            </div>
                <!-- TradingView Widget END -->
            </div>          
        </div>
        <div class="col-3 col-md-3 col-xl-3 sign-in-page">
            <div class="box bg-dark box-body pull-up">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
                 <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

                 <!-- <img width="50px" src="{{asset('assets/img/user.png')}}"> -->
                    
                    <center><h3>USDT Balance</h3></center>
                    <center><h3> {{Auth::user()->usdt_balance()}}  </h3></center>
                  <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
                  
            </div>
                <!-- TradingView Widget END -->
            </div>          
        </div>
   
</div>






</section>

<script type="text/javascript">
    function copyToClipboard(text) {
    var sampleTextarea = document.createElement("textarea");
    document.body.appendChild(sampleTextarea);
    sampleTextarea.value = text; //save main text in it
    sampleTextarea.select(); //select textarea contenrs
    document.execCommand("copy");
    document.body.removeChild(sampleTextarea);
}

    function ref_link()
    {
        var copyText = $('#ref_link').html();

         copyToClipboard(copyText);
    }
</script>
@endsection
