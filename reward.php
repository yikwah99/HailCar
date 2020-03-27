<?php
  $page_title = "Hail Rewards";
  include "header.php";
?>
<style>
  html{
    scroll-behavior: smooth;
  }
</style>

<div class="container">
  <div class=" text-center bg-white">
    <h1 class="display-4">HAIL Rewards</h1>
    <p class="lead">Hey there! HAIL provides services that only get better!</p>
    <div class="container"><img class="img-fluid" src="img/line2.png" alt="bigBG"></div>
    <p class="lead">The more you enjoy, the more you get rewarded!</p>
    <a class="btn btn-md btn-danger text-white zoom" href="#rewards">View Rewards</a>
    <hr>
  </div>

  <div class="container text-center">
      <h1 class="display-4">Ranking</h1>
    <div class="p-2 mb-2 text-white zoom" style="background:#cd7f32;">Bronze 0-250 Points</div>
    <div class="p-2 mb-2 text-white zoom" style="background:#C0C0C0;">Silver 250-750 Points</div>
    <div class="p-2 mb-2 text-white zoom" style="background:orange;">Gold 750-2000 Points</div>
    <div class="p-2 mb-2 text-white zoom" id="rewards" style="background:#6a0dad;">Platinum 2000 Points Above</div>
  </div>

  <div class="text-center mt-5">
    <h1 class="display-4 mb-5">Rewards</h1>

    <div class="container-fluid row text-center mb-5">
      <div class="col-sm-6">
        <div class="card glowCard">
          <div class="card-body">
            <h1 class=" text-center text-danger mt-3">50% Off</h1>
            <h4 class=" text-center text-warning mt-3">HAIL CAR</h4>
            <p class="card-title">50% off your next HailCar ride!</p>
          </div>
          <div class="card-footer text-muted bg-warning">
            <p><small> Exchange with 1000 Points.</small></p>
            <p class="mt-2">Expires in March 2020. T&C Applied.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card glowCard">
          <div class="card-body">
            <h1 class=" text-center text-danger mt-3">30% Off</h1>
            <h4 class=" text-center text-danger mt-3">HAIL FOOD</h4>
            <p class="card-title">30% off your next HailFood order! (Above RM25)</p>
          </div>
          <div class="card-footer text-muted bg-warning">
              <p><small> Exchange with 700 Points.</small></p>
              <p class="mt-2">Expires in August 2020. T&C Applied.</p>
            </div>
        </div>
      </div>
    </div>
    <div class="container-fluid row text-center mb-5">
      <div class="col-sm-6">
        <div class="card glowCard">
          <div class="card-body">
            <h1 class=" text-center text-danger mt-3">45% Off</h1>
            <h4 class=" text-center text-info mt-3">HAIL EXPRESS</h4>
            <p class="card-title">45% off your next HailExpress delivery! (Above 40Kg)</p>
          </div>
          <div class="card-footer text-muted bg-warning">
              <p><small> Exchange with 800 Points.</small></p>
              <p class="mt-2">Expires in December 2020. T&C Applied.</p>
            </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card glowCard">
          <div class="card-body">
            <h1 class=" text-center text-danger mt-3">Free Delivery</h1>
            <h4 class=" text-center text-danger mt-3">HAIL FOOD</h4>
            <p class="card-title">Free delivery on one HailFood order! (applies only on weekdays)</p>
          </div>
          <div class="card-footer text-muted bg-warning">
              <p><small> Exchange with 100 Points.</small></p>
              <p class="mt-2">Expires in May 2020. T&C Applied.</p>
            </div>
        </div>
      </div>
    </div>
    <div class="container-fluid row text-center mb-5">
      <div class="col-sm-6">
        <div class="card glowCard">
          <div class="card-body">
            <h1 class=" text-center text-danger mt-3">10% Off</h1>
            <h4 class=" text-center text-success mt-3">HAIL SHARE</h4>
            <p class="card-title">10% Offer from original fees of your SHARE ride during the weekend!</p>
          </div>
          <div class="card-footer text-muted bg-warning">
              <p><small> Exchange with 500 Points.</small></p>
              <p class="mt-2">Expires in November 2020. T&C Applied.</p>
            </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card glowCard">
          <div class="card-body">
            <h1 class=" text-center text-danger mt-3">10% Off</h1>
            <h4 class=" text-center text-success mt-3">HAIL RENT</h4>
            <p class="card-title">10% Offer from original fees of your RENTAL for <br> the first 5 Hours!</p>
          </div>
          <div class="card-footer text-muted bg-warning">
              <p><small> Exchange with 500 Points.</small></p>
              <p class="mt-2">Expires in November 2020. T&C Applied.</p>
            </div>
        </div>
      </div>
    </div>
    <br>
    <br>
  </div>


<?php
  include "footer.php";
?>
