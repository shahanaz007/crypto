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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Token Withdraw Request') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('token_wallet.store')}}" method="POST"> 
                    @csrf
                        <div class="card-body row">

                            <div class="col-md-6">
                                <label>Amount</label>
                                <input type="number" step="any" class="form-control"  id="amount"  name="amount"  required="">
                            </div>

                            <div class="col-md-6">
                                <label>Select Currency</label>
                                <select class="form-control" name="currency" id="currency" required="">
                                    <option value="token">Token</option>
                                    <option value="usdt">USDT</option>
                                </select>
                            </div>


                            <div class="col-md-6 to_hide">
                                <label>To Address</label>
                            <input type="text" class="form-control"   name="address" required="">
                            </div>

                            <div class="col-md-6 to_hide" >
                                <label> </label>
                            <input type="submit" class="form-control btn btn-info" value="Request Withdraw">
                            </div>

                            <div class="col-md-12 to_hide" style="display: none;">
                                <label class="form-control" style="color: blue;">Please wait.. it may take a few seconds to load the Rates</label>
                            
                            </div>
                        </div>  
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection