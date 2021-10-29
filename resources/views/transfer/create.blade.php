@extends('layouts.user_layout')

@section('content')
<section class="bg-img pt-150" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Transfer Amount</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Transfer Amount</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Transfer Amount') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('transfer.store')}}" method="POST"> 
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-6">
	                			<label>Amount</label>
	                		<input type="number" class="form-control" min="1" max="1" id="tokens" value="1"  name="tokens"  required="">
	                		</div>

	                		

	                		<div class="col-md-6 to_hide">
	                			<label>Recipient Email</label>
	                		<input type="email" class="form-control"   name="to_email" required="">
	                		</div>

	                		<div class="col-md-6 to_hide" >
	                			<label> </label>
	                		<input type="submit" class="form-control btn btn-info" value="Proceed Transfer">
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
		

</script>

@endsection