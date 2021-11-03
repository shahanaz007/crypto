@extends('layouts.web')
@section('referal_select','active')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<section class="bg-img pt-100" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">My Referrals</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="fa fa-home"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">My Referrals</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="pt-80 pb-50">
<div class="container">
  <div class="row justify-content-center" >
    <div class="col-md-10 sign-in-page" style="margin: auto;float: none;">
      <div class="card">
        <!-- <div class="card-header">{{ __('My Referrals') }}</div> -->
        <div class="card-body">
          
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>User Name</th>
	              <th>Level</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($users) > 0) 
             		<?php $slno=1; ?>
             		@foreach($users as $user)
               	  <tr>
                   	<td>{{$slno}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->level}}</td>
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
@endsection