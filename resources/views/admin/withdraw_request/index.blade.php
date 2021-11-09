@extends('layouts.admin_default')

@section('content')
<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">{{ __('Withdraw Requests') }}</div>
                  <form  method="get" action="{{URL::to('/withdraw_request/index')}}">
                  @csrf 
                    <div class="float-right" >
                      <div class="input-group">
                        <div class="row">
                          <div class="col-md-4 pr-0">
                            <label>From Date</label>
                            <input type="date" name="from_date"  class="form-control" > 
                          </div>
                          <div class="col-md-4 pr-0">
                            <label>To Date</label>
                            <input type="date" name="to_date" class="form-control">
                          </div>
                          <div class="col-md-4 colbtn" style="margin-top: 40px;">
                            <button class="btn btn-success" type="submit">Search  <i class="mdi mdi-account-search menu-icon"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form> 
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
                   		<th>Date</th>
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
                   		<td>{{date('d-m-Y', strtotime($withdraw_request->created_at))}}</td>
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