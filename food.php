<?php
  $page_title = "Hail Express Services";
  include "header.php";
?>
  <header class="masthead2">
    <div class="container jumbotron-padding  text-center">
    <h3 class="display-4 font-weight-bold text-white "><span class="text-danger">HAIL Food</span> Delivery Service</h3>
       <p class="paral text-white">
         Fast and reliable food delivery for satisfying your cravings
       </p>
         <a href="#foodCont" id="btnFood" class="btn btn-lg btn-warning btn-circle my-4 mr-3">Check Out Now</a>
    </div>
  </header>

  <div class="container" id="foodCont">
      <h2 class="px-4 py-4 text-dark" >Why Should You Use <span class="text-danger">HAIL Food</span>?</h2>
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="our-services-wrapper mb-60">
                <div class="services-inner">
                  <div class="our-services-img">
                  <img src="img/alarm.png" width="88px" alt="">
                  </div>
                  <div class="our-services-text">
                    <h4>Fast and Convenient Food Delivery Service </h4>
                    <p>Rapid door to door food delivery with plenty of good choices</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="our-services-wrapper mb-60">
                <div class="services-inner">
                  <div class="our-services-img">
                  <img src="img/bihun.png" width="88px" alt="">
                  </div>
                  <div class="our-services-text">
                    <h4>Nearby Restaurants can be easily found</h4>
                    <p>With the help of the GPS restaurants near you can be found and delivery will be made even faster</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="our-services-wrapper mb-60">
                <div class="services-inner">
                  <div class="our-services-img">
                  <img src="img/cmoney.png" width="88px" alt="">
                  </div>
                  <div class="our-services-text">
                    <h4>Cashless</h4>
                    <p>All payments can be made online through the HAIL PAY, Hassle Free!</p><a href="hailpay.php">Top Up Now!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="our-services-wrapper mb-60">
                <div class="services-inner">
                  <div class="our-services-img">
                  <img src="img/xtra.png" width="88px" alt="">
                  </div>
                  <div class="our-services-text">
                    <h4>No Hidden Charges</h4>
                    <p>Only delivery charges are to be made on each transaction</p><br>
                  </div>
                </div>
              </div>
            </div>

    </div>

  </div>
  <section class="bg-warning">


<div class="container">
  <h2 class="pb-4 text-dark font-weight-bold text-center" >HAIL Food Delivery Charges</h2>
  <div class="table-responsive ">
   <table class="table table-bordered table-hover table-light table-striped shadow w-100 text-center">
    <thead class="thead-dark">
    <tr>
     <th colspan="2" class="text-center" style="font-size:22px;">HAIL Food</th>
    </tr>
     </thead>
     <tr>
      <td> Distance  Less than 10KM</td>
      <td> RM 8</td>
     </tr>
     <tr>
      <td> Distance More than 15KM</td>
      <td> RM 10</td>
     </tr>
     <tr>
      <td> Distance  More than 20KM</td>
      <td> RM 18</td>
     </tr>
 </table>
</div>
</div>
</section>

<div class="container mb-5 mt-5" id="">
  <h2 class="pb-4 text-dark font-weight-bold text-center">How to Order?</h2>
	<div class="row">
    <div class="col-md-3"></div>
		<div class="col-md-6 col-lg-6 ">
			<ul class="timeline">
				<li>
					<h3>Download the HAIL Food Application</h3>
					<p>Available in Play Store and Apple Store</p>
				</li>
				<li>
					<h3>Register an Account</h3>
					<p>With Username and Password</p>
          	<p>Register your address for delivery</p>
            <p>Provide Contact Number so that the rider can contact you</p>
				</li>
        <li>
          <h3>Browse your Meal</h3>
          <p>Add the meal to cart</p>
				</li>
				<li>
          <h3>Sit Back & Relax</h3>
          <p>while waiting your food to arrive</p>
				</li>
        <li>
          <h3>Ready to be Served!</h3>
				</li>
			</ul>
		</div>
    <div class="col-md-3"></div>
	</div>
</div>

  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg rounded " >
        <div class=" text-center py-3 ">
          <button type="button" class="close pr-2 text-success" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-dark">Download The <span class="text-warning" > HAIL</span>  App Now</h4>

        </div>
        <div class="modal-body" >

          <div class="login px-2 mx-auto mw-100 ">
                <img class="d-block w-100" src="img/d.png" alt="Second slide">
                <div class="footer-app">
                <img src="img/appstore.png" class="app" alt="">
                  <img src="img/googleplay.png" class="w-50 " alt="">
                </img>

          </div>
        </div>

      </div>
    </div>
  </div>

  <script type="text/javascript">
  $("#btnFood").on("click",function(){

        $('html, body').animate({
     scrollTop: $("#foodCont").offset().top
   }, 1000);

  });

  </script>



</script>
<?php
  include "footer.php";
?>
