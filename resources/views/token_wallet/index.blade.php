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
        <div class="card-header">{{ __('Token Wallet') }}</div>
        <div class="card-body">
          <h5 class="card-title float-right ">Total Tokens: {{$token_balance}} </h5>
          <h5 class="card-title float-right ">Total Usdt: {{$usdt_balance}}</h5>
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
           		@if(count($token_wallets) > 0) 
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
              @endif
           	</tbody>
          </table>
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