@extends('layouts.web')
@section('coupon_select','active')
@section('content')
<section class="bg-img pt-150" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">Coupons</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Coupons</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('Coupons') }}</div>
        <div class="card-body">
          <section class="sctn mt-3" style="padding: 0px 0 50px;">
        <div class="container">
        
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="label">
                    @if(count($categories) > 0)
                    <ul class="d-flex" style="justify-content: center;">
                      <a href="{{route('coupon_purchase.index')}}"><h5>All</h5></a>&nbsp;&nbsp;&nbsp;
                      @foreach($categories as $category)
                        <a href=""><h5 >{{$category->category_name}} </h5></a>&nbsp;&nbsp;&nbsp;
                      @endforeach
                    </ul> 
                    @endif
                  </div>
                </div>
              </div>
            </div>
          
          
          <div class="row">
        
              @foreach($coupons as $coupon)
            <!-- Single Item -->
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="woo_product_grid">
               
                       

                <div class="woo_product_caption center" >
                  
                  <div class="woo_rate" style="margin-top: 10px;">
                    <!-- <i class="fa fa-star filled"></i>
                    <i class="fa fa-star filled"></i>
                    <i class="fa fa-star filled"></i>
                    <i class="fa fa-star filled"></i>
                    <i class="fa fa-star"></i> -->
                  </div>
                  
                  <div class="woo_title" >
                    <h4 class="woo_pro_title"><a href="detail-1.html" style="font-weight:bold"></a></h4>
                  </div>
                </div>
                             <div class="woo_description">
                     <p class="p-1">Category : {{$coupon->coupon_category->category_name}}</p>
                     <p class="p-1">Point    : {{$coupon->point}}</p>
                     <p class="p-1">Expiry : {{$coupon->expiry_date}}</p>

                    <hr>
                   </div>
                   <div class="row spacepad">
                     <div class="col-md-6 amut">
                      <div class="woo_price">
                        
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="woo-add text-right but-ri">
                  
                  <a href=""><button type="submit" class="btn btn-success select-btn">Purchase 
                      <!-- <i class="ti-shopping-cart-full"></i> -->
                     </button></a>
                 
                  </div>
              </div>
                   </div>

              
                
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
  </section>
          <div class="d-flex justify-content-center">
            {!! $coupons->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection