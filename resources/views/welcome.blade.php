@extends('layouts.web')
@section('content')

<!-- <div class="outer-top-ts top-banner">
    <div class="container">
        <img class="img-responsive" src="{{asset('web/assets/images/banners/top-banner.png')}}" alt="">
    </div>
</div> -->
<style type="text/css">
  @media (max-width: 700px)
{
  .flip .container .box {
   
    margin: 5px 0px -70px 0px !important;
    }

}
</style>


<div class="container">


<div class="slider-section">

  <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder"> 
  <div id="hero">
      <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        <div class="item" style="background-image: url({{asset('web/assets/images/sliders/new_banner.jpg')}});">
          <div class="container-fluid">
            <div class="caption bg-color vertical-center text-left">
              <!-- <div class="slider-header fadeInDown-1">Top Brands</div> -->
              <!-- <div class="big-text fadeInDown-1"> Swiz </div> -->
              <!-- <div class="excerpt fadeInDown-2 hidden-xs"> <span>The Limitless</span> </div> -->
              <!-- <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Sign In</a> </div> -->
            </div>
            <!-- /.caption --> 
          </div>
          <!-- /.container-fluid --> 
        </div>
        <!-- /.item -->
        
        <div class="item" style="background-image: url({{asset('web/assets/images/sliders/new_banner.jpg')}});">
          <div class="container-fluid">
            <div class="caption bg-color vertical-center text-left">
              <!-- <div class="slider-header fadeInDown-1">Spring 2019</div> -->
              <!-- <div class="big-text fadeInDown-1"> Women Fashion </div> -->
              <!-- <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</span> </div> -->
              <!-- <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Sign In</a> </div> -->
            </div>
            <!-- /.caption --> 
          </div>
          <!-- /.container-fluid --> 
        </div>
        <!-- /.item --> 
        
      </div>
      <!-- /.owl-carousel --> 
    </div>
  </div>
</div>

 </div>    




   <div class="container">
      <div class="row">
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-12"> 
       
        
          <!-- ============================================== STORES SECTION ============================================== -->
        <!-- <section class="section featured-section wow fadeInUp">
        <h2>Stores For You</h2>
        <div class="featured-product">
          <div class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-3.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                 <!--  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Baseball</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div> -->
            <!-- /.item -->
           <!--  <div class="item item-carousel">
              <div class="products">
                
               <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-10.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                  <!-- </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Flipmart</a></h3>
                      </div>

                </div>
                
              </div> -->
              <!-- /.products --> 
            <!-- </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-14.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                  <!-- </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Amazon</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div> -->
            <!-- <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-6.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                 <!--  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Babywise</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div> -->
            <!-- <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-5.png')}}" alt=""> 
                              </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                  <!-- </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Electromax</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-7.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                  <!-- </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Beautycart</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
           <!--  </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-8.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                  <!-- </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Furnicor</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div> -->
            <!-- /.item -->
            
            <!-- <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-9.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                 <!--  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Harrier</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div> -->
            <!-- /.item -->
            
            <!-- <div class="item item-carousel">
              <div class="products">
              <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-2.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
<!--                   </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Petscare</a></h3>
                      </div>

                </div> -->
                
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div> -->
            <!-- /.item -->
            
            <!-- <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-11.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                 <!--  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Totaltoys</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div> -->
            <!-- /.item -->
            
           <!--  <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-12.png')}}" alt=""> 
                             </a>
                          
                          </div> -->
                    <!-- /.image -->
                                        
                  <!-- </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Organatic</a></h3>
                      </div>

                </div> -->
                <!-- /.product --> 
                
              <!-- </div> -->
              <!-- /.products --> 
            <!-- </div> -->
            <!-- /.item --> 
          <!-- </div> -->

          <!-- /.home-owl-carousel --> 
          <!-- </div> -->
        <!-- </section> -->
        <!-- /.section --> 
        <!-- ============================================== stores : END ============================================== -->
        
        
         <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-bs">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{asset('web/assets/images/banners/home-banner1.jpg')}}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            
            <div class="col-md-6 col-sm-6">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{asset('web/assets/images/banners/home-banner3.jpg')}}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            </div>

        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        

      
       
       
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-bs">
          <div class="row">
            <div class="col-md-12">
              <div class="cnt-strip">
                <div class="image1"> <img class="img-responsive" src="{{asset('web/assets/images/banners/home-banner.jpg')}}" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">Amazing Opportunity<br>
                      <span class="shopping-needs">Get Ready To Wonder With Us</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">NEW</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            
            
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        </div>
        </div>
        </div>
        
    
<!-- ============================================== Coupons  ============================================== -->

        <section class="section coupons-section">
    <center> <h3 class="section-title" >Latest Coupons</h3> <br></center>

          @include('include.coupons')




       
        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div>
     <img class="img-responsive" src="{{asset('web/assets/images/coupons/img1.jpg')}}" alt="">
      <h3 class="mb-20">Flat 40% off hotel bookings in 10 cities</h3>
      <div class="coupon-content">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. 
<span style="color: #ed6663; display:block; margin-top:10px;"><a style="color: #ed6663; text-decoration:underline" href="#">Visit our Store</a></span>
</div>

</div>



        <div><h6 class="color-mid">Click below to get your coupon code</h6>
        <div class="copy-coupon-wrap">
        <input type="text" value="X132-17GT-OL57" id="X132-17GT-OL571" class="coupon-code">
</div></div>
      </div>
      
      <div class="modal-footer">
      <h4>Subscribe to Mail</h4>
      <p>Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
      <form id="mc4wp-form-2" class="mc4wp-form mc4wp-form-1257" method="post" data-id="1257" data-name="dealdots">
      <div class="mc4wp-form-fields">
      <div id="container_form_news">
<div id="container_form_news2">
<input type="email" id="newsletter1" name="EMAIL" placeholder="Your email address" required>
<button type="submit" class="button subscribe"><span>Subscribe</span></button>
</div>
</div></div>
</form>
      </div>
     
    </div>

  </div>
</div>
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
          <div class="container">  
          <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12"> 
        <!-- ============================================== BLOG SLIDER ============================================== -->
       <!--  <section class="section blog-section outer-bottom-xs wow fadeInUp">
          <h3 class="section-title">Latest Opportunity</h3>
          <div class="latest-blog">
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_01.jpg')}}" alt=""></a> </div>
                  </div> -->
                  <!-- /.blog-post-image -->
                  
                  <!-- <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                    <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                   </div> -->
                  <!-- /.blog-post-info --> 
                  
                <!-- </div> -->
                <!-- /.blog-post --> 
              <!-- </div> -->
              <!-- /.item -->
              
              <!-- <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_02.jpg')}}" alt=""></a> </div>
                  </div> -->
                  <!-- /.blog-post-image -->
                  
                  <!-- <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                   </div> -->
                  <!-- /.blog-post-info --> 
                  
                <!-- </div> -->
                <!-- /.blog-post --> 
              <!-- </div> -->
              <!-- /.item --> 
              
              <!-- /.item -->
              
              <!-- <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_03.jpg')}}" alt=""></a> </div>
                  </div> -->
                  <!-- /.blog-post-image -->
                  
                 <!--  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div> -->
                  <!-- /.blog-post-info --> 
                  
                <!-- </div> -->
                <!-- /.blog-post --> 
              <!-- </div> -->
              <!-- /.item -->
              
              <!-- <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_01.jpg')}}" alt=""></a> </div>
                  </div> -->
                  <!-- /.blog-post-image -->
                  
                  <!-- <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div> -->
                  <!-- /.blog-post-info --> 
                  
                <!-- </div> -->
                <!-- /.blog-post --> 
              <!-- </div> -->
              <!-- /.item -->
              
             <!--  <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_02.jpg')}}" alt=""></a> </div>
                  </div> -->
                  <!-- /.blog-post-image -->
                  <!-- 
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                  </div> -->
                  <!-- /.blog-post-info --> 
                  
                <!-- </div> -->
                <!-- /.blog-post --> 
              <!-- </div> -->
              <!-- /.item --> 
              
            <!-- </div> -->
            <!-- /.owl-carousel --> 
          <!-- </div> -->
          <!-- /.blog-slider-container --> 
          <!-- </div> -->
        <!-- </section> -->
        <!-- /.section --> 
        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
       
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        </div>
       </div> 
       </div>



@endsection