@extends('layouts.default')

@section('content')

<section class="pt-130 pb-50">
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

                    <form action="{{url('/merchant_request/store')}}" method="POST"> 
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-6">
	                			<label>Company Name</label>
	                			<input type="text"  class="form-control"  id="company_name_id"  name="company_name"  required="">
	                		</div>


	                		<div class="col-md-6 to_hide">
	                			<label>Company Address</label>
	                		<input type="text" class="form-control"   name="company_address" required="">
	                		</div>
	                		<div class="col-md-6 to_hide">
	                			<label>Company Email</label>
	                		<input type="text" class="form-control"   name="company_email" required="">
	                		</div>

	                		<div class="col-md-6 to_hide" >
	                			<label> </label>
	                		<input type="submit" class="form-control btn btn-info" value="Submit">
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