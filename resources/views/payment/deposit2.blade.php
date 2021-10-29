@extends('layouts.user_layout')

@section('content')
<section class="bg-img pt-150" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <!-- <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">                       
                        <h2 class="page-title text-white">Buy And Sell</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Buy and Sell</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Deposit') }}</div>

                <div class="card-body">
                   
                   
                  <center> 
                    Status : <span>{{$transaction->status_text}}</span><br>
                    <img src = "{{$transaction->qrcode_url}}"> <br>
                    <span class="info">Send To Address: {{$transaction->address}}</span>
                    <hr>
                     <span class="info">Payment Id: {{$transaction->txn_id}}</span>
                     <hr>
                  </center>
                  <div id="example"></div>
         <div class="row justify-content-center">   
            <div class="col-md-6">
            <center>
                Amount to Recieve : <span>{{$transaction->amountf.$transaction->currency_code}}</span>
            </center>
            </div>

            <div class="col-md-6">
            <center>
                Amount Recieved : <span>{{$transaction->receivedf}}</span>{{$transaction->currency_code}}
            </center>
            </div> 
        </div>     

        <hr>

        <div class="row">
            <div class="col-md-6">
                <center>
                    <a href="{{url('check_for_status',$transaction->txn_id)}}">  <button class="btn btn-info">Check For Update</button></a>
                </center>
            </div>

            <div class="col-md-6">
                <center>
                    <a href="{{url('/home')}}"><button class="btn btn-info">Finish</button></a> 
                </center>
            </div>
        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script type="text/javascript"></script>
@endsection