@extends('layouts.default')

@section('content')

<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Brands') }}</div>
        <div class="card-body">
          <h4 style="text-align: right;"><a href="{{route('brand.create')}}">  <button class="btn btn-success">Add New</button></a></h4>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Name</th>
                <th>Logo</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($brands) > 0) 
             		<?php $slno=1; ?>
             		@foreach($brands as $brand)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$brand->name}}</td>
                    <td>
                      @if($brand->logo)
                      <img src="{{asset($brand->logo)}}" class="blogimg">
                        @endif  
                    </td>
                    <td>
                      <a href="{{route('brand.edit',$brand->id)}}">  <button class="btn btn-success">Edit</button></a>
                      <!-- <a href="">  <button class="btn btn-success">Delete</button></a> -->
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $brands->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection