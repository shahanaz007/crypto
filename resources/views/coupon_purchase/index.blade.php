@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
.rounded {
    border-radius: 12px !important;
    box-shadow: 0px 0px 6px 0px darkgrey;
}
</style>
<div class="container">


<div class="row pb-2">

<div class="col-md-6" style="top: 10px;">


<h4>Coupons</h4>
</div>
<div class="col-md-3">
<div class="row">
<div class="col-md-5 float-right pr-0" style="top: 10px;">
<h6 class="text-right" >Location : &nbsp;</h6>
</div>
<div class="col-md-7 pl-0">
<select class="form-select form-select-sm form-control" aria-label=".form-select-sm example" >
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></i></span>
    <input type="text" class="form-control" placeholder="Search">
  </div>
</div>
</div>
<div class="row">

    @if(count($coupons) > 0)
    @foreach($coupons as $coupon)
	<div class="col-md-4">
	<figure class="figure">
  <a href="{{route('coupon_purchase.show',$coupon->id)}}"><img src="{{$coupon->brand->logo}}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." width="100%"></a>
  <h5 class="text-center">{{$coupon->brand->name}}</h5>
</figure>
	</div>
@endforeach
@endif

	
	
	
	
</div>
</div>



@endsection