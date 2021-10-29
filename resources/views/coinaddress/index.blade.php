@extends('layouts.user_layout')

@section('content')
<section class="bg-img pt-150" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-5.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">Coin Address</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Coin Address</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
@if(count($coinaddresses) > 0)

    <section class="pt-130 pb-50">
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
    </div>
</section>

@endif
<script type="text/javascript"></script>
@endsection