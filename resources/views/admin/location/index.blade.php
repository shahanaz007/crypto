@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Locations') }}</div>
        <div class="card-body">
          <h4 style="text-align: right;"><a href="{{route('location.create')}}">  <button class="btn btn-success">Add New</button></a></h4>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Name</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($locations) > 0) 
             		<?php $slno=1; ?>
             		@foreach($locations as $location)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$location->name}}</td>
                    <td>
                      <a href="{{route('location.edit',$location->id)}}">  <button class="btn btn-success">Edit</button></a>
                      <!-- <a href="">  <button class="btn btn-success">Delete</button></a> -->
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $locations->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>

@endsection