<?php
  $page_title = "Hail Services";
  include "header.php";
?>

<!--<header class="masthead">
    <div class="container jumbotron-padding  text-center">
    <h1 class="paral text-white">Our Transportation services</h1>
       <p class="paral">
          <a href="" class="btn btn-lg btn-warning btn-circle my-4 mr-3">Check Out Now</a>
       </p>
    </div>
  </header>-->
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('img/hail1.jpg'); background-size: cover;">
          <div class="carousel-caption d-md-block">
            <h3 class="display-4 font-weight-bold text-white ">HAIL Car</h3>
            <p class="lead">This is a description for the first slide.</p>
              <button type="button" href="#tabs" id="btnCar" class="btn btn-lg btn-warning btn-circle my-4 mr-3">Check Out Now</button>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('img/carpooling.jpg'); background-size: cover;">
          <div class="carousel-caption  d-md-block">
            <h3 class="display-4 font-weight-bold text-white">HAIL Share</h3>
            <p class="lead">This is a description for the second slide.</p>
                <button type="button" href="#tabs" id="btnShare" class="btn btn-lg btn-warning btn-circle my-4 mr-3">Check Out Now</button>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item"style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('img/passenger.jpg'); background-size: cover;">
          <div class="carousel-caption  d-md-block">
            <h3 class="display-4 font-weight-bold text-white">Just HAIL</h3>
            <p class="lead">This is a description for the third slide.</p>
              <button type="button" href="#tabs" id="btnJust" class="btn btn-lg btn-warning btn-circle my-4 mr-3">Check Out Now</button>
          </div>
        </div>
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('img/gps.jpg'); background-size: cover;">
          <div class="carousel-caption d-md-block">
            <h3 class="display-4 font-weight-bold text-white">HAIL Rent</h3>
            <p class="lead">This is a description for the third slide.</p>
            <button type="button"  href="#tabs" id="btnRent" class="btn btn-lg btn-warning btn-circle my-4 mr-3">Check Out Now</button>

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
  </header>


  <!-- Tabs -->
  <section id="tabs">
  	<div class="container">
  		<h1 class=" section-title text-center text-dark ">HAIL Transportation Services</h1>
  		<div class="row shadow" >
  			<div class="col-xs-12 ">
  				<nav>
  					<div class="nav nav-tabs nav-fill" id="my-tab-content" role="tablist">
  						<a class="nav-item nav-link active" id="hailCar" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">HAIL Car</a>
  						<a class="nav-item nav-link" id="hailShare" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">HAIL Share</a>
  						<a class="nav-item nav-link" id="justHail" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Just HAIL </a>
  						<a class="nav-item nav-link" id="hailRent" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">HAIL Rent</a>
  					</div>
  				</nav>
  				<div class="tab-content py-3 px-3 px-sm-0" style="background-color: #f9f9f9;" id="nav-tabContent">

  					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="container" >
                <h2 class="py-4 px-3 text-dark" >What is HAIL Car?</h2>
                <div class="">
                  <p class="info pt-2 pb-4 px-3  text-dark text-justify" style="font-size:20px;"><span class="font-weight-bold text-warning">HAIL Car</span> is a ride-sharing and request-for-a-ride mode of transportation where customers book a ride via their mobile apps.
                     Drivers are acquired via mobile app request which only take less than a minute and will fetch you on your pick-up location! While taxi are to be hailed from the streets in order to get a ride.</p>
                </div>
                <h2 class="px-4 py-4 text-dark" >Why Should You Use HAIL Car?</h2>
            	<div class="row">
            		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            						<div class="our-services-wrapper mb-60">
            							<div class="services-inner">
            								<div class="our-services-img">
            								<img src="img/money.png" width="88px" alt="">
            								</div>
            								<div class="our-services-text">
            									<h4>Transparent, Fixed Fares</h4>
            									<p>Know your exact fare even before you book and ride.</p>
            								</div>
            							</div>
            						</div>
            					</div>
            					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            						<div class="our-services-wrapper mb-60">
            							<div class="services-inner">
            								<div class="our-services-img">
            								<img src="img/car-crash.png" width="98px" alt="">
            								</div>
            								<div class="our-services-text">
            									<h4>Personal Insurance </h4>
            									<p>We’ve got your back when you enter a HailCar.</p>
            								</div>
            							</div>
            						</div>
            					</div>
            					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            						<div class="our-services-wrapper mb-60">
            							<div class="services-inner">
            								<div class="our-services-img">
            								<img src="img/car-insurance.png" width="88px" alt="">
            								</div>
            								<div class="our-services-text">
            									<h4>Quality Drivers</h4>
            									<p>Every HailCar driver is rigorously screened and rated (by you) to ensure you get the best service.</p>
            								</div>
            							</div>
            						</div>
            					</div>
            	</div>
            </div>
            <div class="container serv ">
              <div class="row">
                      <div class="col-xs-12" >
                          <h2 class="px-5 py-4 text-dark" >How it works</h2>
                    <!-- design process steps-->
                    <!-- Nav tabs -->
                    <div id="workTab">
                    <ul class="nav nav-tabs process-model more-icon-preocess"  role="tablist" >
                      <li role="presentation" class=""><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab"><i class="fa fa-search" aria-hidden="true"></i>
                        </a></li>
                      <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><i class="fa fa-send-o" aria-hidden="true"></i>
                        <p>Strategy</p>
                        </a></li>
                      <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab"><i class="fa fa-qrcode" aria-hidden="true"></i>
                        <p>Optimization</p>
                        </a></li>
                      <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        <p>Content</p>
                        </a></li>
                      <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"><i class="fa fa-clipboard" aria-hidden="true"></i>
                        <p>Reporting</p>
                        </a></li>
                    </ul>

                    <!-- end design process steps-->
                    <!-- Tab panes -->
                    <div class="tab-content" >
                      <div role="tabpanel" class="tab-pane active" id="discover">
                        <div class="design-process-content">
                          <h3 class="semi-bold">Discovery</h3>
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                         </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="strategy">
                        <div class="design-process-content">
                          <h3 class="semi-bold">Strategy</h3>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="optimization">
                        <div class="design-process-content">
                          <h3 class="semi-bold">Optimization</h3>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                           </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="content">
                        <div class="design-process-content">
                          <h3 class="semi-bold">Content</h3>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="reporting">
                        <div class="design-process-content">
                          <h3>Reporting</h3>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat. </p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
  					</div>

  					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="container" >
                <h2 class="py-4 px-3 text-dark" >What is HAIL Share?</h2>
                <div class="">
                  <p class="info pt-2 pb-4 px-3  text-dark text-justify" style="font-size:20px;"><span class="font-weight-bold text-warning">HAIL Share </span>is a shared Hail ride that allows you to spilt the cost of your ride with a stranger who is headed in a similiar direction as you.</p>
                </div>
                <h2 class="px-4 py-4 text-dark" >Share the ride. Enjoy lower fares.</h2>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/match.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>Match, Share & Save</h4>
                              <p>Share rides whenever and wherever you want with the HAILCar's driver and passengers </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/blow.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>Lower fares up to 30%</h4>
                              <p>The fare shown on the app is the ride fare you pay (excluding toll charges)</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/hailshare.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>Reduce your carbon footprint</h4>
                              <p>Share a ride with other passengers will help the environment</p>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
  					</div>
  					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <div class="container" >
                <h2 class="py-4 px-3 text-dark" >What is Just HAIL ?</h2>
                <div class="">
                  <p class="info pt-2 pb-4 px-3  text-dark text-justify" style="font-size:20px;"><span class="font-weight-bold text-warning">Just HAIL </span>
                   automatically assigns the nearest vehicle, either a car or taxi, to you at an upfront fixed fare.
                   Having more vehicles also allows us to get you a ride much faster than any other app in Malaysia.</p>
                </div>
                  <h2 class="px-4 py-4 text-dark" >Why Should You Use Just HAIL?</h2>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/alow.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>Fixed Fares, Transparent</h4>
                              <p>Enjoy guaranteed upfront fixed fares for any JustGrab ride, regardless of whether it’s a car or a taxi.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/speedClock.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>Quick and Safe</h4>
                              <p>Get a ride faster as HAIL assigns you the nearest vehicle, either a car or a taxi, from our combined fleet of HAILCars and HAILTaxis.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/xtra.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>No extra charges</h4>
                              <p>Traditional taxi surcharges such as booking fees and midnight charges no longer apply to JustGrab fares.</p>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
              <h2 class="px-4 py-4 text-dark" >Our cars & taxis come together so you can be on your way faster!</h2>
              <div class="text-center">
              <img src="img/justhail.png" width="70%" class="center mx-auto pb-4" alt="">
            </div>
            </div>
  					</div>
  					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
              <div class="container" >
                <h2 class="py-4 px-3 text-dark" >What is HAIL Rent?</h2>
                <div class="">
                  <p class="info pt-2 pb-4 px-3  text-dark text-justify" style="font-size:20px;"><span class="font-weight-bold text-warning">HAIL Rent </span>
                along with a driver, for up to 12 hours, at competitive rates. Whether you’d like to visit attraction spots, go on a food tour, run business errands, or simply roam around, we’re at your service. No advance booking needed.</p>
                </div>
                <h2 class="px-4 py-4 text-dark" >Why Rent A HAIL Rent?</h2>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/stopclock.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>No pre-booking required</h4>
                              <p>Book your ride instantly when you need it and your car will arrive within minutes.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/analysis.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>Flexible range of hourly packages</h4>
                              <p>Choose from a wide range of hourly packages to suit your needs.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                          <div class="services-inner">
                            <div class="our-services-img">
                            <img src="img/fee.png" width="88px" alt="">
                            </div>
                            <div class="our-services-text">
                              <h4>Competitive prices</h4>
                              <p>All hourly packages are priced comparable to market rates inclusive of fuel & driver charges.</p>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
  					</div>
  				</div>

  			</div>
  		</div>
  	</div>
  </section>



 <div class="section-block-grey bg-warning">
    <div class="container">
        <div class="section-heading center-holder">
            <h3>Our Services / Offering</h3>
            <div class="section-heading-line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                <br>incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-gem"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Planning</h4>
                        <h5>Business Planning</h5> </div>
                    <div class="section-heading-line-left"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fas fa-cogs"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Management</h4>
                        <h5>Retirement Planning</h5> </div>
                    <div class="section-heading-line-left"></div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Accumulation</h4>
                        <h5>Support and Sell</h5> </div>
                    <div class="section-heading-line-left"></div>

                </div>
            </div>
        </div>
		<div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-shield-alt"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Security </h4>
                        <h5>Secure Business</h5> </div>
                    <div class="section-heading-line-left"></div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="far fa-clock"></i> </div>
                    <div class="serv-section-desc">
                        <h4>24/7 Available </h4>
                        <h5>All time available </h5> </div>
                    <div class="section-heading-line-left"></div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                    <div class="serv-section-desc">
                        <h4> Customer Support </h4>
                        <h5>Support and Sell</h5> </div>
                    <div class="section-heading-line-left"></div>

                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

var hailCar=document.getElementById("hailCar");
var hailShare=document.getElementById("hailShare");
var justhail=document.getElementById("justHail");
var rent=document.getElementById("hailRent");
var abcElements = document.querySelectorAll('.carousel-indicators li');
  var i = 2;
$("#btnCar").on("click",function(){

      $('#hailCar').tab("show");
      $('html, body').animate({
   scrollTop: $("#tabs").offset().top
 }, 1000);

/*  console.log("Clicked Share");
    $('#carouselExampleIndicators').carousel({
        pause: true,
        interval: false
    });
    console.log("Clicked Car");*/

});

$("#btnShare").on("click",function(){
      $('#hailShare').tab("show");
      $('html, body').animate({
   scrollTop: $("#tabs").offset().top
 }, 1000);

});

$("#btnJust").on("click",function(){
      $('#justHail').tab("show");
      $('html, body').animate({
   scrollTop: $("#tabs").offset().top
 }, 1000);

});

$("#btnRent").on("click",function(){
      $('#hailRent').tab("show");
      $('html, body').animate({
   scrollTop: $("#tabs").offset().top
 }, 1000);

});
// script for tab steps
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var href = $(e.target).attr('href');
        var $curr = $(".process-model  a[href='" + href + "']").parent();

        $('.process-model li').removeClass();

        $curr.addClass("active");
        $curr.prevAll().addClass("visited");
    });
// end  script for tab steps

</script>
<?php
  include "footer.php";
?>
