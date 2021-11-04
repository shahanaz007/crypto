@extends('layouts.web')
@section('tokenpur_select','active')
@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Token Purchase</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Token Purchase</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
<section class="pt-100 pb-50">
	
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 sign-in-page" style="margin: auto;float: none;">
            <div class="card">
                <!-- <div class="card-header">{{ __('Token Purchase') }}</div> -->
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