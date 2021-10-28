@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('KYC Request Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     
                    @csrf
	                	<div class="card-body row">
                            <div class="col-md-8">
                                <label>Customer Name</label>
                                <input type="text"  class="form-control"  id="name_id"  name="name" value="{{$kyc_requests->user->name}}" required="">
                            </div>

	                		<div class="col-md-6">
	                			<label>Pan Card Number</label>
	                			<input type="text"  class="form-control"  id="pancard_no_id"  name="pancard_no"  required="" value="{{$kyc_requests->pancard_no}}">
	                		</div>

	                		<div class="col-md-6 to_hide">
	                		    <label>Pan Card Image</label>
	                		     <img src="{{asset($kyc_requests->pancard_img)}}" class="blogimg"></a>
	                		</div>

	                		<div class="col-md-6 to_hide">
	                			<label>Id Card Number</label>
	                		<input type="text" class="form-control"   name="idcard_no" value="{{$kyc_requests->idcard_no}}" required="">
	                		</div>

	                		<div class="col-md-6 to_hide">
	                			<label>Id Card Image</label>
	                		     <img src="{{asset($kyc_requests->idcard_img)}}" class="blogimg"></a>
	                		</div>
	                	</div>	
	                	
                	<div class="row">
                            <div class="col-lg-12">
                                <a href="{{url('admin_kyc/reject',$kyc_requests->id)}}">  <button style="margin-left: 10px" class="btn btn-danger float-right">_Reject_</button></a>
                            
                                <a href="{{url('admin_kyc/approve',$kyc_requests->id)}}" style="margin: 25px">  <button class="btn btn-success float-right">Approve</button></a>
                            
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