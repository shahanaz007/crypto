@extends('layouts.default')
@section('content')
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Token/Usdt') }}</div>
                <div class="card-body">
                    <form action="{{ route('add_tokens.store') }}" method="POST"> 
                    @csrf
                        <div class="card-body row">
                            <input type="hidden" name="user_id" value="{{$id}}">
                            <div class="col-md-6">
                                <label>Number of Tokens</label>
                                <input type="number" class="form-control" step="any" id="no_of_tokens_id" value="0"  name="no_of_tokens"  required="">
                            </div>
                            <div class="col-md-6">
                                <label>Select Coin</label>
                                <select class="form-control" name="coin" id="coin_id" onchange="" required="">
                                    <option value=""></option>
                                        <option value="token">Token</option>
                                        <option value="usdt">USDT</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Remark</label>
                                <input type="text" class="form-control"  id="remark_id"   name="remark"  required="">
                            </div>
                            <div class="col-md-6 to_hide" >
                                <label> </label>
                                <input type="submit" class="form-control btn btn-info" value="Purchase">
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