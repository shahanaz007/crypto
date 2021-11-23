@extends('layouts.web')
@section('coupon_select','active')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 40%;
    height: auto;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: white !important;
  font-size: 40px !important;
  font-weight: bold !important;
  transition: 0.3s;
  opacity: unset !important;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

<section class="bg-img pt-150" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">My Coupons</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Coupons</li>
              <li class="breadcrumb-item text-white active" aria-current="page">My Coupons</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="pt-130 pb-50">
<div class="container">
  <div class="row justify-content-center  sign-in-page" style="margin: auto;float: none;">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('My Coupons') }}</div>
        <div class="card-body">
        @if(count($coupons) > 0)   
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th class="text-center">#</th>
             		<!-- <th class="text-center">Category Name</th> -->
	                <th class="text-center">Location</th>
	                <th class="text-center">Brand</th>
	                
	                <th class="text-center">Point</th>
                  <th class="text-center">Code</th>
	                <!-- <th>Currency Code</th> -->
	                <th class="text-center">Expiry Date</th>
           	  </tr>
           	</thead>
           	<tbody>
             		<?php $slno=1; ?>
             		@foreach($coupons as $coupon)
               	  <tr>
                 	<td class="text-center">{{$slno}}</td>
                    
                    <td class="text-center">{{$coupon->region_name}}</td>
                    <td class="text-center">{{$coupon->brand_name}}</td>

                    <td class="text-center"><button class="btn btn-info" onclick="show('{{asset($coupon->coupon)}}')">Show Code</button></td>
                    
                    <td class="text-center">{{$coupon->coupon_value}}</td>
                    <!-- <td>{{$coupon->Currency_code}}</td> -->
                    <td class="text-center">{{date('d-m-Y', strtotime($coupon->expiry_date))}}</td>
                     
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
           	</tbody>
          </table>
          @else
            <div style="text-align: center;">
              <h4>No Coupons Available</h4>
            </div>
        @endif
          <div class="d-flex justify-content-center">
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<div id="myModal" class="modal">
  <span id="close" style="" class="close" onclick="closefn()" style="opacity:unset; color: white;">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


<script type="text/javascript">

  function show(url)
  {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    modal.style.display = "block";
    modalImg.src = url;


  }

  function closefn()
  {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }
</script>
@endsection