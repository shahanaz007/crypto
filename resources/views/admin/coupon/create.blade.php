@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Coupon Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('/coupon/store')}}" method="POST"> 
                    @csrf
	                	<div class="card-body row">

                            <div class="col-md-6">
                                <label>Select Category</label>
                                <select class="form-control" name="category" id="category_id" required="">
                                    <option value=""></option>
                                    @if(count($categories) > 0)
                                        @foreach($categories as $key => $category) 
                                                <option><?php print($key); ?></option>
                                            @endif
                                        @endforeach
                                    @endif
                                    
                                </select>
                            </div>

	                		<div class="col-md-8">
	                			<label>Category Name</label>
	                			<input type="text" class="form-control"  id="category_name_id"  name="category_name"  required="">
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


@endsection