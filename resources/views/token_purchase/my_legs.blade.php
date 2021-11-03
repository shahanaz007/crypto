@extends('layouts.web')

@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">                       
                        <h2 class="page-title text-white">Tokens</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tokens</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="pt-130 pb-50" style="min-height:850px">


 
<div class="row col-md-12 justify-content-center" style="margin: auto;width:85%">

    @if(count($datas) > 0)
    @foreach($datas as $data)
        <div class="col-3 col-md-6 col-xl-3">
                    <div class="box bg-dark box-body pull-up">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
                         <!--  <iframe scrolling="no" allowtransparency="true" frameborder="0"  style="box-sizing: border-box; height: calc(94px); width: 100%;"> 99999999</iframe> -->

                         <img width="50px" src="{{asset('assets/img/user.png')}}">
                            {{$data['name']}}
                            <center><h3> {{$data['business_volume']}} BV</h3></center>
                            <center><h6> milestone pending</h6></center>
                          <!-- <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div> -->
                          
                    </div>
                        <!-- TradingView Widget END -->
                    </div>          
                </div>
    @endforeach  
    @endif          

</div>






</section>
@endsection
