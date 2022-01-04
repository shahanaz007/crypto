@extends('layouts.admin_default')

@section('content')
<style type="text/css">
    
    .col-md-6 {
        padding-bottom: 15px;
    }
</style>
<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Coupon Purchase Pending') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-success" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{route('purchase_pendings.update',$coupon->id)}}" id="update_form" method="POST" enctype="multipart/form-data"> 
                    @method('put')
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-6">
	                			<label>Username</label>
	                			<input type="text" class="form-control"  id="name_id"  name="name"  value="{{$coupon->user->name}}" readonly="" disabled="">
	                		</div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control"  id="email_id"  name="email"  value="{{$coupon->user->email}}" readonly="" disabled="">
                            </div>

                            <div class="col-md-6">
                                <label>Purchase Id</label>
                                <input type="text" class="form-control"  id="coupon_name_id"  name="purchase_id"  value="{{$coupon->id}}" readonly="" disabled="">
                            </div>

                            <div class="col-md-6">
                                <label>Region</label>
                                <input type="text" class="form-control"  id="coupon_name_id"  name="coupon_name"  value="{{$coupon->region_name}}" readonly="" disabled="">
                            </div>
                            <div class="col-md-6">
                                <label>Brand Name</label>
                                <input type="text" class="form-control"  id="brand_name_id"  name="brand_name"  value="{{$coupon->brand_name}}" readonly="" disabled="">
                            </div>
                            <div class="col-md-6">
                                <label>Coupon Value</label>
                                <input type="text" class="form-control"  id="coupon_value_id"  name="coupon_value"  value="{{$coupon->coupon_value}}" readonly="" disabled="">
                            </div>
                            <div class="col-md-6">
                                <label>Expiry Date</label>
                                <input type="date"  class="form-control"  id="expiry_date_id"  name="expiry_date"  required="">
                            </div>
                            <div class="col-md-6">
                                <label>Coupon Images</label>
                                <input type="file" class="form-control"  id="coupon_id"  name="image"  required="" multiple>
                            </div>

	                	</div>
                        </form>


	                		<div class="row">
							    <div class="col-lg-12">
                                    
                                    <a href="{{route('purchase_pendings.index') }}">
                                    <button class="btn btn-danger " onclick=""><< Back</button></a>

                                   
                                    <button onclick="submit_form()" class="btn btn-success float-right" style="margin-left: 470px;">Completed</button>

                                    
                                    
                                    
							    </div>

							</div>
						
	                		
                	
                    

                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<script type="text/javascript">
    
    function submit_form(){
        $('#update_form').submit();
    }
</script>

@endsection