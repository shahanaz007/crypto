@extends('layouts.default')

@section('content')
<section class="pt-130 pb-50" style="min-height:850px">
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    
                   

                    <div class="card-body row">
                   
                   <div class="col-md-3 ">
                        
                            <img width="50px" src="{{asset('assets/img/bc_logo.png')}}">
                            0.00000000
                        
                    </div>

                    <div class="col-md-3 ">
                        
                            <img width="50px" src="{{asset('assets/img/eth_logo.png')}}">
                            0.00000000
                        
                    </div>

                    <div class="col-md-3 ">
                       
                            <img width="50px" src="{{asset('assets/img/usdt_logo.png')}}">
                            0.00000000
                       
                    </div>

                    <div class="col-md-3 ">
                        
                            <img width="50px" src="{{asset('assets/img/tron_logo.png')}}">
                            0.00000000
                        
                    </div>

                    <div class="col-md-3 ">
                      <br>  
                            <img width="50px" src="{{asset('assets/img/lite.png')}}">
                            {{$ltct}}
                        
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div> -->
<div style="text-align: center;color:white;font-size:50px;">
 {{$refercode}}
</div>

@include('include.dashboard_coins')


<!-- pendings starts -->
@if(count($pendings) > 0) 
<div class="container" style="padding-top: 15px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Pending Payments') }}</div>

                <div class="card-body">
                   
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
                        @foreach($pendings as $payment)
                    <tr>
                        <td>{{$cnt}}</td>
                        <td>{{$payment->txn_id}}</td>
                        <td>{{$payment->coin}}</td>
                        <td>{{$payment->amountf}}</td>
                        <td>{{$payment->receivedf}}</td>
                        <td>{{$payment->status_text}}</td>
                        <td>
                            @if($payment->status == '0')
                              <a href="{{url('check_for_update',$payment->txn_id)}}">  <button class="btn btn-info">Check</button></a>
                            @endif
                        </td>
                    </tr>
                    <?php $cnt++; ?>
                        @endforeach
                        
                    </tbody>

                   </table>
                   <div class="d-flex justify-content-center">
                   {!! $pendings->links("pagination::bootstrap-4") !!}
                   <?php //echo $pendings->render(); ?>
               </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- pendings ends -->


<div class="container" id="buy_tokens" style="display: none;padding-top: 5%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Buy Tokens') }}

                </div>



                <form action="{{url('create_order')}}" method="POST"> 
                    @csrf
                <div class="card-body row">
                   
                  
                    <div class="col-md-6">
                        <center>
                           <input class="form-control" type="number" name="tokens" id="" required> 
                        </center>
                    </div>

                    <div class="col-md-6">
                        <button class="btn btn-success form-control"> Buy </button>
                    </div>

                

                </div>
                </form>


                <div class="card-body row">
                   
                   <div class="col-md-3 img_hover">
                        <center>
                            <img width="100px" src="{{asset('assets/img/bc_logo.png')}}">
                        </center>
                    </div>

                    <div class="col-md-3 img_hover">
                        <center>
                            <img width="100px" src="{{asset('assets/img/eth_logo.png')}}">
                        </center>
                    </div>

                    <div class="col-md-3 img_hover">
                        <center>
                            <img width="100px" src="{{asset('assets/img/usdt_logo.png')}}">
                        </center>
                    </div>

                    <div class="col-md-3 img_hover">
                        <center>
                            <img width="100px" src="{{asset('assets/img/tron_logo.png')}}">
                        </center>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
</section>
@endsection
