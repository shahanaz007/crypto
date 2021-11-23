@extends('layouts.web')
@section('history_select','active')
@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">Transactions</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Transactions</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="pt-100 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 sign-in-page">
            <div class="card">
                <!-- <div class="card-header">{{ __('Payment History') }}</div> -->

                <div class="card-body">
                  @if(count($payments) > 0) 
                   <table class="table  table-striped">
                   	<thead>
                   		<tr>
                   		<th>#</th>
                   		<th>Txn Id</th>
                   		<th>Coin</th>
                   		<th>Amount</th>
                   		<th>Recieved Amount</th>
                   		<th>Status</th>
                        <th></th>
                   	</tr>
                   	</thead>
                   	<tbody>
                   		 
                   		<?php $cnt=1; ?>
                   		@foreach($payments as $payment)
                   	<tr>
                   		<td>{{$cnt}}</td>
                   		<td>{{$payment->txn_id}}</td>
                   		<td>{{$payment->coin}}</td>
                   		<td>{{$payment->amountf}}</td>
                   		<td>{{$payment->receivedf}}</td>
                   		<td>{{$payment->status_text}}</td>
                        <td>
                            @if($payment->status == '0')
                              <a href="{{url('check_for_update',$payment->txn_id)}}">  <button class="btn btn-info">Check For Update</button></a>
                            @endif
                        </td>
                   	</tr>
                   	<?php $cnt++; ?>
                   		@endforeach
                   		
                   	</tbody>

                   </table>
                   @else
                    <div style="text-align: center;">
                      <h4>No Payments Available  </h4>  
                    </div>
                  @endif
                   
                   <div class="d-flex justify-content-center">
                  <center> {!! $payments->links("pagination::bootstrap-4") !!} </center>
                   <?php //echo $payments->render(); ?>
               </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection