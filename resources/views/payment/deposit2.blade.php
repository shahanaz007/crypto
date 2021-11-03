@extends('layouts.web')

@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">                       
                        <h2 class="page-title text-white">Deposit</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Deposit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 sign-in-page" style="margin: auto;float: none;">
            <div class="card">
                <!-- <div class="card-header">{{ __('Deposit') }}</div> -->

                <div class="card-body">
                   
                   
                  <center> 
                    Status : <span>{{$transaction->status_text}}</span><br>
                    <img src = "{{$transaction->qrcode_url}}"> <br>
                    <span class="info">Send To Address: <b>{{$transaction->address}}</b></span>
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