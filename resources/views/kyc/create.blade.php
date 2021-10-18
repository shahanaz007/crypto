@extends('layouts.default')

@section('content')

<section class="pt-130 pb-50">
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

                    <form action="{{route('kyc.store')}}" method="POST"  enctype="multipart/form-data"> 
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-6">
	                			<label>Pan Card Number</label>
	                			<input type="text"  class="form-control"  id="pancard_no_id"  name="pancard_no"  required="">
	                		</div>

	                		<div class="col-md-6 to_hide">
	                			<label>Pan Card Image</label>
	                		<input type="file" class="form-control"   name="pancard_img" required="">
	                		</div>

	                		<div class="col-md-6 to_hide">
	                			<label>Id Card Number</label>
	                		<input type="text" class="form-control"   name="idcard_no" required="">
	                		</div>

	                		<div class="col-md-6 to_hide">
	                			<label>Id Card Image</label>
	                		<input type="file" class="form-control"   name="idcard_img" required="">
	                		</div>
	                	</div>	
	                	<div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-secondary float-right">Submit</button>
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