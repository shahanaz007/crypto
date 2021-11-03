 @extends('layouts.web')

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

<section class="bg-img pt-150" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">                       
                        <h2 class="page-title text-white">Coupon Purchase</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Coupon Purchase</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="pt-130 pb-50">
<div class="container">
<form action="{{url('coupons_purchase_region')}}" method="POST"> 
        @csrf

<div class="row pb-2">

    <div class="col-md-6" style="top: 10px;">
        <h4>Coupons</h4>
    </div>
    
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-5 float-right pr-0" style="top: 10px;">
                <h6 class="text-right" >Region : &nbsp;</h6>
            </div>
            <div class="col-md-7 pl-0">
              <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example"  onchange="this.form.submit()" id="region_id" name="region">
                <option value="">--Select--</option>
                @if(count($locations) > 0)
                @foreach($locations as $location)
                  <option value="{{$location->id}}" <?php if(Cookie::get('region_id') == $location->id) echo "selected"; ?>>{{$location->name}}</option>
                @endforeach
                @endif  
              </select>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </div>
</div>
    <div class="row ">
      @if(count($coupons) > 0)
      @foreach($coupons as $coupon)
      	<div class="col-md-4" style="padding:10px">
            <center>
            	<figure class="figure">
                <a href="{{route('coupon_purchase.show',$coupon->brand_id)}}"><img src="{{asset($coupon->brand->logo)}}" class="figure-img img-fluid rounded" alt="Brand Logo" width="100%"></a>
                <h5 class="text-center">{{$coupon->brand->name}}</h5>
              </figure>
            </center>
      	</div>
      @endforeach
      @endif
    	
    </div>

</div>
</section>
</form>
<script>
    function selectRegion() {
      var region  = $('#region_id').val();

    }
</script>
@endsection