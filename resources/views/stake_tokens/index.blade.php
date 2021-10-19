@extends('layouts.default')
@section('content')
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