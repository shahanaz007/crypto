@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Referral Report') }}</div>
        <div class="card-body">
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

@endsection