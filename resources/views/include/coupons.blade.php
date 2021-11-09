
<head>
	





<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');



.flip {
    /*min-height: 100vh;*/
    display: flex;
    align-items: center;
    justify-content: center
}

.flip .container {
    transform-style: preserve-3d
}

.flip .container .box {
    position: relative;
    width: 300px;
    height: 300px;
    margin: 3.5% 3.5% -3.5% 3.5%;
    transform-style: preserve-3d;
    perspective: 1000px;
    cursor: pointer
}

.flip .container .box .body {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: 0.9s ease
}

.flip .container .box .body .imgContainer {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 70%;
    transform-style: preserve-3d;
    background: white;
    
    box-shadow: 0px 0px 10px 1px;
     border-radius: 10px;
}

.flip .container .box .body .imgContainer img {
    position: absolute;
    /*top: 0;*/
    left: 0%;
    width: 100%;
    height: 100%;
    /*object-fit: cover*/
    border-radius: 10px;
}

.flip .container .box .body .content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 70%;
    background: #333;
    backface-visibility: hidden;
    transform-style: preserve-3d;
    transform: rotateY(180deg);
    color: white;
}

.flip .container .box:hover .body {
    transform: rotateY(180deg)
}

.flip .container .box .body .content div {
    transform-style: preserve-3d;
    padding: 20px;
    background: linear-gradient(45deg, #FE0061, #FFEB3B);
    transform: translateZ(100px)
}

.flip .container .box .body .content div h3 {
    letter-spacing: 1px
}

.flip_btn:hover {
  /*background-color: #ec3237 !important;*/
  color: black !important;
  border-color:black !important;

}



</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

@if(count($coupons) > 0)
<div class="flip">

<div class="container d-flex align-items-center justify-content-center flex-wrap row">
   @foreach($coupons as $coupon)
    <div class="box col-md-4">
        <div class="body">
        <div class="imgContainer">
         <center>
          <img src="{{$coupon->brand->logo}}?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> 
         </center>
        </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
               
                <div>
                    <h3 class="text-white fs-5">{{$coupon->brand->name}}</h3>
                    <p class="fs-6 text-white">{{$coupon->coupon_category->category_name}}</p>
                    <a href="{{route('coupon_purchase.show',$coupon->brand_id)}}" >
                    <button class="btn flip_btn" style="background-color: #5bc0de00;border-color: #ffffff;color:#ffffff ;">Buy Coupon</button>
                </a>
                </div>
            </div>
        </div>
    </div>

  @endforeach 


</div>
</div>

@endif
