@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Coupon Purchase Pendings') }}</div>
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