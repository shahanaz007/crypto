@extends('layouts.default')
@section('content')
<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Token Wallet') }}</div>
        <div class="card-body">
          <h5 class="card-title float-right ">Total Tokens: {{$token_balance}} </h5>
          <h5 class="card-title float-right " style="margin-right: 40px;">Total Usdt: {{$usdt_balance}}</h5>
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