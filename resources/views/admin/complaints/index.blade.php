@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Complaints\Tikets') }}</div>
        <div class="card-body">
          
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th class="text-center">#</th>
                <th class="text-center">User</th>
                <th class="text-center">Subject</th>
                <th class="text-center">Complaints</th>
                <th class="text-center">Date</th>
                <th class="text-center">Action</th> 
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($complaints) > 0) 
             		<?php $slno=1; ?>
             		@foreach($complaints as $complaint)
               	  <tr>
                 		<td class="text-center">{{$slno}}</td>
                    <td class="text-center">{{$complaint->user->name}}</td>
                    <td class="text-center">{{$complaint->subject}}</td>
                    <td class="text-center">{{$complaint->complaints}}</td>
                    <td class="text-center">{{date('d-m-Y', strtotime($complaint->created_at))}}</td>
                    <td class="text-center">
                      <a href="{{route('complaints.show',$complaint->id)}}">  <button class="btn btn-success">View</button></a>
                      <!-- <a href="">  <button class="btn btn-success">Delete</button></a> -->
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $complaints->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>

@endsection