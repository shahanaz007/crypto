@extends('layouts.admin_default')

@section('content')
<div class="content-wrapper">
<section class="content">
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
                      <th>Action</th>
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
                              <a href="{{url('withdraw_request/change_status',$withdraw_request->id)}}">  <button class="btn btn-success">Completed</button></a>

                              <a href="{{url('withdraw_request/reject',$withdraw_request->id)}}">  <button class="btn btn-danger">_Rejected_</button></a>
                            @endif
                      </td>  
                   	</tr>
                   	<?php $slno++; ?>
                   		@endforeach
                        @else
                        <tr> 
                            <td colspan="8"><center> -- No New Requests -- </center></td>
                        </tr>
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
</section>
</div>
@endsection