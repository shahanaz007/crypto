@extends('layouts.default')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
.checked {
  color: orange;
}
.price{
    margin-top:10%;
    float:right;
}
.box {
  /* width: 200px; height: 300px; */
  position: relative;
  border: 1px solid #BBB;
  /* background: #EEE; */
}
.ribbon {
  position: absolute;
  left: -5px; top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px; height: 75px;
  text-align: right;
}
.ribbon span {
  font-size: 10px;
  font-weight: bold;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  width: 100px;
  display: block;
  background: #79A70A;
  background: linear-gradient(#9BC90D 0%, #79A70A 100%);
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px; left: -21px;
}
.ribbon span::before {
  content: "";
  position: absolute; left: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid #79A70A;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #79A70A;
}
.ribbon span::after {
  content: "";
  position: absolute; right: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #79A70A;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #79A70A;
}
</style>
@section('content')
<section class="pt-130 pb-50">
<div class="container">
<div class="card">
<div class="row">
<div class="col-md-5">
<div class="box">
<img src="{{asset('assets/hotel.jpg')}}" alt="Girl in a jacket" width="100%"; style= >

   <div class="ribbon"><span>POPULAR</span></div>
</div>
</div>
<div class="col-md-4">

<h4 class="text-success pt-3">Treebo Trend Arvind Residency, Richmound Road, Banglure </h4>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
<span class="badge badge-light">Hotel</span>
<h6><b>Gndhi nagar</b></h6>
<ul>
    <li>2.7 Km to Banglure</li>
    <li>0.3 km to Race Cource Road</li>

</ul>
<span class="badge badge-info">9.5</span><span> <b>Superb</b></span>
<p>53 Hotels.com Gust Review</p>
<div class="facility">
<span class="badge  badge-secondary"><i class="fas fa-swimmer"></i> Pool</span>
<span class="badge  badge-secondary" ><i class="fas fa-car"></i> Free Parking</span>
<span class="badge badge-secondary"><i class="fas fa-bus"></i> Airport Transfer</span>
<span class="badge  badge-secondary"> <i class="fas fa-spa"></i> Spa</span>
<span class="badge badge-secondary"> <i class="fas fa-dumbbell"></i> Gym</span>
<span class="badge  badge-secondary"> <i class="fas fa-utensils"></i> Restaurent</span>
</div>
</div>

<div class="col-md-3" style="border-left: 1px solid #80808021;
   ">
<div class="price" style="padding-right: 28px;">
<b class="pb-2">Rs6500/-</b><br>
<span>night price per room (Rs 19500 for 3 night excluding taxes & feets)</span>
<button type="button" class="btn btn-success mt-2">Book Now</button><br>
<i class="fas fa-check text-success pt-2" style="font-weight: 100;"> Free cancellation</i>
<i class="fas fa-check text-success pt-2" style="font-weight: 100;"> Pay at Property Available</i>
<i class="fas fa-check text-success pt-2" style="font-weight: 100;"> Free Breakfast</i>
</div>
</div>
</div>
</div>


<!-- row starts -->
<div class="card" style="margin-top: 10px">
<div class="row">
<div class="col-md-5">
<div class="box">
<img src="{{asset('assets/hotel.jpg')}}" alt="Girl in a jacket" width="100%"; style= >

   <div class="ribbon"><span>POPULAR</span></div>
</div>
</div>
<div class="col-md-4">

<h4 class="text-success pt-3">Treebo Trend Arvind Residency, Richmound Road, Banglure </h4>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
<span class="badge badge-light">Hotel</span>
<h6><b>Gndhi nagar</b></h6>
<ul>
    <li>2.7 Km to Banglure</li>
    <li>0.3 km to Race Cource Road</li>

</ul>
<span class="badge badge-info">9.5</span><span> <b>Superb</b></span>
<p>53 Hotels.com Gust Review</p>
<div class="facility">
<span class="badge  badge-secondary"><i class="fas fa-swimmer"></i> Pool</span>
<span class="badge  badge-secondary" ><i class="fas fa-car"></i> Free Parking</span>
<span class="badge badge-secondary"><i class="fas fa-bus"></i> Airport Transfer</span>
<span class="badge  badge-secondary"> <i class="fas fa-spa"></i> Spa</span>
<span class="badge badge-secondary"> <i class="fas fa-dumbbell"></i> Gym</span>
<span class="badge  badge-secondary"> <i class="fas fa-utensils"></i> Restaurent</span>
</div>
</div>

<div class="col-md-3" style="border-left: 1px solid #80808021;
   ">
<div class="price" style="padding-right: 28px;">
<b class="pb-2">Rs6500/-</b><br>
<span>night price per room (Rs 19500 for 3 night excluding taxes & feets)</span>
<button type="button" class="btn btn-success mt-2">Book Now</button><br>
<i class="fas fa-check text-success pt-2" style="font-weight: 100;"> Free cancellation</i>
<i class="fas fa-check text-success pt-2" style="font-weight: 100;"> Pay at Property Available</i>
<i class="fas fa-check text-success pt-2" style="font-weight: 100;"> Free Breakfast</i>
</div>
</div>
</div>
</div>
<!-- row ends -->


</div>
</section>

<script>
   function increment() {
      document.getElementById('demoInput').stepUp();
   }
   function decrement() {
      document.getElementById('demoInput').stepDown();
   }
</script>
@endsection