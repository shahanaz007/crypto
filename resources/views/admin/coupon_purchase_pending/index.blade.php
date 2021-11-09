@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        
        <div class="card-header">{{ __('Coupon Purchase Pendings') }}</div>

          <form  method="get" action="{{ route('purchase_pendings.index') }}">
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
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
          @endif
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Username</th>
                <th>Brand</th>
                <th>Coupon Value</th>
                <th>Date</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($coupons) > 0) 
             		<?php $slno=1; ?>
             		@foreach($coupons as $coupon)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$coupon->user->name}}</td>
                    <td>{{$coupon->brand_name}}</td>
                    <td>{{$coupon->coupon_value}}</td>
                    <td>{{date('d-m-Y', strtotime($coupon->created_at))}}</td>
                    <td>
                      <a href="{{route('purchase_pendings.show',$coupon->id)}}">  <button class="btn btn-success">View</button></a>
                      <!-- <a href="">  <button class="btn btn-success">Delete</button></a> -->
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $coupons->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>

@endsection