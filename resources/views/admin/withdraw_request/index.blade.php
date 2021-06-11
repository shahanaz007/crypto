@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Withdraw Requests') }}</div>

                <div class="card-body">
                   
                   <table class="table  table-striped">
                   	<thead>
                   		<tr>
                   		<th>#</th>
                      <th>User</th>
                   		<th>Withdraw Id</th>
                   		<th>Amount</th>
                   		<th>Currency Code</th>
                      <th>Address</th>
                   		<th>Status</th>
                      <th></th>
                   	</tr>
                   	</thead>
                   	<tbody>
                   		@if(count($withdraw_requests) > 0) 
                   		<?php $slno=1; ?>
                   		@foreach($withdraw_requests as $withdraw_request)
                   	<tr>
                   		<td>{{$slno}}</td>
                      <td>{{$withdraw_request->user->name}}</td>
                   		<td>{{$withdraw_request->w_id}}</td>
                   		<td>{{$withdraw_request->amount}}</td>
                   		<td>{{$withdraw_request->currency_code}}</td>
                   		<td>{{$withdraw_request->address}}</td>
                   		<td>{{$withdraw_request->status}}</td>
                      <td> @if($withdraw_request->status == '0')
                              <a href="{{url('withdraw_request/change_status',$withdraw_request->id)}}">  <button class="btn btn-info">Update</button></a>
                            @endif
                      </td>  
                   	</tr>
                   	<?php $slno++; ?>
                   		@endforeach
                   		@endif
                   	</tbody>

                   </table>
                   <div class="d-flex justify-content-center">
                   {!! $withdraw_requests->links("pagination::bootstrap-4") !!}
                   <?php //echo $payments->render(); ?>
               </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection