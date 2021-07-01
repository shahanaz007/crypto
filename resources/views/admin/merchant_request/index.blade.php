@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Merchant Requests') }}</div>
        <div class="card-body">
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
                <th>User</th>
             		<th>Company Name</th>
             		<th>Company Address</th>
             		<th>Company Email</th>
             		<th>Status</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($merchant_requests) > 0) 
             		<?php $slno=1; ?>
             		@foreach($merchant_requests as $merchant_request)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$merchant_request->user->name}}</td>
                 		<td>{{$merchant_request->company_name}}</td>
                 		<td>{{$merchant_request->company_address}}</td>
                 		<td>{{$merchant_request->company_email}}</td>
                 		<td>{{$merchant_request->status}}</td>
                    <td> @if($merchant_request->status == '0')
                            <a href="{{url('merchant_request/change_status',$merchant_request->id)}}">  <button class="btn btn-success">Approve</button></a>

                            <a href="{{url('merchant_request/reject',$merchant_request->id)}}">  <button class="btn btn-danger">_Reject_</button></a>
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
            {!! $merchant_requests->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection