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
                   <table class="table  table-striped" id="tableData">
                   	<thead style="text-align:center;">
                   		<tr>
                   		<th>#</th>
                   		<th>Amount</th>
                   		<th>Operation</th>
                   		<th>Date</th>
                   	</tr>
                   	</thead>
                   	<tbody>
                   		 
                   		<?php $cnt=1; ?>
                   		@foreach($payments as $payment)
                   	<tr>
                   		<td>{{$cnt}}</td>
                   		<td>
                        @if($payment->received_usd)
                         <span class="alert alert-success"> + {{$payment->received_usd}} USD </span>
                        @else
                         <span class="alert alert-warning"> - {{$payment->amount}} USD </span>
                        @endif  
                      </td>
                   		<td>
                        @if($payment->received_usd)
                         <span class="alert alert-success">Credit</span> 
                        @else
                          <span class="alert alert-warning">Debit</span>
                        @endif   
                      </td>
                   		<td>{{date('d-m-Y H:i: s', strtotime($payment->created_at))}}</td>
                        
                   	</tr>
                   	<?php $cnt++; ?>
                   		@endforeach
                   		
                   	</tbody>

                   </table>
                   @else
                    <div style="text-align: center;">
                      <h4>No Transactions Available  </h4>  
                    </div>
                  @endif
                   
                   <div class="d-flex justify-content-center">
                  <center> 
               </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{asset('assets/paging.js')}}"></script> 

<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:5});
            });
        </script>
@endsection