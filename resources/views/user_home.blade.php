@extends('layouts.web')
@section('home_select','active')
@section('content')
<style type="text/css">
    .home .sign-in-page{
        box-shadow: 0px 0px 4px -1px;
        width: 23%;
        margin-right: 18px;
        padding-bottom: 0px;
    }

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  /*bottom: 0;*/
  /*right: 50%;*/
  top: 10%;
  left: 45%;
  float: none;
  border: 3px solid #f1f1f1;
  z-index: 9;
  box-shadow: 0px 0px 4px -1px;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  /*padding: 16px 20px;*/
  border: none;
  cursor: pointer;
  /*width: 100%;*/
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<section class="pt-130 pb-50" style="min-height:850px">
  <div style="text-align: center;color:white;font-size:40px; padding-bottom: 20px;"></div>
  <div style="text-align: center;font-size:20px; padding-bottom: 20px;">
    Referral Link : <b><font id="ref_link">{{url('register').'/'.Auth::user()->myrefercode}} </font></b><i class="fa fa-copy"  style="cursor:pointer" onclick="ref_link()"> </i>
  </div>
  <div class="row col-md-12 justify-content-center home" style="margin: auto;float: none;width:85%; margin-top: 20px;">
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
    <div class="form-popup" id="myForm">
      <div class="form-container">
        <center> 
          <form>
            <h4>Referral Link Copied.</h4>
            <button type="button" class="btn btn-warning" onclick="closeForm()">Close</button>
          </form>
        </center>
       </div>
    </div>
  </div>
  <section class="section coupons-section">
  <div class="container">
    <h3 class="section-title" style="text-align: center;">Latest Coupons</h3>
    <div class="coupons-deals">
      <div class="owl-carousel home-owl-carousel1 custom-carousel owl-theme outer-top-xs">
        @foreach($coupons as $coupon)
        <div class="item item-carousel">
          <div class="products">
            <div class="product">
              <div class="product-image">
                <div class="image"> 
                  <img class="img-responsive" src="{{$coupon->brand->logo}}" alt="">
                  <div class="brand">{{$coupon->brand->name}}</div>
                    <h3 class="name"><a href="#">{{$coupon->coupon_category->category_name}}</a></h3>
                </div>
                <!-- /.image -->
              </div>
              <!-- /.product-image -->
              <div class="product-info text-left">
                <div class="discount">{{$coupon->point}} <span>{{$coupon->Currency_code}}</span></div>
                <div class="show-code"><a href="{{route('coupon_purchase.show',$coupon->brand_id)}}" >Buy</a></div>
                  <p class="exp-date"><i class="fa fa-clock-o"></i> Expires on {{date('d-m-Y ', strtotime($coupon->expiry_date))}}</p>  
              </div>
            </div>
            <!-- /.product -->            
          </div>
          <!-- /.products --> 
        </div>
        <!-- /.item -->
        @endforeach
      </div>
    </div>
  </div>
  </section>
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
         openForm();
    }

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>
@endsection
