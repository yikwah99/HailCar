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
</style>

<div class="jumbotron bg-white">
  <h1 class="display-4 text-center">Welcome To</h1>
  <h1 class="display-4 text-warning text-center mb-5 zoom">HailCar</h1>
    <p class="text-center">Main Services</p>
  <div class="card-group">
  <div class="card p-3">
    <h1 class="display-4 text-center text-warning">HAIL CAR</h1>
    <div class="card-body">
      <h5 class="card-title text-center">Book a ride to travel around the beautiful CITY.</h5>

      <button class="btn btn-block btn-warning">Go</button>
    </div>
  </div>
  <div class="card p-3">
    <h1 class="display-4 text-center text-success">HAIL SHARE</h1>
    <div class="card-body">
      <h5 class="card-title text-center">Share a ride to travel around the city with lower PRICE.</h5>

      <button class="btn btn-block btn-success">Go</button>
    </div>
  </div>
  <div class="card p-3">
    <h1 class="display-4 text-center text-info ">HAIL FOOD</h1>
    <div class="card-body">
      <h5 class="card-title">We can deliver delicious food to satisfy your CRAVINGS.</h5>

      <button class="btn btn-block btn-info">Go</button>
    </div>
  </div>
</div>
<div class="col-md-12 mt-5 mb-5 text-center">
  <a class="btn btn-outline-info zoom" href="#aboutUs">Learn More</a>
</div>
</div>



<div class="mb-5" id="aboutUs"><br><br></div>
<!-- About Us -->
<div class="container bg-white">
  <h3 class="text-center text-warning mt-5 mb-5">About Us</h3>
      <p>The HAIL website was designed to be an informative website that provides essential information regarding HAIL’s services towards its current and prospective users.
         HAIL as a service provider is conceptualised similarly to that of Grab, Uber or Lyft.
         It is an e-hailing service but the website itself does not include any e-hailing functions.
         The targeted users of the website are people who are interested to find out more about HAIL, or people who would like to make enquiries about the services HAIL provides.
         For instance, to learn about HAIL’s services, payment methods or rewards system, there are corresponding pages for each respective topic and of course, designated contact details are provided on
         all pages of the website.</p>
      </p>
</div>

<!-- FAQ -->
<div class="container bg-white mt-5 mb-5" id="faq">
  <h3 class="text-center text-warning mt-5 mb-5">FAQ</h3>
    <button class="accordion bg-warning font-weight-bold">What is HAIL Car or HAIL Share?</button>
    <div class="panel">
    <p>HAIL Car/ HAIL Share is a service with a combined fleet of taxis and cars at affordable upfront fixed prices.</p>
    </div>

    <button class="accordion bg-warning font-weight-bold">How do i book a ride?</button>
    <div class="panel">
    <p>Select Hail Car or Hail Share and type in your destination, then sit back and relax until your ride to arrive. <br>In addition, if you are worry that the rider may not find your location, type in your location manually.</p>
    </div>

    <button class="accordion bg-warning font-weight-bold">Do I pay metered fees for my ride?</button>
    <div class="panel">
    <p>No, your ride will be calculated in the system. Also, it is fixed, except tolls fee.</p>
    </div>
</div>

<!-- Contact Us -->
<div id="contactUs" class="container-fluid bg-white mt-5 mb-5" id="contactUs">
  <h3 class="text-center text-warning mt-5 mb-5">Contact Us</h3>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <p class="text-dark">Developers</p>
        <h4 class="text-dark display-4">Dylan Ch'ng</h4>
        <h4 class="text-dark display-4">Dominic Lee</h4>
        <h4 class="text-dark display-4">Liew Cai Juan</h4>
        <h4 class="text-dark display-4"> Kam Yik Wah</h4>
        <br>
        <p class="text-dark lead mb-0">Kindaly approach us for any enquiries.</p>
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
