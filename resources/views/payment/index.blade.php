@extends('layouts.app')

@section('content')

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

@endsection