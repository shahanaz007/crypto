@extends('layouts.admin_default')
@section('content')
<div class="content-wrapper">
<section class="content">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Referral Report') }}</div>
        <div class="card-body">
          <form  method="get" action="{{ route('referral_report.index') }}">
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
              <th>Referrer</th>
           		<th>Referee</th>
              <th>Join Date</th>
           	</tr>
           	</thead>
           	<tbody>
           		@if(count($referrals) > 0) 
             		<?php $slno=1; ?>
             		@foreach($referrals as $referral)
               	<tr>
               		<td>{{$slno}}</td>
                  <td>{{$referral->user_referrer->name}}</td>
               		<td>{{$referral->user_referee->name}}</td>
               		<td>{{date('d-m-Y', strtotime($referral->created_at))}}</td>
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
            {!! $referrals->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>

@endsection