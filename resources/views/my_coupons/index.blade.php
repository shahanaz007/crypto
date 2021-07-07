@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('My Coupons') }}</div>
        <div class="card-body">
          
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Category Name</th>
	                <th>Location</th>
	                <th>Brand</th>
	                <th>Code</th>
	                <th>Point</th>
	                <th>Currency Code</th>
	                <th>Expiry Date</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($coupons) > 0) 
             		<?php $slno=1; ?>
             		@foreach($coupons as $coupon)
               	  <tr>
                 	<td>{{$slno}}</td>
                    <td>{{$coupon->coupon->coupon_category->category_name}}</td>
                    <td>{{$coupon->coupon->location->name}}</td>
                    <td>{{$coupon->coupon->brand->name}}</td>
                    <td>{{$coupon->code}}</td>
                    <td>{{$coupon->point}}</td>
                    <td>{{$coupon->Currency_code}}</td>
                    <td>{{$coupon->expiry_date}}</td>
                     
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection