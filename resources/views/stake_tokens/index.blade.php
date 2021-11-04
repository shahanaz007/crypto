@extends('layouts.web')
@section('Tokenwallet_select','active')
@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">                       
            <h2 class="page-title text-white">Stake Token</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Token Wallet</li>
                <li class="breadcrumb-item text-white active" aria-current="page">Stake Token</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center sign-in-page" style="margin: auto;float: none;">
    <div class="col-md-10" style="margin: auto;float: none;">
      <div class="card">
        <!-- <div class="card-header">{{ __('Stake Tokens') }}</div> -->
        <div class="card-body" >
            
          <h4 style="text-align: right;"><a href="{{route('stake_tokens.create')}}">  <button class="btn btn-success">Stake Tokens</button></a></h4>
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