@extends('layouts.web')
@section('referal_select','active')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<section class="bg-img pt-100" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">My Referrals</h2>

            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
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
        <form  method="get" action="{{ route('user.index') }}">
          @csrf 
          <div class="float-right" style="margin-left: 500px;" >
            <div class="input-group">
              <div class="row">
                <div class="col-md-4 pr-0">
                  <label>From Date</label>
                  <input type="date" name="from_date"  class="form-control" > 
                </div>
                <div class="col-md-4 pr-0">
                  <label>To Date</label>
                  <input type="date" name="to_date" class="form-control">
                </div>
                <div class="col-md-4 colbtn" style="margin-top:22px;">
                  <button class="btn btn-success" type="submit">Search  <i class="mdi mdi-account-search menu-icon"></i></button>
                </div>
              </div>
            </div>
          </div>
        </form> 
        <div class="card-body">
        @if(count($users) > 0)  
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>User Name</th>
	              <th>Date</th>
           	  </tr>
           	</thead>
           	<tbody>
             		<?php $slno=1; ?>
             		@foreach($users as $user)
               	  <tr>
                   	<td>{{$slno}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
           	</tbody>
          </table>
          @else
            <div style="text-align: center;">
              <h4>No Referrals Available  </h4>  
            </div>
        @endif  
          <div class="d-flex justify-content-center">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection