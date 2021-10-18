@extends('layouts.default')

@section('content')
<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Coupon Categories') }}</div>
        <div class="card-body">
          <h4 style="text-align: right;"><a href="{{url('coupon_category/add')}}">  <button class="btn btn-success">Add New</button></a></h4>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Category Name</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($coupon_categories) > 0) 
             		<?php $slno=1; ?>
             		@foreach($coupon_categories as $coupon_category)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$coupon_category->category_name}}</td>
                    <td>
                      <a href="{{url('coupon_category/edit',$coupon_category->id)}}">  <button class="btn btn-success">Edit</button></a>
                      @if($coupon_category->disabled == 1)
                        <a href="{{url('coupon_category/enable',$coupon_category->id)}}">  <button class="btn btn-success">Enable</button></a> 
                      @else
                         <a href="{{url('coupon_category/disable',$coupon_category->id)}}">  <button class="btn btn-danger">Disable</button></a>  
                      @endif  
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $coupon_categories->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection