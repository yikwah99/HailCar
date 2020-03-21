<?php
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
  <link rel="stylesheet" type="text/css" href="css/newCssForAll.css">
  <!--Scripts-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.17.0/slimselect.min.js"></script>
</head>
<body>
  <!--Nav-->
  <!--LOGO-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-white sticky-top mb-0 " id="top">
    <div class="container-fluid ml-0">
      <a class="navbar-brand ml-0 mb-0 mt-1 text-warning" style='letter-spacing:0.2em' href="index.php"><h4>HailCar</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col-md-7"></div>
      <div class="collapse navbar-collapse col-md-6" id="navbarResponsive">
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link text-warning" href="viewSubmissionHistory.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="maintainMaterial.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="viewSubmissionHistory.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="maintainMaterial.php">Hail Pay</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="viewSubmissionHistory.php">Hail Reward</a>
            </li>
            <li class="nav-item">
              <!-- avatar drop down -->
            </li>
          </ul>
      </div>
    </div>
  </nav>
<!--END Nav-->
<!-- Web Body-->
  <div id="content">
