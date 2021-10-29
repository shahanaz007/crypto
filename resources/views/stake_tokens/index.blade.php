@extends('layouts.user_layout')
@section('content')
<section class="bg-img pt-150" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <!-- <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">Buy And Sell</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Buy and Sell</li>
            </ol>
          </div>
        </div>
      </div>
    </div> -->
  </section>
<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Stake Tokens') }}</div>
        <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
          <h4 style="text-align: right;"><a href="{{route('stake_tokens.create')}}">  <button class="btn btn-success">Add New</button></a></h4>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Number of Tokens</th>
                <th>Date</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($stake_tokens) > 0) 
             		<?php $slno=1; ?>
             		@foreach($stake_tokens as $stake_token)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$stake_token->no_of_tokens}}</td>
                    <td>{{$stake_token->date}}</td>
                    <td> 
                      @if($stake_token->status == 1)
                        <a href="{{url('stake_tokens/unstake',$stake_token->id)}}">  <button class="btn btn-success">Unstake</button></a>
                      @endif
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $stake_tokens->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection