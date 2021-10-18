@extends('layouts.default')

@section('content')

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