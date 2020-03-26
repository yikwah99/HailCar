<head>
  <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0">
  <title>Hail Car Sign Up</title>
  <link rel="shortcut icon" href="img/hailFav.png"/>
  <!--Styles-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.17.0/slimselect.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/stylesheetCJ.css">
  <!--Scripts-->
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
background-image: linear-gradient(148deg, #ecd434 33%, #ff4b00 94%);">
  <div class="container">
      <div class="pb-2 pt-3"><a class="navbar-brand text-white" style='letter-spacing:0.2em' href="index.php"><h4>HAILCAR</h4></a></div>
      
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin shadow-lg">
          <div class="card-body">
            <h3 class="card-title text-center">Sign up</h3>
            <hr>
              
            <form class="form-signin">
                Create a new account
              <div class="form-label-group my-4">
                <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
              </div>
              <div class="form-label-group my-4 row">
                <div class="col">

                  <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col">

                  <input type="text" id="inputLastName" class="form-control" placeholder="Last Name" required>
                </div>
              </div>
              <div class="form-label-group my-4">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
              </div>
              <div class="form-label-group my-4 row">
                <div class="col">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" minlength="8" required>
                </div>
                <div class="col">
                  <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" minlength="8" required>
                </div>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="tncCheck" checked>
                <label class="custom-control-label" for="tncCheck">I have read and agree to the Terms and Condition</label>
              </div>
              
              <button class="btn btn-lg btn-block bg-warning" type="submit">Confirm</button>
            </form>
          </div>
        </div>
        <div class="text-right text-white">Already have an account? <a href="login.php" class="text-white"><u>Sign in</u></a></div>
      </div>
    </div>
  </div>
</body>