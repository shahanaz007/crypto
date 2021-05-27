@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>Available Tokens <br>
                        <h3>{{ Auth::user()->available_tokens }}</h3>

                        <button class="btn btn-info" onclick="$('#buy_tokens').toggle()"> <i class="fa fa-shopping-cart"> </i> Buy Tokens</button>
                    </center>


                </div>
            </div>
        </div>
    </div>
</div>



<div class="container" id="buy_tokens" style="display: none;padding-top: 5%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Buy Tokens') }}

                </div>



                <form action="{{url('create_order')}}" method="POST"> 
                    @csrf
                <div class="card-body row">
                   
                  
                    <div class="col-md-6">
                        <center>
                           <input class="form-control" type="number" name="tokens" id="" required> 
                        </center>
                    </div>

                    <div class="col-md-6">
                        <button class="btn btn-success form-control"> Buy </button>
                    </div>

                

                </div>
                </form>


                <div class="card-body row">
                   
                   <div class="col-md-3 img_hover">
                        <center>
                            <img width="100px" src="{{asset('assets/img/bc_logo.png')}}">
                        </center>
                    </div>

                    <div class="col-md-3 img_hover">
                        <center>
                            <img width="100px" src="{{asset('assets/img/eth_logo.png')}}">
                        </center>
                    </div>

                    <div class="col-md-3 img_hover">
                        <center>
                            <img width="100px" src="{{asset('assets/img/usdt_logo.png')}}">
                        </center>
                    </div>

                    <div class="col-md-3 img_hover">
                        <center>
                            <img width="100px" src="{{asset('assets/img/tron_logo.png')}}">
                        </center>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
@endsection
