@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Currencies') }}</div>
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
          @endif
          <h4 style="text-align: right;"><a href="{{route('currency.create')}}">  <button class="btn btn-success">Add New</button></a></h4>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Currency Name</th>
                <th>Currency Code</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($currencies) > 0) 
             		<?php $slno=1; ?>
             		@foreach($currencies as $currency)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$currency->currency_name}}</td>
                    <td>{{$currency->currency_code}}</td>
                    <td>
                      <a href="{{route('currency.edit',$currency->id)}}">  <button class="btn btn-success">Edit</button></a>
                      <!-- <a href="">  <button class="btn btn-success">Delete</button></a> -->
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $currencies->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>

@endsection