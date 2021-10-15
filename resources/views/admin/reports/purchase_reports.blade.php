@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Purchase Report') }}</div>
        <div class="card-body">
          <form  method="get" action="{{ route('purchase_report.index') }}">
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

                  <div class="col-md-4 pr-0" style="padding-top: 30px;">
                    <button class="btn btn-success" type="submit">Search  <i class="mdi mdi-account-search menu-icon"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form> 

          <table class="table  table-striped" style="margin-top:9%">
           	<thead>
           		<tr>
           		<th>#</th>
              <th>User</th>
           		<th>Number of Tokens</th>
           		<th>Coin</th>
              <th>Date</th>
           	</tr>
           	</thead>
           	<tbody>
           		@if(count($tokens) > 0) 
             		<?php $slno=1; ?>
             		@foreach($tokens as $token)
               	<tr>
               		<td>{{$slno}}</td>
                  <td>{{$token->user->name}}</td>
               		<td>{{$token->no_of_tockens}}</td>
               		<td>{{$token->coin}}</td>
               		<td>{{date('d-m-Y', strtotime($token->date))}}</td>
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
            {!! $tokens->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection