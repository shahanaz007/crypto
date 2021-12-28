@extends('layouts.web')

@section('content')


<div class="container">
    <div class="row">
    
    
      
      <div class="col-md-12"> 
      <div class="contact-page">
			<div class="row">
				<div class="col-md-12 contact-map outer-bottom-vs">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9006382974408!2d-0.07369948432193207!3d51.515038879636414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cb54b483e5d%3A0x5efef6c1fc3b504f!2sNew%20Drum%20St%2C%20London%20E1%207AT%2C%20UK!5e0!3m2!1sen!2sin!4v1639117996135!5m2!1sen!2sin" width="600" height="450" style="border:0"></iframe>
				</div>
				<div class="col-md-8 contact-form">
	<div class="col-md-12 contact-title">
		<h4>Contact Form</h4>
	</div>
	 @if (session('message'))
	 <div class="col-md-12">
				<div class="alert alert-info" role="alert">
					{{ session('message') }}
				</div>
			</div>
		    @endif
	<div class="col-md-4 ">
		<form class="register-form" role="form" action="{{url('contactus')}}" method="POST">
			{{csrf_field()}}
            {{method_field('POST')}}
           
			<div class="form-group">
		    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
		    <input type="text" class="form-control text-input" name="name" required="" id="exampleInputName" placeholder="">
		     @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
             @endif
		  </div>
		
	</div>
	<div class="col-md-4">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" class="form-control text-input" name="email" id="exampleInputEmail1" placeholder="" required="">
		     @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
             @endif
		  </div>
		
	</div>
	<div class="col-md-4">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
		    <input type="text" class="form-control text-input" name="title" id="exampleInputTitle" placeholder="Title" required="">
		     @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
             @endif
		  </div>
		
	</div>
	<div class="col-md-12">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
		    <textarea class="form-control unicase-form-control" required="" name="comment" id="exampleInputComments"></textarea>
		    @if ($errors->has('comment'))
                <span class="text-danger">{{ $errors->first('comment') }}</span>
             @endif
		  </div>
		
	</div>
	<div class="col-md-12 outer-bottom-small m-t-20">
		<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send Message</button>
	</div>
</div>
</form>
<div class="col-md-4 contact-info">
	<div class="contact-title">
		<h4>Information</h4>
	</div>
	<div class="clearfix address">
		<span class="contact-i"><i class="fa fa-map-marker"></i></span>
		<span class="contact-span">23 New Drum Street, London, England, E17AY</span>
	</div>
	<!-- <div class="clearfix phone-no">
		<span class="contact-i"><i class="fa fa-mobile"></i></span>
		<span class="contact-span">+(888) 123-4567<br>+(888) 123-4567</span>
	</div> -->
	<div class="clearfix email">
		<span class="contact-i"><i class="fa fa-envelope"></i></span>
		<span class="contact-span"><a href="#">info@swizmart.com</a></span>
	</div>
</div>			</div>
</div>
    </div>
    
    

		
</div>
</div>





@endsection