@extends('layouts.web')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
	.search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}


@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}

        input,
textarea {
  border: 1px solid #eeeeee;
  box-sizing: border-box;
  margin: 0;
  outline: none;
  padding: 10px;
}

input[type="button"] {
  -webkit-appearance: button;
  cursor: pointer;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.input-group {
  
  margin: 15px 0;
  position: relative;
  width: auto;
}

.input-group input[type='button'] {
  background-color: #eeeeee;
  min-width: 29px;
  width: auto;
  transition: all 300ms ease;
}

.input-group .button-minus,
.input-group .button-plus {
  font-weight: bold;
  height: 29px;
  padding: 0;
  width: 29px;
  position: relative;
}


.input-group .quantity-field {
  position: relative;
  height: 29px;
  left: -6px;
  text-align: center;
  width: 62px;
  display: inline-block;
  font-size: 13px;
  margin: 0 0 5px;
  resize: vertical;
}

.button-plus {
  left: -13px;
}

input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
}

</style>
@section('content')
<section class="bg-img pt-150" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center">           
            <h2 class="page-title text-white">Hotel Booking</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
              <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Hotel Booking</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Find deals on hotels and much more...</h4>
				From cosy country homes to funky city flats

			</div>

<section class="search-sec">
    <div class="container">
         <form action="{{url('/hotels/search')}}"   method="POST"> 
                    @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
						<label>Location</label>
                        
                        <input type="text" class="form-control search-slt" placeholder="Search Location" >
                        </div>

						
                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
						<label>Check-In</label>
                            <input type="date" class="form-control search-slt" placeholder="Enter Drop City">
                        </div>
						<div class="col-lg-2 col-md-2 col-sm-12 p-0">
						<label>Check-Out</label>
                            <input type="date" class="form-control search-slt" placeholder="Enter Drop City">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
						<label for="">Person</label>
							
							<div class="dropdown">
  <button class="btn dropdown-toggle search-slt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:auto;">
  <span id="selected_adult1">1 Adult.</span>
		  <span id="selected_child2">1 Child.</span>
		  <span id="selected_room3">1 Room.</span>
  </button>
  
  <div class="dropdown-menu" role="menu" id="myDropdown" aria-labelledby="dLabel" style="width: 250px;" onclick="change_select(this)" >
     <div style="display: block;text-align:center;margin-bottom:5px;margin-top:5px">
      <div style="display: inline-block;float:left;">
             <i class="fa fa-user mr-2" style="margin:8px;"></i>Adult:</div>

              
           <div class="input-group">
  <input type="button" value="-" class="button-minus" data-field="quantity"  style="margin-left: 20%">
  <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
  <input type="button" value="+" class="button-plus" data-field="quantity">
</div>
       </div>
       <div style="display: block;text-align:center;margin-bottom:5px;margin-top:5px">
      <div style="display: inline-block;float:left;">
      <i class="fas fa-child" style="margin:8px;" ></i>Children:</div>

           <div class="input-group">
  <input type="button" value="-" class="button-minus" data-field="quantity" style="margin-left: 12%" >
  <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field" id="curval">
  <input type="button" value="+" class="button-plus" data-field="quantity">
</div>
       </div>
       <div style="display: block;text-align:center;margin-bottom:5px;margin-top:5px">
      <div style="display: inline-block;float:left;">
      <i class="fas fa-door-closed" style="margin:8px;"></i>Rooms:</div>
           <div class="input-group">
  <input type="button" value="-" class="button-minus" data-field="quantity" style="margin-left: 14%" >
  <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field" id="curval2" >
  <input type="button" value="+" class="button-plus" data-field="quantity">
</div>
       </div>
       <div id='mySelect'></div>
		<hr>
		<div class="text-center data">
          <span id="selected_adult">1 Adult.</span>
		  <span id="selected_child">1 Child.</span>
		  <span id="selected_room">1 Room.</span>
			<a href="#"><button class="btn btn-success">Apply</button>	</a>
</div>
      </div>
</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 mt-auto">
                            <button type="submit" class="btn btn-danger wrn-btn" style="margin-left: 14px;">Search</button>
                        </div>
						
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

function change_select(){
    var adult= document.getElementsByName("quantity")[0].value;
    var child= document.getElementsByName("quantity")[1].value;
    var room= document.getElementsByName("quantity")[2].value;
   $('#selected_adult').html(adult + 'Adult . ');
   $('#selected_child').html(child + 'Child . ');
   $('#selected_room').html(room + 'Room ');
   $('#selected_adult1').html(adult + 'Adult . ');
   $('#selected_child2').html(child + 'Child . ');
   $('#selected_room3').html(room + 'Room ');
   
    
    
  // alert(select);
}

function incrementValue(e) {
    
  e.preventDefault();

  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
  
  if (!isNaN(currentVal)) {
      parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
  
}



function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('.input-group').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
  decrementValue(e);
});


</script>


@endsection