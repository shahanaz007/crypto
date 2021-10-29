@extends('layouts.user_layout')

@section('content')
<section class="bg-img pt-150" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">Payment History</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Payment History</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Payment History') }}</div>

                <div class="card-body">
                   
                   <table class="table  table-striped">
                   	<thead>
                   		<tr>
                   		<th>#</th>
                   		<th>Txn Id</th>
                   		<th>Coin</th>
                   		<th>Amount</th>
                   		<th>Recieved Amount</th>
                   		<th>Status</th>
                        <th></th>
                   	</tr>
                   	</thead>
                   	<tbody>
                   		@if(count($payments) > 0) 
                   		<?php $cnt=1; ?>
                   		@foreach($payments as $payment)
                   	<tr>
                   		<td>{{$cnt}}</td>
                   		<td>{{$payment->txn_id}}</td>
                   		<td>{{$payment->coin}}</td>
                   		<td>{{$payment->amountf}}</td>
                   		<td>{{$payment->receivedf}}</td>
                   		<td>{{$payment->status_text}}</td>
                        <td>
                            @if($payment->status == '0')
                              <a href="{{url('check_for_update',$payment->txn_id)}}">  <button class="btn btn-info">Check For Update</button></a>
                            @endif
                        </td>
                   	</tr>
                   	<?php $cnt++; ?>
                   		@endforeach
                   		@endif
                   	</tbody>

                   </table>
                   <div class="d-flex justify-content-center">
                   {!! $payments->links("pagination::bootstrap-4") !!}
                   <?php //echo $payments->render(); ?>
               </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection