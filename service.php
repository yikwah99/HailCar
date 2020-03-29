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
            <p class="lead">Chauffeured cars for your every need.</p>
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
  		<h1 class=" text-center text-warning font-weight-bold pb-4 ">HAIL Transportation Services</h1>
  		<div class="row shadow" >
  			<div class="col-xs-12 ">
  				<nav>
  					<div class="nav nav-tabs nav-fill" id="tabServ" role="tablist">
  						<a class="nav-item nav-link active" id="hailCar" data-toggle="tab" href="#cars" role="tab" aria-controls="nav-home" aria-selected="true">HAIL Car</a>
  						<a class="nav-item nav-link " id="hailShare" data-toggle="tab" href="#share" role="tab" aria-controls="nav-profile" aria-selected="false">HAIL Share</a>
  						<a class="nav-item nav-link" id="justHail" data-toggle="tab" href="#just" role="tab" aria-controls="nav-contact" aria-selected="false">Just HAIL </a>
  						<a class="nav-item nav-link" id="hailRent" data-toggle="tab" href="#rent" role="tab" aria-controls="nav-about" aria-selected="false">HAIL Rent</a>
  					</div>
  				</nav>
  				<div class="tab-content py-3 px-3 px-sm-0" style="background-color: #f9f9f9;" id="nav-tabContent">

  					<div class="tab-pane fade show active" id="cars" role="tabpanel" aria-labelledby="nav-home-tab">
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
                  <!--    <div class="">


                    <!  <h2 class="px-4 py-4 text-dark" >Private cars for your everyday needs.</h2>
                      <button type="button" class="btn btn-lg btn-warning btn-circle float-right my-4 mr-3">Download Now</button>
                    </div>-->
            	</div>



            </div>

          <!--  <div class="container serv ">
              <div class="row">
                      <div class="col-xs-12" >
                          <h2 class="px-5 py-4 text-dark" >How it works</h2>
                    <!-- design process steps-->
                    <!-- Nav tabs --
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

                    <!-- end design process steps--
                    <!-- Tab panes --
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
            </div>-->
  					</div>

  					<div class="tab-pane fade" id="share" role="tabpanel" aria-labelledby="nav-profile-tab">
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
  					<div class="tab-pane fade" id="just" role="tabpanel" aria-labelledby="nav-contact-tab">
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
  					<div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="nav-about-tab">
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

                            <!--        <div class="row bg-white " id="howRent">
                                        <div class="col-md-12 col-lg-4  bg-warning">
                                          	<h1 class=" section-title text-center text-dark font-weight-bold py-5  ">Something different on Hail Rent</h1>

                                            <p class="text-muted text-justify px-3 py-3 ">Downlod HAIL in your smartphone and enjoy the services </p>
                                              <button type="button" class="btn btn-lg btn-secondary btn-circle w-100 text-center my-4 mr-3">Download Now</button>
                                        </div>
                                          <div class="col-md-12 col-lg-8 ">
                                            <div id="carouselIndicators" class="carousel slide " data-ride="carousel">
                                              <ol class="carousel-indicators">
                                                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselIndicators" data-slide-to="3"></li>
                                              </ol>
                                              <div class="carousel-inner" role="listbox">

                                                <div class="carousel-item active" style="background-image:  url('img/rent1.png'); background-size: cover;">

                                                </div>
                                                <div class="carousel-inner" role="listbox">

                                                  <div class="carousel-item " style="background-image:  url('img/rent2.png'); background-size: cover;">
                                                  </div>
                                                  <div class="carousel-inner" role="listbox">

                                                    <div class="carousel-item " style="background-image:  url('img/rent3.png'); background-size: cover;">
                                                    </div>
                                                    <div class="carousel-inner" role="listbox">

                                                      <div class="carousel-item " style="background-image:  url('img/rent3.png'); background-size: cover;">
                                                      </div>

                                                  </div>
                                                  <div class="carousel-inner" role="listbox">

                                                    <div class="carousel-item " style="background-image:  url('img/rent4.png'); background-size: cover;">
                                                    </div>

                                                </div>
                                                </div>
                                              </div>
                                              <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(50%);"></span>
                                                <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(50%);"></span>
                                                <span class="sr-only">Next</span>
                                              </a>
                                            </div>
                                          </div>
                                    </div>
              </div>-->

            </div>
  					</div>
  				</div>

  			</div>
  		</div>
  	</div>
  </section>


                    <!--  <div class="row">
                          <div class="col-md-6 how-img">
                              <img src="https://image.ibb.co/dDW27U/Work_Section2_freelance_img1.png" class="rounded-circle img-fluid" alt=""/>
                          </div>
                          <div class="col-md-4">
                              <h4>Find rewarding projects</h4>
                                          <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                                          <p class="text-muted">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations.
                                              Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work.
                                              More and more success. The greater the success you have on projects, the more likely you are to get hired by clients that use GetLance.</p>
                          </div>
                      </div>-->
                      <div class="container">


                      <div class="row bg-white mx-1" id="howHail">
                        <div class="col-md-12 col-lg-4 pb-5 ">
                            <h1 class=" section-title text-center text-warning font-weight-bold pt-5  ">How it Works for HAIL Car/ Just Hail/ HailShare ?</h1>
                          <!--  <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>-->
                            <p class="text-muted text-justify px-3 py-3 ">Downlod HAIL in your smartphone and enjoy the services </p>
                            <div class="d-none d-lg-block" >
                                <button type="button" class=" d-md-none d-lg-block btn btn-lg btn-warning btn-circle w-100 text-center my-4 mr-3 " data-toggle="modal" data-target="#login" data-toggle="modal" data-target="#login">Download Now</button>
                            </div>
                        </div>
                            <div class="col-md-12 col-lg-8 ">
                              <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselIndicators" data-slide-to="2"></li>

                                </ol>
                                <div class="carousel-inner " role="listbox">
                                  <!-- Slide One - Set the background image for this slide in the line below -->
                                  <div class="carousel-item active" style="background-image:  url('img/step1.png'); background-size: cover;">
                                  </div>

                                    <!-- Slide One - Set the background image for this slide in the line below -->
                                    <div class="carousel-item " style="background-image:  url('img/step2.png'); background-size: cover;">
                                    </div>

                                      <!-- Slide One - Set the background image for this slide in the line below -->
                                      <div class="carousel-item " style="background-image:  url('img/step3.png'); background-size: cover;">
                                      </div>

                                </div>
                                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(50%);"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(50%);"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                          <div class="col-md-12 col-lg-4 d-lg-none pb-5 ">
                                  <button type="button" class="btn btn-lg btn-warning btn-circle w-100 text-center my-4 mr-3 " data-toggle="modal" data-target="#login">Download Now</button>
                            </div>
                            </div>
                      </div>
                    </div>
                    </div>

                      <div class="container">

                      <div class="row bg-white mx-1 d-none pb-5" id="howRent">
                          <div class="col-md-12 col-lg-4  ">
                            	<h1 class=" section-title text-center text-warning font-weight-bold py-5  ">Something different on HAIL Rent</h1>
                            <!--  <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>-->
                              <p class="text-muted text-justify px-3 py-3 ">Downlod HAIL in your smartphone and enjoy the services </p>
                              <div class="d-none d-lg-block" >
                                  <button type="button" class=" d-md-none d-lg-block btn btn-lg btn-warning btn-circle w-100 text-center my-4 mr-3 " data-toggle="modal" data-target="#login" data-toggle="modal" data-target="#login">Download Now</button>
                              </div>

                          </div>
                            <div class="col-md-12 col-lg-8 ">
                              <div id="carouselRent" class="carousel slide " data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselRent" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselRent" data-slide-to="1"></li>
                                  <li data-target="#carouselRent" data-slide-to="2"></li>
                                  <li data-target="#carouselRent" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                  <!-- Slide One - Set the background image for this slide in the line below -->
                                  <div class="carousel-item active" style="background-image:  url('img/rent1.png'); background-size: cover;">
                                  </div>

                                    <!-- Slide One - Set the background image for this slide in the line below -->
                                    <div class="carousel-item " style="background-image:  url('img/rent2.png'); background-size: cover;">
                                    </div>

                                      <!-- Slide One - Set the background image for this slide in the line below -->
                                      <div class="carousel-item " style="background-image:  url('img/rent3.png'); background-size: cover;">
                                      </div>
                                      <!-- Slide One - Set the background image for this slide in the line below -->
                                      <div class="carousel-item " style="background-image:  url('img/rent4.png'); background-size: cover;">
                                      </div>

                                </div>
                              </div>
                                <a class="carousel-control-prev" href="#carouselRent" role="button" data-slide="prev" onclick="$('#carouselRent').carousel('prev')">
                                  <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(50%);"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselRent" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(50%);"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                              <div class="col-md-12 col-lg-4 d-lg-none pb-5 ">
                                      <button type="button" class="btn btn-lg btn-warning btn-circle w-100 text-center my-4 mr-3 " data-toggle="modal" data-target="#login">Download Now</button>
                                </div>
                            </div>
                      </div>
                </div>
                </div>



  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg rounded " >
        <div class=" text-center py-3 ">
          <button type="button" class="close pr-2 text-warning" data-dismiss="modal" aria-label="Close">
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



 <!--<div class="section-block-grey ">
    <div class="container">
        <!--<div class="section-heading center-holder">
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
</div>-->


<script type="text/javascript">

var hailCar=document.getElementById("hailCar");
var hailShare=document.getElementById("hailShare");
var justhail=document.getElementById("justHail");
var rent=document.getElementById("hailRent");
var how1=document.getElementById("howHail");
var how2=document.getElementById("howRent");


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

 how1.classList.add("d-none");
 how2.classList.remove("d-none");


});

$("#hailRent").on("click",function(){

 how1.classList.add("d-none");
 how2.classList.remove("d-none");


});



</script>
<?php
  include "footer.php";
?>
