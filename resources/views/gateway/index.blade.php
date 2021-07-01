@extends('layouts.gateway')

@section('content')


    
        <div class="container">
            <div class="row justify-content-center">
              
                <div class="col-md-4" style="padding-bottom: 20px;">
                    <div class="card">
                        <div class="card-header"><b>Pay</b></div>

                        <div class="card-body">
                         <form method="POST" action="{{route('gateway.store')}}">
                            @csrf
                             
                             Buyer Name : {{Auth::user()->name}}
                              <hr>
                            Buyer Email : {{Auth::user()->email}}
                              <hr>
                              Amount : {{$amount}}
                             <hr>
                             Coin : LTCT
                             <hr>
                             <p>Please select Coin</p>

                            @foreach($rates as $key => $rate)
                            @if($rate['accepted'])
                            <div>
                              <input type="radio" id="<?php print($key); ?>" onchange="convert({{$rate['rate_btc']}},{{$amount}},'<?php print($key) ?>')" name="currency_code" value="<?php print($key); ?>">
                              <label for="<?php print($key); ?>"><?php print($key); ?> </label>
                            </div>
                            @endif
                            @endforeach

                              <br> 
                              <input type="text" id="amount_pay" name="amount_pay" style="width:110px;border: none;" readonly=""><span id="selected_coin"></span>
                             <hr>
                             <center>
                                 <button class="form-control btn btn-info">Pay Now</button>
                             </center>
                            
                      
                           

                           
                          <div id="example"></div>

                      </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

    
  


<script type="text/javascript">
    // var pay = new Vue({
    //   el: '#app',
    //   data: {message: 'Hello Vue!'}
    // })

    function convert(rate , amount,coin)
    {
        converted_amount = rate * amount;
        converted_amount = converted_amount.toFixed(8);
        $('#amount_pay').val(converted_amount);
        $('#selected_coin').html(coin);

        // alert(rate+",  "+amount);
    }
</script>
@endsection