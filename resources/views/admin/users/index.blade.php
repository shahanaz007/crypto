@extends('layouts.admin_default')
@section('content')
<div class="content-wrapper">
<section class="content">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Users') }}</div>
        <div class="card-body">
          <form class="d-flex align-items-center h-100" action="{{ route('users.index') }}">
            <div class="input-group" >
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search Email " name="key">
            </div>
          </form>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Name</th>
                <th>Email</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($users) > 0) 
             		<?php $slno=1; ?>
             		@foreach($users as $user)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a href="{{route('users.show',$user->id)}}">  <button class="btn btn-success">View</button></a>
                      
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $users->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>


@endsection