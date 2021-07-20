@extends('layouts.app')
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
  padding-top: 10px; /* Location of the box */
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
  width: 80%;
  max-width: 600px;
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
  color: #f1f1f1 !important;
  font-size: 40px !important;
  font-weight: bold !important;
  transition: 0.3s;
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
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Coupons') }}</div>
        <div class="card-body">


          <h4 style="text-align: right;">
            <a href="{{url('admin_coupon/group')}}">  <button class="btn btn-info">Group</button></a>

            <a href="{{url('admin_coupon/add')}}">  <button class="btn btn-success">Add New +</button></a></h4>
          <table class="table  table-striped">
           	<thead>
           		<tr>
             		<th>#</th>
             		<th>Category Name</th>
                <th>Location</th>
                <th>Brand</th>
                <th>Code</th>
                <th>Point</th>
                <th>Currency Code</th>
                <th>Expiry Date</th>
                <th>Action</th>
           	  </tr>
           	</thead>
           	<tbody>
           		@if(count($coupons) > 0) 
             		<?php $slno=1; ?>
             		@foreach($coupons as $coupon)
               	  <tr>
                 		<td>{{$slno}}</td>
                    <td>{{$coupon->coupon_category->category_name}}</td>
                    <td>{{$coupon->location->name}}</td>
                    <td>{{$coupon->brand->name}}</td>
                    <td><button class="btn btn-info" onclick="show('{{asset($coupon->code)}}')">Show Code</button></td>
                    <td>{{$coupon->point}}</td>
                    <td>{{$coupon->Currency_code}}</td>
                    <td>{{$coupon->expiry_date}}</td>
                    <td>
                      <a href="{{url('admin_coupon/edit',$coupon->id)}}">  <button class="btn btn-success">Edit</button></a>
                    </td>  
               	  </tr>
               	  <?php $slno++; ?>
             		@endforeach
              @endif
           	</tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $coupons->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="myModal" class="modal">
  <span id="close" style="" class="close" onclick="closefn()">&times;</span>
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