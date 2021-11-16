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
      <div class="checkout-box faq-page">
			<div class="row">
				<div class="col-md-12">
					<h2 class="heading-title">Frequently Asked Questions</h2>
					<span class="title-tag">Last Updated on November 16, 2021</span>
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	          <span>1</span>What is Swizmart ?
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
	    	SwizMart is a crypto commerce platform where crypto holders can shop directly by paying in crypto.			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					    <!-- checkout-step-02  -->
					  	<div class="panel panel-default checkout-step-02">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
						          <span>2</span>How Do I Deposit?	
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse">
						      <div class="panel-body">
						        You can click on the deposit menu (user->deposit), type the amount in Dollar, select the supported coin you want to deposit and click submit. You will get address and QR code for scanning. The amount converted in Dollar will get auto credited into your account once you succesfully deposited the coins to that address.
						      </div>
						    </div>
					  	</div>
					  	<!-- checkout-step-02  -->

						<!-- checkout-step-03  -->
					  	<div class="panel panel-default checkout-step-03">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
						       		<span>3</span>How to purchase A Coupon ?
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse">
						      <div class="panel-body">
						        You can goto "coupons" menu and select your region. click on any coupon you want to buy. then it will lead to a page where you can buy the coupon with required quantity and amount. you can purchase coupons only if you have the amount in your wallet.
						      </div>
						    </div>
					  	</div>
					  	<!-- checkout-step-03  -->

						<!-- checkout-step-04  -->
					    <div class="panel panel-default checkout-step-04">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
						        	<span>4</span>what happens after i purchase a Coupon ?
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFour" class="panel-collapse collapse">
							    <div class="panel-body">
							        We will send you the coupon through Email as soon as possible after the Verification. 
							    </div>
					    	</div>
						</div>
						<!-- checkout-step-04  -->

						<!-- checkout-step-05  -->
					  	<div class="panel panel-default checkout-step-05">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
						        	<span>5</span>How Do i contact Admin for any complaint/ Ticket ?
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFive" class="panel-collapse collapse">
						      <div class="panel-body">
						        You can make a complaint at any time from the "Complaints / Tickets" page. You have to select the subject and Descibe your issue with maximum details. We will respond you as soon as possible
						      </div>
						    </div>
					    </div>
					    <!-- checkout-step-05  -->

						<!-- checkout-step-06  -->
					  	<!-- <div class="panel panel-default checkout-step-06">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSix">
						        	<span>6</span>How long will it take to get my package ?
						        </a>
						      </h4>
						    </div>
					    	<div id="collapseSix" class="panel-collapse collapse">
					      		<div class="panel-body">
					        		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      		</div>
					    	</div>
					  	</div> -->
					  	<!-- checkout-step-06  -->

					  	<!-- checkout-step-07  -->
					  	<!-- <div class="panel panel-default checkout-step-07">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSeven">
						        	<span>7</span>What Shipping methods are available ?
						        </a>
						      </h4>
						    </div>
					    	<div id="collapseSeven" class="panel-collapse collapse">
					      		<div class="panel-body">
					        		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      		</div>
					    	</div>
					  	</div> -->
					  	<!-- checkout-step-07  -->

					  	

					  	
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div>
        
</div>
</div>
</div>





@endsection