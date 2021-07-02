@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Coupon Edit Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('/admin_coupon/update/'.$coupons->id)}}" method="POST"> 
                    @csrf
	                	<div class="card-body row">

                            <div class="col-md-6">
                                <label>Select Category</label>
                                <select class="form-control" name="category_id" id="category_id" required="">
                                    <option value=""></option>
                                    @if(count($categories) > 0)
                                        @foreach($categories as $key => $category) 
                                            <option value="{{$category->id}}" <?php if($coupons->category_id == $category->id){ echo "selected"; } ?>>{{$category->category_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

	                		<div class="col-md-6">
	                			<label>Code</label>
	                			<input type="text" class="form-control"  id="code_id"  name="code"  value="{{$coupons->code}}" required="">
	                		</div>
                            <div class="col-md-6">
                                <label>Point</label>
                                <input type="number" step="any" class="form-control"  id="point_id"  name="point" value="{{$coupons->point}}" required="">
                            </div>
                            <div class="col-md-6">
                                <label>Expiry Date</label>
                                <input type="date"  class="form-control"  id="expiry_date_id" value="{{$coupons->expiry_date}}" name="expiry_date"  required="">
                            </div>
                            <div class="col-md-6">
                                <label>Currency Code</label>
                                <input type="text" class="form-control"  id="currency_code_id"  name="currency_code" value="{{$coupons->Currency_code}}" required="">
                            </div>

	                	</div>

	                		<div class="row">
							    <div class="col-lg-12">
							        <button class="btn btn-secondary float-right">Update</button>
							    </div>
							</div>
						
	                		
                	</form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection