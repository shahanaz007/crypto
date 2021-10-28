@extends('layouts.admin_default')
<style type="text/css">
    .col-md-6, .col-md-12 {
        margin-top: 10px;
    }
</style>
@section('content')

<div class="content-wrapper">
<section class="content">
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

                    <form action="{{url('/admin_coupon/store')}}" method="POST"  enctype="multipart/form-data"> 
                    @csrf
	                	<div class="card-body row">

                            <div class="col-md-6">
                                <label>{{ __('Select Category') }}</label>
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
                                <label>{{ __('Select Location') }}</label>
                                <select class="form-control" name="location_id" id="location_id" required="">
                                    <option value=""></option>
                                    @if(count($locations) > 0)
                                        @foreach($locations as $key => $location) 
                                            <option value="{{$location->id}}">{{$location->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Select Brand</label>
                                <select class="form-control" name="brand_id" id="brand_id" required="">
                                    <option value=""></option>
                                    @if(count($brands) > 0)
                                        @foreach($brands as $key => $brand) 
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Expiry Date</label>
                                <input type="date"  class="form-control"  id="expiry_date_id"  name="expiry_date"  required="">
                            </div>
	                		
                            <div class="col-md-6">
                                <label>Point</label>
                                <input type="number" step="any" class="form-control"  id="point_id"  name="point"  required="">
                            </div>
                            <div class="col-md-6">
                                <label>Currency Code</label>
                                <select class="form-control"  id="currency_code_id"  name="currency_code"  required="">
                                    <option>USD</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6">
                                <label>Select Images/Codes</label>
                                <input type="file" class="form-control"  id="code_id"  name="code[]"  required="" multiple>
                            </div>
                            
                            <div class="col-md-12">
                                <label>Remark</label>
                                <textarea class="form-control"  id="remark_id"  name="remark"></textarea> 
                                <!-- <input type="text" class="form-control"  id="remark_id"  name="remark" > -->
                            </div>
                            <!-- <div class="col-md-6">
                                <label> .</label>
                                <button class="form-control btn btn-success">Submit</button>
                            </div> -->


	                	</div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-success float-right">Submit</button>
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