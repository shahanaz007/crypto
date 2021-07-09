@extends('layouts.app')

@section('content')

<div class="container">
	<div class="card">
		<!-- <div class="row">
				    <div class="col-lg-12">
				        <a href="{{route('coupon_purchase.index')}}"><button class="btn btn-secondary float-right">Back</button></a>
				    
				    	
				    </div>
				</div> -->
		<form action="{{route('coupon_purchase.store')}}" method="POST"> 
                    @csrf
		<div class="row" style="padding:10px">

			<div class="col-md-6">
				<div class="row" >
				    <div class="col-lg-12">
				        <!-- <a href="{{route('coupon_purchase.index')}}"><button class="btn btn-secondary float-right">Back</button></a> -->
				    <center>
				    	<img src="{{asset($details->brand->logo)}}" alt="" width="70%">
				    	</center>
				    </div>
				</div>
				
			</div>

			<div class="col-md-6" style="padding:10px">
				<h1 class="text-center" > {{$details->brand->name}}</h1>
				<div class="details">


					<p>
						{{$details->remarks}}
					</p>
					<input type="hidden" name="coupon_id" value="{{$details->id}}" >
					<!-- <input type="hidden" name="amount" value="{{$details->point}}" > -->

					<table>
						<tr>
							<td><b>Region </b></td><td> : {{$details->location->name}}</td>
						</tr>

						<tr>
							<td><b>Category </b></td><td> : {{$details->coupon_category->category_name}}</td>
						</tr>

						<tr>
							<td><b>Expiry </b></td><td> : {{$details->expiry_date}}</td>
						</tr>

						

					</table>

					
					
					
					
					<!-- <p><b>Quantity:</b>
						<button onclick="decrement()">-</button>
						<input id=demoInput type=number min=1 max=100 style="text-align: center;">
						<button onclick="increment()">+</button>
					</p> -->
					<div class="row" style="padding-top:10px">

						<div class="col-md-6">
							<p><b>Amount :</b>
								<select class="form-control" name="amount" id="currency_id" required="" onchange="get_amount(this.value)">
										<option value="">- Select Amount of Coupon -</option>
	                            <option value="10">10$</option>
	                        	<option value="20">20$</option>
	                        	<option value="30">30$</option>
	                        	<option value="40">40$</option>
	                        	<option value="50">50$</option>
	                     </select>
							 </p>
						</div>

					

						<div class="col-md-6" id="select_currency">
							<p><b>Currency :</b> 
							<select class="form-control" name="currency" id="currency_id" required="">
										<option value="" disabled="disabled">- Select Currency -</option>
	                            <option value="BTC">BTC</option>
	                        	<option value="ETH">ETH</option>
	                        	<option value="TRX">TRX</option>
	                        	<option value="LTCT">LTCT</option>
	                        </select>

	                  </p>      
						</div>
						


                    

               </div> 
               <div  >    
					<button class="btn btn-success form-control">Buy Coupon</button>
					</div>
				</div>
			</div>
			
		</div>
		</form>	
			
	</div>
</div>
<script>
   function increment() {
      document.getElementById('demoInput').stepUp();
   }
   function decrement() {
      document.getElementById('demoInput').stepDown();
   }

   function get_amount(amount){
   	img_src = "{{asset('/loading.gif')}}";
   	img = '<img style="padding-top:10px" src="'+img_src+'">';
   	$('#select_currency').html(img);
   	currency = $('#currency_id').val();
		 $.ajax({
            method: "POST",
            url: "{{url('/coupon_purchase/select_currency')}}",
            data: {
                'currency': currency,
                'amount': amount,
                
                '_token': '{{csrf_token()}}'
            },
            success: function(data) {
            	// console.log(data);
            	// alert('ok');
            	
            	$('#select_currency').html(data);
            }

        });
   }
</script>
@endsection