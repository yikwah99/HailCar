<?php
if(!isset($_SESSION))
  session_start(); 
if(isset($_POST['submit']))
{
  include_once("database.php");
  $phoneNo=$_POST['phoneNo'];
  $password=$_POST['password'];
  
  $sql = "select * from user WHERE phoneNo='".$phoneNo."'  AND password='".$password."';";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  if(!$row){
    $check="Wrong Username and Password";
  }
  else
  {
    $_SESSION['phoneNo'] =$phoneNo;
    $_SESSION['firstVisit']= 1;
    //sweetalert();
    
    header('location:dashboard.php');
  }

}
?>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0">
    <title>Hail Car Login</title>
    <link rel="shortcut icon" href="img/hailFav.png"/>
    <!--Styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.17.0/slimselect.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/stylesheetCJ.css">
    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.17.0/slimselect.min.js"></script>
    <script type="text/javascript">
    window.onload=function(){
      if(window.jQuery){$(document).ready(function(){
        $(".sidebarNavigation .navbar-collapse").hide().clone().appendTo("body").removeAttr("class").addClass("sideMenu").show();$("body").append("<div class='overlay'></div>");
        $(".navbar-toggle, .navbar-toggler").on("click",function(){$(".sideMenu").addClass($(".sidebarNavigation").attr("data-sidebarClass"));$(".sideMenu, .overlay").toggleClass("open");
        $(".overlay").on("click",function(){$(this).removeClass("open");$(".sideMenu").removeClass("open")})});
        $("body").on("click",".sideMenu.open .nav-item",function(){if(!$(this).hasClass("dropdown")){$(".sideMenu, .overlay").toggleClass("open")}});
        $(window).resize(function(){
          if($(".navbar-toggler").is(":hidden")){$(".sideMenu, .overlay").hide()
        }else{$(".sideMenu, .overlay").show()}})})
      }else{console.log("sidebarNavigation Requires jQuery")}}

    </script>
  </head>

  <body class="shadow-lg rounded" style="background-color: #ecd434;
  background-image: linear-gradient(148deg, #ecd434 33%, #ff4b00 94%);
  ">
    <div class="container">
        <div class="pb-5 pt-3"><a class="navbar-brand text-white" style='letter-spacing:0.2em' href="index.php"><h4>HAIL</h4></a></div>

      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin shadow-lg">
            <div class="card-body">
              <h3 class="card-title text-center">Sign In</h3>
                <hr>

              <form action="#" method="post" class="form-signin">
                  Sign in to your account
                <div class="form-label-group my-4">
                  <input type="tel" id="inputPhoneNo" class="form-control" placeholder="Phone Number" name="phoneNo" pattern="[0-9]{10}" required autofocus>
                </div>

                <div class="form-label-group my-4">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <input class="btn btn-lg btn-block bg-warning" type="submit" name="submit" value="Submit" class="button">
              </form>
            </div>
          </div>
          <div class="text-right text-white h6"><a class="text-white h6" href="register.php">Create new account</a></div>
        </div>
      </div>
    </div>
     <?php 
  //function sweetalert() {
    //echo"<script type='text/javascript'>
    //Swal.fire('Login successful','Welcome to HAIL!','success')
    //</script>";
  //}
  ?>
  </body>
 
</html>