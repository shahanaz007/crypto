@extends('layouts.web')
@section('coupon_select','active')
@section('content')
<style type="text/css">
	


	input[type=radio] {
  position: absolute;
  visibility: hidden;
  display: none;
}

label {
  color: #332f35;
  display: inline-block;
  cursor: pointer;
  font-weight: bold;
  padding: 5px 20px;
  margin-bottom: 0 !important;
}

input[type=radio]:checked + label{
  color: #fff;
  background: #ec3237;
  
}

label + input[type=radio] + label {
  border-left: solid 2px #ec3237;
  margin-left: -7px;
}
.radio-group {
  border: solid 2px #ec3237;
  display: inline-block;
  /*margin: 20px;*/
  border-radius: 10px;
  overflow: hidden;
}


input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
td, th, p {
    font-size: 16px;
}
.brandlogo{
	border-radius: 10px;
	box-shadow: 1px 1px 7px 0px;
	width: 55%;
	height: 179px;
	margin-top: 10px;
}
@media only screen and (max-device-width:425px){
	.brandlogo{
		width: 68%;
		height: 137px;
	}
	.buybtn{
		margin-top: 0% !important;
	}
	.qtybtn{
		width: 83% !important;

	}
	}
	@media only screen and (max-device-width:375px){
		.qtybtn{
			width: 83% !important;
		}
	}
	@media only screen and (max-device-width:320px){
		.qtybtn{
			width: 200px !important;
		}
		.brandlogo{
			height: 100px;
		}
	}

	@media only screen and (max-device-width:280px){
		.qtybtn{
			width: 76% !important;
		}
		.brandlogo{
			height: 100px;
		}
	}

	.buybtn{
		margin-top: 17%;
	}
	.qtybtn{
		text-align: center;width: 150px;
		display: inline-block;
		height: calc(1.6em + 0.75rem + 2px);
    padding: 15px 0.75rem;
    font-size: 0.9rem;
    border-radius: 0px 4px 4px 0px;
    font-weight: 400;
    line-height: 1.6;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    margin-left: -3px;
    margin-right: -4px;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	}
@import url('https://fonts.googleapis.com/css?family=Roboto');
</style>

<section class="bg-img pt-150" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Coupon Purchase</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Coupons / Purchase</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
<section class="pt-130 pb-50">
<div class="container">
	<div class="card">
		<!-- <div class="row">
				    <div class="col-lg-12">
				        <a href="{{route('coupon_purchase.index')}}"><button class="btn btn-secondary float-right">Back</button></a>
				    
				    	
				    </div>
				</div> -->
		<form action="{{route('coupon_purchase.store')}}" method="POST" id="formId"> 
                    @csrf
		<div class="row sign-in-page" style="padding:20px">

			<div class="col-md-6 ">
				<div class="row" >
				    <div class="col-lg-12" style="padding-top: 5%;">
				        <!-- <a href="{{route('coupon_purchase.index')}}"><button class="btn btn-secondary float-right">Back</button></a> -->
				    <center>
				    	<img src="{{asset($details->brand->logo)}}" alt=""  class="brandlogo">
				    			    <br>	<br>
				    	
						<div class="radio-group">
							<?php $cnt=1; ?>
						@if(count($coupons) > 0 )	
				    	@foreach($coupons as $coupon)
				    		<?php
				    			$point = $coupon->point;
				    			$from  = $coupon->currency_code;
				    			$to    = Cookie::get('currency');
				    			// $to    =session('currency');

				    		?>
				    		<input type="radio" id="{{$coupon->point}}$" value="{{$coupon->point}}" name="amount" required="" @if($cnt == 1) checked="checked" @endif ><label for="{{$coupon->point}}$">{{$coupon->convert($from,$to,$point).' '.Cookie::get('currency')}}</label>
				    		<?php $cnt++; ?>
				    	@endforeach
				    	@endif
				    	</div>

				    	</center>
				    </div>
				</div>
				
			</div>

			<div class="col-md-6" >
				<h1 class="text-center" > {{$details->brand->name}}</h1>
				<div class="details">


					<p>
						{{$details->remarks}}
					</p>
					<input type="hidden" name="brand_id" value="{{$details->brand_id}}" >
					<input type="hidden" name="region" value="{{$details->location->name}}" >
					<input type="hidden" name="brand_name" value="{{$details->brand->name}}" >
					<table>
						<tr>
							<td><b>Region </b></td><td> : {{$details->location->name}}</td>
						</tr>

						<tr>
							<td><b>Category </b></td><td> : {{$details->coupon_category->category_name}}</td>
						</tr>

						<tr>
							<td><b>Expiry </b></td><td> : {{$details->expiry_date}}</td>
						</tr>

						

					</table>

					
					
					
					
					<!-- <p><b>Quantity:</b>
						<button onclick="decrement()">-</button>
						<input id=demoInput type=number min=1 max=100 style="text-align: center;">
						<button onclick="increment()">+</button>
					</p> -->
					<div class="row" style="padding-top:10px">

						<div class="col-md-6" >
							<!-- <p><b>Amount :</b>
								<select class="form-control" name="amount" id="currency_id" required="" onchange="get_amount(this.value)">
										<option value="">- Select Amount of Coupon -</option>
	                            <option value="10">10$</option>
	                        	<option value="20">20$</option>
	                        	<option value="30">30$</option>
	                        	<option value="40">40$</option>
	                        	<option value="50">50$</option>
	                     </select>
							 </p> -->

							 <p><b>Quantity:</b><br><br>
						<button class="btn btn-info" onclick="event.preventDefault();decrement()" style="border-radius: 4px 0px 0px 4px; padding:5px 8px;background-color: #ec3237;border-color: #ec3237;">-</button>
						<input class="form-control qtybtn" id=qty value="1"  name="quantity"  type=number min=1 max=100 style="text-align: center;">
						<button class="btn btn-info" onclick="event.preventDefault();increment()" style="border-radius: 0px 4px 4px 0px; padding: 5px 8px;background-color: #ec3237;border-color: #ec3237;">+</button>
					</p>
						</div>

					

						<!-- <div class="col-md-6" id="select_currency">
							<p><b>Currency :</b> 
							<select class="form-control" name="currency" id="currency_id" required="">
										<option value="" disabled="disabled">- Select Currency -</option>
	                            <option value="USD">USD</option>
	                        </select>

	                  </p>      
						</div> -->
						</form>

     <div class="col-md-6">
	<!-- <p><b>Quantity:</b> -->
	<button class="btn btn-success form-control buybtn" type="button" onclick="check_data()">Buy Coupon</button>
</div>
                    

               </div> 

               </div  >    
					
					</div>

					

				</div>
				
				
			</div>
			
		</div>
			
			
	</div>
</div>

</section>
<div id="confirm" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="ml-auto" style="padding: 10px;">
										<!-- <a href="{{url('/skiplocation')}}">Skip >></a> -->
										
									</div>
									<div class="modal-body popbody text-center">
										 <span class="">Are You Sure You Want to Buy This Coupon? </span>
										{{-- <a href="" class="btn-close float-right" style="margin-top: -20px;
									">X</i></a> --}}
									</div>
									<div class="modal-footer text-center d-block" style="padding-top: 10px;text-align: center;">
										<button type="button" class="btn btn-secondary" data-dismiss="modal" id="delete" style="color: white;border:black;background: #7b7878;padding: 5px 9px;margin-bottom: 5px;">Cancel</button>
										<button style="color: white;border:black;background: #276194;padding: 6px 9px; border-radius:4px;" onClick='submitDetailsForm()'>Confirm</button>
									</div>
									
								</div>
							</div>
						</div>
<script>

   function increment() {
      document.getElementById('qty').stepUp();
      // get_amount();
   }
   function decrement() {
      document.getElementById('qty').stepDown();
      // get_amount();
   }

   function get_amount(){
   	var amount = $("input[name='amount']:checked").val();
   	
   	qty  = $('#qty').val();
   	amount = amount * qty;

   	// alert(amount);
   	img_src = "{{asset('/loading.gif')}}";
   	img = '<img style="padding-top:10px" src="'+img_src+'">';
   	$('#select_currency').html(img);
   	currency = $('#currency_id').val();
		 $.ajax({
            method: "POST",
            url: "{{url('/coupon_purchase/select_currency')}}",
            data: {
                'currency': currency,
                'amount': amount,
                
                '_token': '{{csrf_token()}}'
            },
            success: function(data) {
            	// console.log(data);
            	// alert('ok');
            	
            	$('#select_currency').html(data);
            }

        });
   }
   function check_data() {
		// var address = $('#address_id').val();
		// var time_slot = $('#delivery_slot').val();

		// if (address && time_slot) {
			$('#confirm').modal('show');
			// $("#checkout_id").submit();
		} 
	
	
</script>
<script language="javascript" type="text/javascript">
    function submitDetailsForm() {
       $("#formId").submit();
    }
</script>
@endsection