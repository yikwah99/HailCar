<?php
  $page_title = "Hail Express Services";
  include "header.php";
?>

<header class="masthead">
    <div class="container jumbotron-padding  text-center">
    <h3 class="display-4 font-weight-bold text-white ">HAIL Express Delivery Services</h3>
       <p class="paral text-white">
         An on-demand delivery service that is safe, fast, and reliable
       </p>
         <button type="button" href="conEx" id="btnEx" class="btn btn-lg btn-warning btn-circle my-4 mr-3">Check Out Now</button>
    </div>
  </header>

  <div class="container" id="conEx">
      <h2 class="px-4 py-4 text-dark" >Why Should You Use HAIL Express?</h2>
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="our-services-wrapper mb-60">
                <div class="services-inner">
                  <div class="our-services-img">
                  <img src="img/stopwatch.png" width="88px" alt="">
                  </div>
                  <div class="our-services-text">
                    <h4>Fast and Convenient Delivery Service </h4>
                    <p>Instantly book a door to door delivery for your documents and parcels</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="our-services-wrapper mb-60">
                <div class="services-inner">
                  <div class="our-services-img">
                  <img src="img/tick.png" width="88px" alt="">
                  </div>
                  <div class="our-services-text">
                    <h4>Delivered Safely and with Care</h4>
                    <p>Hand over your parcels to our well-trained drivers, and track the delivery real-time.</p>
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
                    <h4>Competitive Pricing</h4>
                    <p>Competitive upfront fixed fares for all deliveries</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="our-services-wrapper mb-60">
                <div class="services-inner">
                  <div class="our-services-img">
                  <img src="img/shield.png" width="88px" alt="">
                  </div>
                  <div class="our-services-text">
                    <h4>Deliver with Peace of Mind </h4>
                    <p>Every delivery is insured for up to RM 500</p>
                  </div>
                </div>
              </div>
            </div>

    </div>

  </div>
  <section class="bg-warning">


<div class="container ">

  <h2 class="pb-4 text-dark font-weight-bold text-center" >HAIL Express Package Guide</h2>
  <div class="table-responsive ">
   <table class="table table-bordered table-hover table-light table-striped shadow w-100">
    <thead class="thead-dark">
    <tr>
     <th colspan="2" class="text-center" style="font-size:22px;">HAIL Express</th>
    </tr>
     </thead>
     <tr>
      <td> Size </td>
      <td>43cm x 43cm x 43cm</td>
     </tr>
     <tr>
      <td> Weight</td>
      <td>Below 10kg</td>
     </tr>

 </table>
</div>
</div>
</section>




<!--<div class="container ">

<h2 class="pb-4 text-dark font-weight-bold text-center" >HAIL Express Rates</h2>
<div class="table-responsive ">
 <table class="table table-bordered table-hover table-light table-striped shadow w-100">
  <thead class="thead-dark">
  <tr>
   <th colspan="2" class="text-center" style="font-size:26px;">Fare</th>
  </tr>
   </thead>
   <tr>
    <td> Base fare</td>
    <td>RM3.60</td>
   </tr>
   <tr>
    <td> Weight</td>
    <td>Below 10kg</td>
   </tr>
   <tr>
    <td> Per km rate</td>
    <td>First 0-6km +RM0.60</td>
    <td>Next 10-20km +RM1.00</td>
    <td>Next additional km +RM2.00</td>
   </tr>


</table>
</div>
</div>
</section>-->

<div class="container mb-5" id="ex">
  <h2 class="pb-4 text-dark font-weight-bold text-center" >HAIL Express Rates</h2>
	<div class="row">
<div class="col-md-6 col-lg-6 pb-5 border border-white rounded">
    <img class=" imgEx" src="img/parcel.jpg" alt="delivery">
    <div class="overlay oEx ">
    <button type="button" class=" textEx btn btn-lg btn-warning btn-circle  text-center  " data-toggle="modal" data-target="#download" data-toggle="modal" data-target="#login">Try It Now</button>
  </div>
</div>
		<div class="col-md-6 col-lg-6 ">

			<ul class="timeline">
				<li>
					<h3>Base fare</h3>
				<!--	<a href="#" class="float-right">21 March, 2014</a>-->
					<p>RM3.60</p>
				</li>
				<li>
					<h3>Per km rate</h3>

					<p>First 0-6km +RM0.60</p>
          	<p>Next 6-10km +0.70</p>
            <p>Next 10-20km +RM1.00</p>
				</li>
				<li>
          <h3>Surcharge between 11am to 2pm and 6pm to 9pm</h3>
          <p>Between RM3-5; depending on supply and demand conditions</p>

				</li>
			</ul>
		</div>
	</div>
</div>



  <div class="modal fade" id="download" tabindex="-1" role="dialog" aria-hidden="true">
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
$("#btnEx").on("click",function(){

      $('html, body').animate({
   scrollTop: $("#conEx").offset().top
 }, 1000);

});

</script>
<?php
  include "footer.php";
?>
