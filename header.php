<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; //Set this variable at each page ?></title>
  <link rel="shortcut icon" href="img/hailFav.png"/>
  <!--Styles-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.17.0/slimselect.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheetCJ.css">
    <link rel="stylesheet" type="text/css" href="css/newCssForAll.css">
  <!--Scripts-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.17.0/slimselect.min.js"></script>
  <script type="text/javascript">
  /*
  window.onload=function(){
    if(window.jQuery){$(document).ready(function(){
      $(".sidebarNavigation .navbar-collapse").hide().clone().appendTo("body").removeAttr("class").addClass("sideMenu").show();$("body").append("<div class='overlay'></div>");
      $(".navbar-toggle, .navbar-toggler").on("click",function(){$(".sideMenu").addClass($(".sidebarNavigation").attr("data-sidebarClass"));$(".sideMenu, .overlay").toggleClass("open");
      $(".overlay").on("click",function(){$(this).removeClass("open");$(".sideMenu").removeClass("open")})});
      $("body").on("click",".sideMenu.open .nav-item",function(){if(!$(this).hasClass("dropdown")){$(".sideMenu, .overlay").toggleClass("open")}});
      $(window).resize(function(){
        if($(".navbar-toggler").is(":hidden")){$(".sideMenu, .overlay").hide()
      }else{$(".sideMenu, .overlay").show()}})})
    }else{console.log("sidebarNavigation Requires jQuery")}}*/

  </script>
</head>
<!-- hide show nav -->
<body>
  <!--Nav-->
  <!--LOGO-->
  <nav class="navbar navbar-expand-md py-1 navbar-dark sticky-top bg-dark mb-0 sidebarNavigation" id="mainNav" data-sidebarClass="navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" style='letter-spacing:0.2em' href="index.php"><h4>HAIL</h4></a>
        <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon fas fa-bars fa-1x text-warning"></i>
        </button>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navBarUser" aria-controls="navBarUser" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon fa fa-user text-warning"></i>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav nav-flex-icons ">
                <?php if(!empty($_SESSION['phoneNo'])) { ?>
                  <li class="nav-item  mr-2">
                      <a class="nav-link text-white active" href="index.php#aboutUs">About Us</a>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white mr-2" href="#sv" id="dropdown01" role="button" data-toggle="dropdown" aria-haspopup="true"  data-hover="dropdown" aria-expanded="false">Services</a>
                    <div  id="sv" class="dropdown-menu bg-dark " aria-labelledby="dropdown01">
                      <a href="service.php#hailcar" class="dropdown-item  text-white"><h6>Transportation Services</h6></a>

                        <a href="service.php#hailcar" class="dropdown-item  text-white">Hail Car</a>
                      <a href="service.php#hailcar" class="dropdown-item  text-white"> Hail Share </a>
                        <a href="service.php#hailcar" class="dropdown-item  text-white">Just Hail </a>
                        <a href="service.php#hailcar" class="dropdown-item  text-white">Hail Rent</a>

                      <h6 class="dropdown-item text-white font-weight-bold">Delivery Services</h6>
                      <a href="express.php" class="dropdown-item  text-white">Hail Express</a>
                      <a href="food.php" class="dropdown-item  text-white">Hail Food</a>
                    </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white mr-2" href="">Hail Pay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mr-2" href="reward.php">Hail Reward</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white mr-2" href="index.php#contactUs">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white mr-2" href="index.php#faq">FAQs</a>
                </li>
                  <?php }else { ?>
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link text-white" href="index.php#aboutUs">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#sv" id="dropdown01" role="button" data-toggle="dropdown" aria-haspopup="true"  data-hover="dropdown" aria-expanded="false">Services</a>
                        <div  id="sv" class="dropdown-menu bg-dark px-5 py-5" aria-labelledby="dropdown01">
                          <a href="service.php#hailcar" class="dropdown-item  text-white">Hail Car</a>
                          <a href="service.php#hailcar" class="dropdown-item  text-white"> Hail Share </a>
                          <a href="service.php#hailcar" class="dropdown-item  text-white">Just Hail </a>
                          <a href="service.php#hailcar" class="dropdown-item  text-white">Hail Rent</a>
                          <a href="express.php" class="dropdown-item  text-white">Hail Express</a>
                          <a href="food.php" class="dropdown-item  text-white">Hail Food</a>
                        </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white px-3" href="hailpay.php">Hail Pay</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white px-3" href="index.php#contactUs">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white px-3" href="index.php#faq">FAQs</a>
                    </li>
                      <?php } ?>
            </ul>
           <!--  <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->

        </div>
        <div class="collapse navbar-collapse" id="navBarUser">
          <ul class="nav navbar-nav nav-flex-icons ml-auto">
          <?php if(!empty($_SESSION['phoneNo'])) { ?>
           <li class="nav-item">
                <a class="nav-link text-white pl-3 pr-4" href=""><i class="fas fa-columns pr-2"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white pl-3 pr-4" href="logout.php"><i class="fas fa-sign-out-alt pr-2"></i>Logout</a>
            </li>
            <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link text-white pl-3 pr-4" href="login.php"><i class="far fa-user pr-2"></i>Sign In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white pl-3 pr-4 " href="register.php">Sign Up</a>
        </li>
        	<?php } ?>
      </ul>
    </div>

    </div>
    </nav>

<!--END Nav-->
<!-- Web Body-->
  <div id="content">
