@extends('layouts.admin_default')

@section('content')
<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">{{ __('Deposites') }}</div>
                  <form  method="get" action="{{ route('deposites.index') }}">
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
                   		<th>Transaction Id</th>
                   		<th>Amount</th>
                   		<th>Currency Code</th>
                      <th>Received USD</th>
                   		<th>Date</th>
                   	</tr>
                   	</thead>
                   	<tbody>
                   		@if(count($deposites) > 0) 
                   		<?php $slno=1; ?>
                   		@foreach($deposites as $deposite)
                   	<tr>
                   		<td>{{$slno}}</td>
                      <td>
                        @if(isset($deposite->user->name))
                        {{$deposite->user->name}}
                        @endif
                      </td>
                   		<td>{{$deposite->txn_id }}</td>
                   		<td>{{$deposite->receivedf}}</td>
                   		<td>{{$deposite->currency_code}}</td>
                   		<td>{{$deposite->received_usd}}</td>
                   		<td>{{date('d-m-Y', strtotime($deposite->created_at))}}</td>
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
                   {!! $deposites->links("pagination::bootstrap-4") !!}
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