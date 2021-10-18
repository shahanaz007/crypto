@extends('layouts.default')

@section('content')

<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Group') }}</div>
        <div class="card-body">


          <h4 style="text-align: right;">
            <a href="{{url('/admin_coupon/index/')}}"> <button class="btn btn-info">Back</button><i class="fas fa-arrow-circle-left"></i></a>

          </h4>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Brand</th>
                <th>Coupons</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($coupons) > 0) 
             		<?php $slno=1; ?>
             		@foreach($coupons as $coupon)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$coupon->brand->name}}</td>
                    <td>{{$coupon->coupons}}</td>
                    <td>
                      <a href="{{url('admin_coupon/group/brand_coupon',$coupon->brand_id)}}">  <button class="btn btn-success">Go</button></a>
                    </td>  
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
</section>
<div id="myModal" class="modal">
  <span id="close" style="" class="close" onclick="closefn()">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


@endsection