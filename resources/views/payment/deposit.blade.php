@extends('layouts.web')
@section('wallet_select','active')
@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Deposit </h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Wallet</li>
							<li class="breadcrumb-item text-white active" aria-current="page">Deposit</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 sign-in-page" style="margin: auto;float: none;">
            <div class="card">
                <!-- <div class="card-header">{{ __('Deposit Form') }}</div> -->

                <div class="card-body">
                    

                    <form action="{{url('/deposit2')}}" method="POST"> 
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-6">
	                			<label>Amount in $</label>
	                		<input type="number" class="form-control" step="any" id="amount_in_dollar" value="0.00"  name="amount_in_dollar" onchange="convert()"  required="">
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

	                		<div class="col-md-6">
	                			<label>Amount</label>
	                		<input type="number" class="form-control" step="any" id="amount" value="0.00"  name="amount"  required="" readonly="">
	                		</div>

	                		<!-- <div class="col-md-6 to_hide">
	                			<label>Amount in $</label>
	                		<input type="number" class="form-control" readonly="" id="amount_usd"  name="amount"  required="">
	                		</div> -->

	                		<!-- <div class="col-md-6 to_hide">
	                			<label>To Address</label>
	                		<input type="text" class="form-control"   name="address" required="">
	                		</div> -->

	                		<div class="col-md-6 to_hide" >
	                			<label> </label>
	                		<input type="submit" id="submit_btn" class="form-control btn btn-info" value="Deposit Now">
	                		</div>

	                		<div class="col-md-12 to_hide" id="notes" style="display: none;">
	                			<center><label  class="form-control" style="color: blue; border: none;border-radius: unset;box-shadow: none;">Please wait.. it may take a few seconds to load the Rates</label></center>
	                		
	                		</div>

	                		<div class="col-md-12 "  >
	                			<center><label  class="form-control" style="color: red; border: none;border-radius: unset;box-shadow: none;">Rates are Approximate</label></center>
	                		
	                		</div>
	                	</div>	
                	</form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script type="application/javascript"> 
		
	function convert(){ 
		$('#notes').show();
		$('#submit_btn').hide();

		amount = $('#amount').val();
		currency = $('#currency').val();
		amount_in_dollar = $('#amount_in_dollar').val();

		if(currency == null)
		{
			return 0;
		}
		 $.ajax({
            method: "POST",
            url: "{{url('/get_rate_of_currency')}}",
            data: {
                'currency': currency,
                'amount': amount,
                
                '_token': '{{csrf_token()}}'
            },
            success: function(data) {
            	console.log(data);
            	usd_rate = data.usd_rate;
            	currency_rate = data.currency_rate;

            	btc_amount = amount_in_dollar * usd_rate;
            	converted_amount = btc_amount /  currency_rate;
               	converted_amount = converted_amount.toFixed(8);

               	$('#amount').val(converted_amount);
               	// alert(converted_amount);
               	if(converted_amount > 0)
               	{
               	$('#notes').hide();
               	$('#submit_btn').show();
               }
            }

        });

	}
</script>

@endsection