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
      <h5 class="card-title text-center">Share a ride to travel around the city with lower PRICES.</h5>

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

<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 darken" src="img/taxi2.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 darken" src="img/taxi3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
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
</div>

<div class="mb-5" id="aboutUs"><br><br></div>
<!-- About Us -->
<div class="container-fluid bg-white">
  <h2 class="text-center mt-5 mb-5">About Us</h2>
  <div class="col-md-12 row">
    <div class="col-md-6">
      <h3 class="text-warning text-center">Aim</h3>
      <p>The website was originally designed to support very minimal tasks, with even more minimal interaction between the user and itself. These tasks include:
        <ul>
        <li>Allowing users to log in to their own accounts.</li>
        <li>Allowing users to check their own personal loyalty rewards</li>
        <li>Allowing users to send inquiries in the form of an email via the complaint box in the ‘Contact Us’ page.</li>
        <li>Navigate to either the Google Play Store or Apple App Store to download and install the official HAIL application into the user’s personal devices.</li>
        <li>Navigate the user to each of HAIL’s official social media pages to find out more about HAIL’s current affairs.</li>
        <li>Educate all users about the services HAIL provides for them and how to make the most of them.</li>
        <ul>
      </p>
    </div>
    <div class="col-md-6">
      <h3 class="text-warning text-center">Purpose</h3>
      <p>The HAIL website was designed to be an informative website that provides essential information regarding HAIL’s services towards its current and prospective users.
         HAIL as a service provider is conceptualised similarly to that of Grab, Uber or Lyft.
         It is an e-hailing service but the website itself does not include any e-hailing functions.<p><br>
         The targeted users of the website are people who are interested to find out more about HAIL, or people who would like to make enquiries about the services HAIL provides.
         For instance, to learn about HAIL’s services, payment methods or rewards system, there are corresponding pages for each respective topic and of course, designated contact details are provided on
         all pages of the website.</p>
      </p>
    </div>
  </div>
</div>

<!-- FAQ -->
<div class="container-fluid bg-white" id="faq">
  <h2 class="text-center mt-5 mb-5">FAQ</h2>
    <button class="accordion bg-warning font-weight-bold">What is HAIL Car or HAIL Share</button>
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
<div class="container-fluid bg-white" id="contactUs">
  <h1 class="text-center mt-5 mb-5">Contact Us</h1>

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
