@extends('layouts.app')

@section('content')


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


<script type="application/javascript"> 
		

</script>

@endsection