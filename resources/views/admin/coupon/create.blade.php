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

                    <form action="{{url('/admin_coupon/store')}}" method="POST"> 
                    @csrf
	                	<div class="card-body row">

                            <div class="col-md-6">
                                <label>Select Category</label>
                                <select class="form-control" name="category_id" id="category_id" required="">
                                    <option value=""></option>
                                    @if(count($categories) > 0)
                                        @foreach($categories as $key => $category) 
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

	                		<div class="col-md-6">
	                			<label>Code</label>
	                			<input type="text" class="form-control"  id="code_id"  name="code"  required="">
	                		</div>
                            <div class="col-md-6">
                                <label>Point</label>
                                <input type="number" step="any" class="form-control"  id="point_id"  name="point"  required="">
                            </div>
                            <div class="col-md-6">
                                <label>Expiry Date</label>
                                <input type="date"  class="form-control"  id="expiry_date_id"  name="expiry_date"  required="">
                            </div>
                            <div class="col-md-6">
                                <label>Currency Code</label>
                                <input type="text" class="form-control"  id="currency_code_id"  name="currency_code"  required="">
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