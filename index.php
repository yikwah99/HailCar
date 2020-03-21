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
  <h1 class="display-4 text-center">Welcome To</h1><h1 class="display-4 text-warning text-center">HailCar</h1>
  <p class="lead"></p>
  <hr class="my-4">
  <p class="lead text-center">
    <a class="btn btn-warning btn-lg" href="#" role="button">Learn More</a>
  </p>
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
