@extends('layouts.user_layout')
@section('content')
<section class="bg-img pt-150" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Token Purchase') }}</div>
                <div class="card-body">
                    <form action="{{ route('token_purchase.store') }}" method="POST"> 
                    @csrf
	                	<div class="card-body row">
	                		<div class="col-md-6">
		                		<label>Number of Tokens</label>
		                		<input type="number" class="form-control" step="any" id="no_of_tokens_id" value="0"  name="no_of_tokens"  required="">
	                		</div>
	                		<div class="col-md-6">
	                			<label>Select Coin</label>
	                			<select class="form-control" name="coin" id="coin_id" onchange="" required="">
	                				<option value="USD">USD</option>
	                				
	                			</select>
	                		</div>
	                		<div class="col-md-6 to_hide" >
	                			<label> </label>
	                			<input type="submit" class="form-control btn btn-info" value="Purchase">
	                		</div>
	                	</div>	
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection