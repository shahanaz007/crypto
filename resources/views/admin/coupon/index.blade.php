@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Coupons') }}</div>
        <div class="card-body">
          <h4 style="text-align: right;"><a href="{{url('coupon/add')}}">  <button class="btn btn-success">Add New</button></a></h4>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Category Name</th>
                <th>Code</th>
                <th>Point</th>
                <th>Currency Code</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($coupons) > 0) 
             		<?php $slno=1; ?>
             		@foreach($coupons as $coupon)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$coupon->category->category_name}}</td>
                    <td>{{$coupon->code}}</td>
                    <td>{{$coupon->point}}</td>
                    <td>{{$coupon->currency_code}}</td>
                    <td>{{$coupon->expiry_date}}</td>
                    <td>
                      <a href="{{url('coupon/edit',$coupon->id)}}">  <button class="btn btn-success">Edit</button></a>
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

@endsection