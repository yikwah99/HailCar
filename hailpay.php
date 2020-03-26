<?php
  $page_title = "HailCar Home";
  include "header.php";
?>
<div class= "container">
  <div class="row my-5 ">
    <div class="col-lg-10 col-md-12" >
      <h1>The next time you <span class="text-warning">Hail</span>, try <span class="text-warning">HailPay</span></h1>
      <hr>
      <h5>Going cashless is easy with the new <span class="text-warning">HailPay</span>! And no, it’s not just for credit/debit card users. This <span class="text-warning">Hail</span> Wallet also comes with <span class="text-warning">HailPay</span> Credits, which you can top up at any time. The best part is, this payment method isn’t just for your rides anymore.</h5>
    </div>
    <div class="col-2 d-none d-lg-block"><img width="70%" src=img/wallet.png></div>
  </div>
  <div class="my-5 w-100 text-center">
    <button class="btn btn-warning btn-lg text-white p-3 my-5">Try it now</button>
  </div>
  <div class="my-5">
    <div class="d-lg-none"><h2>How do I activate my HailPay Wallet?</h2></div>
    <div class="row bg-warning text-white">
      <div class="col-md-12 col-lg-8 px-0 h-100">
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/pay1.PNG" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/pay2.PNG" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/pay3.PNG" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/pay4.PNG" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-12 col-lg-4 align-center my-auto d-none d-lg-block">
        <h2>How do I activate my HailPay Wallet?</h2>
        <p>Here is how you can activate your GrabPay Wallet, by following the steps .</p>
      </div>
    </div>
  </div>
  <div>
    <h2>Where can you use <span class="text-warning">HailPay</span>?</h2>
    <hr class="my-5">
    <div class="row row-cols-1 row-cols-md-3 mb-5 ">
      <div class="card mb-4">
        <img class="card-img-top d-none d-lg-block" src="img/hail1.jpg" height="50%" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Rides</h5>
          <p class="card-text h6">No more waiting for change. Book your ride with credit/debit card or HailPay Credits, and you can happily carry on when you arrive at your drop-off point.</p>
        </div>
      </div>
      <div class="card mb-4">
        <img class="card-img-top d-none d-lg-block" src="img/hail2.jpg" height="50%" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">In-store Purchase</h5>
          <p class="card-text h6">If you find digging your wallet for change a hassle, we feel you. That’s why HailPay Credits are now accepted at some of your favourite stores!</p>
        </div>
      </div>
      <div class="card mb-4">
        <img class="card-img-top d-none d-lg-block" src="img/hail3.jpg" height="50%" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Credit Transfer</h5>
          <p class="card-text h6">Just a few clicks on your Hail app, and you’ll be able to transfer HailPay Credits to your loved ones.</p>
        </div>
      </div>
      <div class="card mb-4">
        <img class="card-img-top d-none d-lg-block" src="img/hail4.jpg" height="50%" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">HailFood</h5>
          <p class="card-text h6">Satisfy your hunger and cravings and pay for HailFood delivery orders seamlessly using credit/debit card or HailPay Credits!</p>
        </div>
      </div>
      <div class="card mb-4">
        <img class="card-img-top d-none d-lg-block" src="img/hail5.jpg" height="50%" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Prepaid Top Up</h5>
          <p class="card-text h6">You can now top-up your mobile phone credits directly on your Hail app.This service is available across all major telcos in Malaysia including Celcom, Digi, Maxis, U Mobile and TuneTalk.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include "footer.php";
?>