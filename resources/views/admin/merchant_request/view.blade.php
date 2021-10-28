@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Merchant Request Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-6">
	                			<label>Customer Name</label>
	                			<input type="text"  class="form-control"  id="name_id"  name="name" value="{{$merchant_requests->user->name}}" required="">
	                		</div>

	                		<div class="col-md-6">
	                			<label>Company Name</label>
	                			<input type="text"  class="form-control"  id="company_name_id"  name="company_name" value="{{$merchant_requests->company_name}}" required="">
	                		</div>


	                		<div class="col-md-6 to_hide">
	                			<label>Company Address</label>
	                		<input type="text" class="form-control"   name="company_address" value="{{$merchant_requests->company_address}}"  required="">
	                		</div>
	                		<div class="col-md-6 to_hide">
	                			<label>Company Email</label>
	                		<input type="text" class="form-control"   name="company_email" value="{{$merchant_requests->company_email}}" required="">
	                		</div>


	                	</div>
	                	<div class="row">
						    <div class="col-lg-12">
						        <a href="{{url('merchant_request/reject',$merchant_requests->id)}}">  <button style="margin-left: 10px" class="btn btn-danger float-right">_Reject_</button></a>
						    
						    	<a href="{{url('merchant_request/change_status',$merchant_requests->id)}}" style="margin: 25px">  <button class="btn btn-success float-right">Approve</button></a>
                            
                            </div>
						</div>	
                	

                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>

@endsection