@extends('layouts.web')
@section('content')

<!-- <div class="outer-top-ts top-banner">
    <div class="container">
        <img class="img-responsive" src="{{asset('web/assets/images/banners/top-banner.png')}}" alt="">
    </div>
</div> -->



<div class="container">


<div class="slider-section">

  <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder"> 
  <div id="hero">
      <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        <div class="item" style="background-image: url({{asset('web/assets/images/sliders/03.jpg')}});">
          <div class="container-fluid">
            <div class="caption bg-color vertical-center text-left">
              <div class="slider-header fadeInDown-1">Top Brands</div>
              <div class="big-text fadeInDown-1"> Swiz </div>
              <div class="excerpt fadeInDown-2 hidden-xs"> <span>The Limitless</span> </div>
              <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Sign In</a> </div>
            </div>
            <!-- /.caption --> 
          </div>
          <!-- /.container-fluid --> 
        </div>
        <!-- /.item -->
        
        <div class="item" style="background-image: url({{asset('web/assets/images/sliders/01.jpg')}});">
          <div class="container-fluid">
            <div class="caption bg-color vertical-center text-left">
              <div class="slider-header fadeInDown-1">Spring 2019</div>
              <div class="big-text fadeInDown-1"> Women Fashion </div>
              <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</span> </div>
              <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Sign In</a> </div>
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
        <section class="section featured-section wow fadeInUp">
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
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Baseball</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            <div class="item item-carousel">
              <div class="products">
                
               <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-10.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Flipmart</a></h3>
                      </div>

                </div>
                
              </div>
              <!-- /.products --> 
            </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-14.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Amazon</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-6.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Babywise</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-5.png')}}" alt=""> 
                              </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Electromax</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-7.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Beautycart</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-8.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Furnicor</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-9.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Harrier</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
              <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-2.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Petscare</a></h3>
                      </div>

                </div>
                
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-11.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Totaltoys</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="#">
                             <img src="{{asset('web/assets/images/brands/store-12.png')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->
                                        
                  </div>
                  <div class="product-info">
                    <h3 class="name"><a href="#">Organatic</a></h3>
                      </div>

                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>

          <!-- /.home-owl-carousel --> 
          </div>
        </section>
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
                    <h2 class="text-right">Amazing Sunglasses<br>
                      <span class="shopping-needs">Get 40% off on selected items</span></h2>
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
        <div class="container">
          <h3 class="section-title">Latest Coupons</h3>
          
          <div class="coupons-deals">
          <div class="owl-carousel home-owl-carousel1 custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                     <img class="img-responsive" src="{{asset('web/assets/images/coupons/img1.jpg')}}" alt="">
                    <div class="brand">Flipmart</div>
                           <h3 class="name"><a href="#">Flat 40% off on hotel bookings in 10 cities</a></h3>
                          
                          </div>
                    <!-- /.image -->
                    
                 
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                 <div class="discount">25% <span>OFF</span></div>
                 <div class="show-code"><a href="#" data-toggle="modal" data-target="#myModal">Show Code</a></div>
                  <p class="exp-date"><i class="fa fa-clock-o"></i> Expires on 2019-11-16</p>  
                  </div>
          
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
              
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                     <img class="img-responsive" src="{{asset('web/assets/images/coupons/img2.jpg')}}" alt="">
                    <div class="brand">Marazzo</div>
                           <h3 class="name"><a href="#">Get 15% off on shopping above $ 2000 at Vanitywagon</a></h3>
                          
                          </div>
                    <!-- /.image -->
                    
                 
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                 <div class="discount">15% <span>OFF</span></div>
                 <div class="show-code"><a href="#" data-toggle="modal" data-target="#myModal">Show Code</a></div>
                  <p class="exp-date"><i class="fa fa-clock-o"></i> Expires on 2019-11-16</p>  
                  </div>
          
                </div>
                <!-- /.product --> 
                
              </div>
            </div>
            <!-- /.item -->
            
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                     <img class="img-responsive" src="{{asset('web/assets/images/coupons/img3.jpg')}}" alt="">
                    <div class="brand">Qualis</div>
                           <h3 class="name"><a href="#"> Monsoon Sale: Upto 10% Off on Domestic Flight Bookings </a></h3>
                          
                          </div>
                    <!-- /.image -->
                    
                 
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                 <div class="discount">10% <span>OFF</span></div>
                 <div class="show-code"><a href="#" data-toggle="modal" data-target="#myModal">Show Code</a></div>
                  <p class="exp-date"><i class="fa fa-clock-o"></i> Expires on 2019-11-16</p>  
                  </div>
          
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
              
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                     <img class="img-responsive" src="{{asset('web/assets/images/coupons/img4.jpg')}}" alt="">
                    <div class="brand">Harrier</div>
                           <h3 class="name"><a href="#">Flat 90% off on night dinner hotel bookings</a></h3>
                          
                          </div>
                    <!-- /.image -->
                    
                 
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                 <div class="discount">90% <span>OFF</span></div>
                 <div class="show-code"><a href="#" data-toggle="modal" data-target="#myModal">Show Code</a></div>
                  <p class="exp-date"><i class="fa fa-clock-o"></i> Expires on 2019-11-16</p>  
                  </div>
          
                </div>
                <!-- /.product --> 
                
              </div>
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                     <img class="img-responsive" src="{{asset('web/assets/images/coupons/img1.jpg')}}" alt="">
                    <div class="brand">Flipmart</div>
                           <h3 class="name"><a href="#">Flat 40% off on hotel bookings in 10 cities</a></h3>
                          
                          </div>
                    <!-- /.image -->
                    
                 
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                 <div class="discount">25% <span>OFF</span></div>
                 <div class="show-code"><a href="#"  data-toggle="modal" data-target="#myModal">Show Code</a></div>
                  <p class="exp-date"><i class="fa fa-clock-o"></i> Expires on 2019-11-16</p>  
                  </div>
          
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                     <img class="img-responsive" src="{{asset('web/assets/images/coupons/img1.jpg')}}" alt="">
                    <div class="brand">Flipmart</div>
                           <h3 class="name"><a href="#">Flat 40% off on hotel bookings in 10 cities</a></h3>
                          
                          </div>
                    <!-- /.image -->
                    
                 
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                 <div class="discount">25% <span>OFF</span></div>
                 <div class="show-code"><a href="#" data-toggle="modal" data-target="#myModal">Show Code</a></div>
                 
                  <p class="exp-date"><i class="fa fa-clock-o"></i> Expires on 2019-11-16</p>  
                  </div>
          
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.home-owl-carousel --> 
          


            </div>
            <!-- /.item -->
            
            

          </div>
          
          </div>
          
         </div>
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
        <section class="section blog-section outer-bottom-xs wow fadeInUp">
          <h3 class="section-title">Latest form Blog</h3>
          <div class="latest-blog">
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_01.jpg')}}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                    <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                   </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
              
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_02.jpg')}}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                   </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item --> 
              
              <!-- /.item -->
              
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_03.jpg')}}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
              
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_01.jpg')}}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
              
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="{{asset('web/assets/images/blog-post/blog_big_02.jpg')}}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2019 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                  </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item --> 
              
            </div>
            <!-- /.owl-carousel --> 
          </div>
          <!-- /.blog-slider-container --> 
          </div>
        </section>
        <!-- /.section --> 
        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section wow fadeInUp">
          <h3 class="section-title">Flash Deals</h3>
          <div class="box-timer"><h5>Ends On:</h5>
              <div class="countbox_1 timer-grid"></div>
            </div>
          <div class="new-arriavls">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="deals-detail.html">
                             <img src="{{asset('web/assets/images/products/p10.jpg')}}" alt=""> 
                           </a>
                          
                          </div>
                    <!-- /.image -->
                    
                 
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   <div class="brand">Flipmart</div>
                    <h3 class="name"><a href="deals-detail.html">The Crash Bad Instant Folding long Twin Bed</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>                        <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="deals-detail.html">
                             <img src="{{asset('web/assets/images/products/p8.jpg')}}" alt=""> 
                          </a>
                          
                          </div>
                    <!-- /.image -->
 
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                  <div class="brand">Qualis</div>
                    <h3 class="name"><a href="deals-detail.html">Hampton Bay LED Light Ceiling Exhaust Fan</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>                        <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="deals-detail.html">
                             <img src="{{asset('web/assets/images/products/p7.jpg')}}" alt=""> 
                          </a>
                          
                          </div>
                    <!-- /.image -->

                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                  <div class="brand">Harrier</div>
                    <h3 class="name"><a href="deals-detail.html">Timberland Men’s Thorton Waterproof Boots</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>                        <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="deals-detail.html">
                             <img src="{{asset('web/assets/images/products/p15.jpg')}}" alt=""> 
                             </a>
                          
                          </div>
                    <!-- /.image -->

                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                  <div class="brand">Marazzo</div>
                    <h3 class="name"><a href="deals-detail.html">Buying a TV Is Easy When You Know These Terms</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>                        <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="deals-detail.html">
                             <img src="{{asset('web/assets/images/products/p7.jpg')}}" alt=""> 
                          </a>
                          
                          </div>
                    <!-- /.image -->

                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                  <div class="brand">Altima</div>
                    <h3 class="name"><a href="deals-detail.html">New and Refurbished Lenovo Laptops</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>                        <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="deals-detail.html">
                             <img src="{{asset('web/assets/images/products/p9.jpg')}}" alt=""> 
                          </a>
                          
                          </div>
                    <!-- /.image -->

                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                  <div class="brand">Nexus</div>
                    <h3 class="name"><a href="deals-detail.html">Hampton Bay LED Light Ceiling Exhaust Fan</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>                        <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
          </div>
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        </div>
       </div> 
       </div>


@endsection