@extends('layouts.default')

@section('content')

<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('KYC Requests') }}</div>
        <div class="card-body">
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
                <th>User</th>
             		<th>Pan Card Number</th>
             		<th>Pan Card Image</th>
             		<th>Id Card Number</th>
                <th>Id Card Image</th>
             		<th>Status</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($kyc_requests) > 0) 
             		<?php $slno=1; ?>
             		@foreach($kyc_requests as $kyc_request)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$kyc_request->user->name}}</td>
                 		<td>{{$kyc_request->pancard_no}}</td>
                 		<td>
                      @if($kyc_request->pancard_img)
                        <a href="{{asset($kyc_request->pancard_img)}}" target="blank">
                        <img src="{{asset($kyc_request->pancard_img)}}" class="blogimg"></a>
                      @endif 
                    </td>
                 		<td>{{$kyc_request->idcard_no}}</td>
                    <td>
                      @if($kyc_request->idcard_img)
                        <a href="{{asset($kyc_request->idcard_img)}}" target="blank">
                        <img src="{{asset($kyc_request->idcard_img)}}" class="blogimg"></a>
                      @endif 
                    </td>
                 		<td>{{$kyc_request->status}}</td>
                    <td> @if($kyc_request->status == '0')
                            <a href="{{route('admin_kyc.show',$kyc_request->id)}}">  <button class="btn btn-success">View</button></a>

                            <a href="">  <button class="btn btn-success">Approve</button></a>

                            <a href="">  <button class="btn btn-danger">Reject</button></a>
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
            {!! $kyc_requests->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection