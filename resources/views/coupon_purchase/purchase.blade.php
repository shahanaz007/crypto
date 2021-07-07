@extends('layouts.app')

@section('content')

<div class="container">
	<div class="card">
		<div class="row">
				    <div class="col-lg-12">
				        <a href="{{route('coupon_purchase.index')}}"><button class="btn btn-secondary float-right">Back</button></a>
				    
				    	
				    </div>
				</div>
		<form action="{{route('coupon_purchase.store')}}" method="POST"> 
                    @csrf
		<div class="row">
			<div class="col-md-8">
				<h1 class="text-center" > {{$details->brand->name}}</h1>
				<div class="details" style="margin-left: 22%;">
					<input type="hidden" name="coupon_id" value="{{$details->id}}" >
					<input type="hidden" name="amount" value="{{$details->point}}" >
					<p><b>Location:</b> {{$details->location->name}}</p>
					<p><b>Category:</b> {{$details->coupon_category->category_name}}</p>
					<p><b>Expiry:</b> {{$details->expiry_date}}</p>
					<p><b>{{$details->point}} {{$details->Currency_code}}</b></p>
					<!-- <p><b>Quantity:</b>
						<button onclick="decrement()">-</button>
						<input id=demoInput type=number min=1 max=100 style="text-align: center;">
						<button onclick="increment()">+</button>
					</p> -->
					<p><b>Currency:</b> 
						<div class="col-md-6">
							<select class="form-control" name="currency" id="currency_id" required="">
	                            <option value="BTC">BTC</option>
	                        	<option value="ETH">ETH</option>
	                        	<option value="TRX">TRX</option>
	                        	<option value="LTCT">LTCT</option>
	                        </select>
                    	</div>
                    </p>
					<p><a href="{{route('coupon_purchase.store')}}"><button class="btn btn-success">Buy</button></a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
				    <div class="col-lg-12">
				        <!-- <a href="{{route('coupon_purchase.index')}}"><button class="btn btn-secondary float-right">Back</button></a> -->
				    
				    	<img src="{{asset($details->brand->logo)}}" alt="" width="50%">
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
</script>
@endsection