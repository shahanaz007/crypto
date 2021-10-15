@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Rewards Report') }}</div>
        <div class="card-body">
          <form  method="get" action="{{ route('rewards_report.index') }}">
            @csrf 
            <div class="float-right">
              <div class="input-group">
                <div class="row">
                  <div class="col-md-5">
                    <label>From Date</label>
                    <input type="date" name="from_date"  class="form-control" > 
                  </div>
                  <div class="col-md-5">
                    <label>To Date</label>
                    <input type="date" name="to_date" class="form-control">
                  </div>
                  <div class="col-md-2 " style="margin-top: 31px;">
                    <button class="btn btn-success" type="submit">Search  <i class="mdi mdi-account-search menu-icon"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form> 
          <table class="table  table-striped">
           	<thead>
           		<tr>
           		<th>#</th>
              <th>User</th>
           		<th>Coin</th>
              <th>Amount</th>
              <th>Remarks</th>
              <th>Date</th>
           	</tr>
           	</thead>
           	<tbody>
           		@if(count($rewards) > 0) 
             		<?php $slno=1; ?>
             		@foreach($rewards as $reward)
               	<tr>
               		<td>{{$slno}}</td>
                  <td>{{$reward->user->name}}</td>
               		<td>{{$reward->coin}}</td>
               		<td>{{$reward->amount}}</td>
                  <td>{{$reward->remarks}}</td>
               		<td>{{date('d-m-Y', strtotime($reward->date))}}</td>
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
            {!! $rewards->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection