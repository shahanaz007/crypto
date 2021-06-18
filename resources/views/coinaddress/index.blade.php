@extends('layouts.app')

@section('content')

@if(count($coinaddresses) > 0)
    
        <div class="container">
            <div class="row justify-content-center">
            @foreach($coinaddresses as $coinaddress)    
                <div class="col-md-3" style="padding-bottom: 20px;">
                    <div class="card">
                        <div class="card-header"><b>{{ $coinaddress->currency_code }}</b></div>

                        <div class="card-body">
                         <center>
                             
                             <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{$coinaddress->address}}"> <br>
                             Send To Address : {{ $coinaddress->address }}
                             <hr>
                             Currency :<b> {{ $coinaddress->currency_code }}</b>
                         </center>  
                           

                           
                          <div id="example"></div>


                        </div>
                    </div>
                </div>
            @endforeach    
            </div>
        </div>
@else
    
   <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3" style="padding-bottom: 20px;">
                    <div class="card">
                        <div class="card-header">Coin Addresses</div>

                        <div class="card-body">
                            <center>
                                <a href="{{route('coinaddress.create')}}">
                                    <button class="btn btn-success">Generate Addresses</button>
                                </a>
                            </center>
                        </div>
                    </div>
            </div>
    </div> 

@endif
<script type="text/javascript"></script>
@endsection