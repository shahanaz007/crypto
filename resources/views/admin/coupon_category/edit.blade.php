@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Coupon Category Edit Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('/coupon_category/update/'.$coupon_categories->id)}}" method="POST"> 
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-8">
	                			<label>Category Name</label>
	                			<input type="text" class="form-control"  id="category_name_id"  name="category_name"  value="{{$coupon_categories->category_name}}">
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
</section>
</div>


@endsection