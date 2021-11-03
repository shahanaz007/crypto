@extends('layouts.web')

@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
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
                <div class="card-header">{{ __('Deposit') }}</div>

                <div class="card-body">
                 <center>
                     
                     <img src="{{$qr}}"> <br>
                     Send To Address : {{$deposit['result']['address']}}
                     <hr>
                     Currency : {{$currency}}
                 </center>  
                   

                   
                  <div id="example"></div>


                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script type="text/javascript"></script>
@endsection