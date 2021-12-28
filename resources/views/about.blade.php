@extends('layouts.web')

@section('content')
<style type="text/css">
	.wide-banners .image1 img {
		margin-top: 20px;
	}
</style>

<div class="container">
    <div class="row">
<div class="col-md-12">
   <div class="wide-banners wow fadeInUp outer-bottom-bs">
          <div class="row">
            <div class="col-md-12">
              <div class="cnt-strip">
                <div class="image1"> <img class="img-responsive" src="{{asset('assets/img/aboutbanner.jpg')}}" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <!-- <h2 class="text-right">Amazing Opportunity<br> -->
                      <!-- <span class="shopping-needs">Get Ready To Wonder With Us</span></h2> -->
                  </div>
                </div>
                <!-- <div class="new-label">
                  <div class="text">NEW</div>
                </div> -->
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            
            
          </div>
          <!-- /.row --> 
        </div>
    <div class="terms-conditions-page">
			<div class="row">

				<div class="col-md-12 terms-conditions">
	<h2 class="heading-title">About Us</h2>

	<div class="">
		<h3>Swizmart </h3>
		<ul>
			<li>Swizmart is a crypto commerce marketplace where you can buy top global brands by paying directly in cryptocurrencies. </li>
		</ul>
		<h3>Vision and Mission </h3>
    <ul>
      <li>Swiz will provide a platform for many real-life use cases where cryptocurrencies can be used for payments and other services, and make crypto easily usable to the fast-growing crypto community.</li>
    </ul>
	</div>
</div>			</div><!-- /.row -->
		</div>
</div>
</div>
</div>


@endsection