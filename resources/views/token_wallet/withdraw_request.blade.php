@extends('layouts.default')

@section('content')

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