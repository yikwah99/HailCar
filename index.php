<?php
  $page_title = "HailCar Home";
  include "header.php";
?>
<style>
  html{
    scroll-behavior: smooth;
    overflow-x:hidden;
  }
  .accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  }

  .panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
  }

  #mainServices{
    position: relative;
    top: 50px;
  }
</style>

<div class="card bg-dark text-white">
  <img class="img-fluid" src="img/taxi2s.jpg" alt="bigBG" style="filter:brightness(40%);">
  <div class="card-img-overlay text-center mt-5 theTile">
    <h1 class="display-3 text-white">Welcome To</h1>
    <h1 class="display-3 text-warning zoom">HAIL</h1>
    <h6 class="text-white">Introducing the future of e-Hailing.</h6><br><br>
    <a class="btn btn-lg btn-warning text-dark glow" href="#mainServices">Learn More</a>
  </div>
</div>
<div class="container" id="mainServices">
</div><div><br><br><br><br><br>
</div>

<h1 class="display-4 text-center text-warning mb-5">Main Services</h1>
<div class="container-fluid row text-center">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h4 class=" text-center text-warning mt-3">HAIL CAR</h4>
        <img class="card-img-top darken rounded img-fluid p-2" src="img/taxi3.jpg" alt="Card image cap">
        <p class="card-title">Book a ride to travel around the beautiful CITY.</p>
      </div>
      <div class="card-footer text-muted">
          <a class="btn btn-block btn-warning text-dark glow">Learn More</a>
        </div><br>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h4 class="text-center text-success mt-3">HAIL SHARE</h4>
        <img class="card-img-top darken rounded img-fluid p-2" src="img/carpooling.jpg" alt="Card image cap">
        <p class="card-title">Share a ride to travel around the city with lower PRICE.</p>
      </div>
      <div class="card-footer text-muted">
          <a class="btn btn-block btn-warning text-dark glow">Learn More</a>
        </div><br>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h4 class=" text-center text-danger mt-3">HAIL FOOD</h4>
        <img class="card-img-top darken rounded img-fluid p-2" src="img/pizza.jpg" alt="Card image cap">
        <p class="card-title">We can deliver delicious food to satisfy your CRAVINGS.</p>
      </div>
      <div class="card-footer text-muted">
          <a class="btn btn-block btn-warning text-dark glow">Learn More</a>
        </div><br>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h4 class=" text-center text-info mt-3">HAIL EXPRESS</h4>
        <img class="card-img-top darken rounded img-fluid p-2" src="img/parcel4.jpg" alt="Card image cap ">
        <p class="card-title"> We can deliver your PARCEL across the city safely and as fast as possible.</p>
      </div>
      <div class="card-footer text-muted">
          <a class="btn btn-block btn-warning text-dark glow">Learn More</a>
        </div><br>
    </div>
  </div>
</div>

<div class="mb-5" id="aboutUs"><br><br></div>
<!-- About Us -->
<div class="container-fluid p-5 bg-warning">
  <div class="col-md-12 row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h1 class="display-4 text-center text-white">About Us</h1>
          <p class="text-center text-dark"> The HAIL website was designed to be an informative website that provides essential information regarding HAIL’s services towards its current and prospective users.
             HAIL as a service provider is conceptualised similarly to that of Grab, Uber or Lyft.
             It is an e-hailing service but the website itself does not include any e-hailing functions.
             The targeted users of the website are people who are interested to find out more about HAIL, or people who would like to make enquiries about the services HAIL provides.
             For instance, to learn about HAIL’s services, payment methods or rewards system, there are corresponding pages for each respective topic and of course, designated contact details are provided on
             all pages of the website.</p>
          </p>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

<!-- FAQ -->
<div class="mb-5" id="faq"><br><br></div>
<div class="container bg-white mt-5 mb-5">
  <h1 class="display-4 text-center text-warning mt-5 mb-5">FAQ</h1>
    <button class="accordion bg-warning text-center">What is HAIL Car or HAIL Share?</button>
    <div class="panel bg-light">
    <p>HAIL Car/ HAIL Share is a service with a combined fleet of taxis and cars at affordable upfront fixed prices.</p>
    </div>

    <button class="accordion bg-warning text-center">How do i book a ride?</button>
    <div class="panel bg-light">
    <p>Select Hail Car or Hail Share and type in your destination, then sit back and relax until your ride to arrive. <br>In addition, if you are worry that the rider may not find your location, type in your location manually.</p>
    </div>

    <button class="accordion bg-warning text-center">Do I pay metered fees for my ride?</button>
    <div class="panel bg-light">
    <p>No, your ride will be calculated in the system. Also, it is fixed, except tolls fee.</p>
    </div>
</div>

<!-- Contact Us -->
<div class="mb-5" id="contactUs"><br><br></div>
<div class="container-fluid bg-white mt-5 mb-5">
  <h1 class="display-4 text-center text-warning mt-5 mb-5">Contact Us</h1>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <p class="text-dark zoom">Dylan Ch'ng</p>
        <p class="text-dark zoom">Dominic Lee</p>
        <p class="text-dark zoom">Liew Cai Juan</p>
        <p class="text-dark zoom"> Kam Yik Wah</p>
        <br>
        <p class="text-dark lead mb-0">Kindaly approach us for any enquiries.</p>
        <br><br><br>
      </div>
    </div>
  </div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<?php
  include "footer.php";
?>
