@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Withdraw Request Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('withdraw.store')}}" method="POST"> 
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-6">
	                			<label>Tokens</label>
	                		<input type="number" class="form-control" min="10" max="{{Auth::user()->available_tokens}}" id="tokens" value="10"  name="tokens"  required="">
	                		</div>

	                		<div class="col-md-6">
	                			<label>Select Currency</label>
	                			<select class="form-control" name="currency" id="currency" onchange="convert()" required="">
	                				<option value=""></option>
	                				@if(count($coins) > 0)
		                				@foreach($coins as $key => $coin) {
		                					@if($coin['accepted'])
		                						<option><?php print($key); ?></option>
		                					@endif
		                				@endforeach
	                				@endif
	                				
	                			</select>
	                		</div>

	                		<div class="col-md-6 to_hide">
	                			<label>Amount</label>
	                		<input type="number" class="form-control" readonly="" id="amount"  name="amount"  required="">
	                		</div>

	                		<div class="col-md-6 to_hide">
	                			<label>To Address</label>
	                		<input type="text" class="form-control"   name="address" required="">
	                		</div>

	                		<div class="col-md-6 to_hide" >
	                			<label> </label>
	                		<input type="submit" class="form-control btn btn-info" value="Request Withdraw">
	                		</div>

	                		<div class="col-md-12 to_hide" style="display: none;">
	                			<label class="form-control" style="color: blue;">Please wait.. it may take a few seconds to load the Rates</label>
	                		
	                		</div>
	                	</div>	
                	</form>

                </div>
            </div>
        </div>
    </div>
</div>


<script type="application/javascript"> 
		
	function convert(){
		$('.to_hide').toggle();
		tokens = $('#tokens').val();
		currency = $('#currency').val();
		 $.ajax({
            method: "POST",
            url: "{{url('/get_rate_of')}}",
            data: {
                'currency': currency,
                'tokens': tokens,
                
                '_token': '{{csrf_token()}}'
            },
            success: function(data) {
            	usd_rate = data.usd_rate;
            	currency_rate = data.currency_rate;

            	btc_amount = tokens * usd_rate;
            	converted_amount = btc_amount /  currency_rate;
               	converted_amount = converted_amount.toFixed(8);

               	$('#amount').val(converted_amount);
               	// alert(converted_amount);
               	$('.to_hide').toggle();
            }

        });

	}
</script>

@endsection