<?php
  $page_title = "HailCar Home";
  include "header.php";
?>
<style>
  html{
    overflow-x:hidden;
  }
</style>

<div class="jumbotron bg-white">
  <h1 class="display-4 text-center">Welcome To</h1><h1 class="display-4 text-warning text-center mb-5 zoom">HailCar</h1>
  <div class="card-group">
  <div class="card p-3">
    <h1 class="text-center text-warning zoom">HAIL CAR</h1>
    <div class="card-body">
      <h5 class="card-title text-center">Book a ride to travel around the beautiful CITY.</h5>

      <button class="btn btn-block btn-warning">Go</button>
    </div>
  </div>
  <div class="card p-3">
    <h1 class=" text-center text-success zoom">HAIL SHARE</h1>
    <div class="card-body">
      <h5 class="card-title text-center">Share a ride to travel around the city with lower PRICES.</h5>

      <button class="btn btn-block btn-success">Go</button>
    </div>
  </div>
  <div class="card p-3">
    <h1 class="text-center text-info zoom">HAIL FOOD</h1>
    <div class="card-body">
      <h5 class="card-title">We can deliver delicious food to satisfy your CRAVINGS.</h5>

      <button class="btn btn-block btn-info">Go</button>
    </div>
  </div>
</div>
</div>
<div class="col-md-12 mb-5 text-center">
  <button class="btn btn-outline-warning animatedBtn">Learn More</button>
</div>

<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 darken" src="img/taxis.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 darken" src="img/taxis.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 darken" src="img/taxis.jpg" alt="Third slide">
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


<!-- About Us -->
<div class="container-fluid bg-white">
  <h1 class="text-center mt-5">About Us</h1>
  <br>
  <br>
  <br>
  <br>

</div>






<?php
  include "footer.php";
?>
