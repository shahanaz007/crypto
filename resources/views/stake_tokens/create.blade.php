@extends('layouts.web')
@section('Tokenwallet_select','active')
@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">                       
                        <h2 class="page-title text-white">Stake Token</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Token Wallet</li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Stake Token</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 sign-in-page" style="margin: auto;float: none;">
            <div class="card">
                <div class="card-header">{{ __('Stake Token') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('stake_tokens.store')}}" method="POST"> 
                    @csrf
                        <div class="card-body row">

                            <div class="col-md-6">
                                <label>Number of Tokens</label>
                                <input type="number" step="any" class="form-control"  id="no_of_tokens_id"  name="no_of_tokens"  required="">
                            </div>

                            <div class="col-md-6 to_hide" >
                                <label> </label>
                            <input type="submit" class="form-control btn btn-info" value="Stake Tokens">
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