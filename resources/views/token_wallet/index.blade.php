@extends('layouts.web')
@section('Tokenwallet_select','active')
@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">Token Wallet</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Token Wallet</li>
              <li class="breadcrumb-item text-white active" aria-current="page">Wallet</li>
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

      <div class="card sign-in">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <h4 style="text-align: center; padding: 15px; box-shadow: 0px 0px 2px 0px;border-radius: 4px;">Total Tokens: {{$token_balance}} </h4>
            </div>
            <div class="col-md-6">
              <h4 style="text-align: center; padding: 15px; box-shadow: 0px 0px 2px 0px;border-radius: 4px;">Total USDT: {{$usdt_balance}} </h4>
            </div>
            </div>
          
        <div class="card-body">
          <!-- <h5 class="card-title ">Total Tokens: {{$token_balance}} </h5> -->
          <!-- <h5 class="card-title float-right ">Total USDT: {{$usdt_balance}}</h5> -->
        @if(count($token_wallets) > 0) 
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Coin</th>
                <th>Credit</th>
                <th>Debit</th>
           	  </tr>
           	</thead>
           	<tbody>
           		<?php $slno=1; ?>
           		@foreach($token_wallets as $token_wallet)
             	  <tr>
               		<td>{{$slno}}</td>
                  <td>{{$token_wallet->coin}}</td>
                  <td>{{$token_wallet->credit}}</td>
                  <td>{{$token_wallet->debit}}</td>
             	  </tr>
             	  <?php $slno++; ?>
           		@endforeach
           	</tbody>
          </table>
          @else
            <div style="text-align: center;">
              No Transactions Available
            </div>
        @endif
          <div class="d-flex justify-content-center">
            {!! $token_wallets->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection