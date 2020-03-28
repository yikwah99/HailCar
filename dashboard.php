<?php
$page_title = "Hail Dashboard";
include "header.php";
if(!isset($_SESSION))
  session_start();
include_once("database.php");
//To retrieve user table
$phoneNo=$_SESSION['phoneNo'];
$firstName='';
$lastName='';
$email='';
$balance=0;
$point=0;
$result = mysqli_query($con,"SELECT * FROM user WHERE phoneNo='".$phoneNo."';");
if ($result->num_rows > 0) {
  while($row=mysqli_fetch_array($result)){
  $firstName=$row['firstName'];
  $lastName=$row['lastName'];
  $email=$row['email'];
  $balance=$row['balance'];
  $point=$row['point'];
  }
}
//To retrieve transaction table
$txresult = mysqli_query($con,"SELECT * FROM transaction WHERE phoneNo='".$phoneNo."';");

//date("Y-m-d h:ia")
//To display bootstrap alert
if ($_SESSION['firstVisit']==1){
  $_SESSION['firstVisit']=0;
  echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>Login Successful!
  Welcome to HAIL!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}
?>
<div class="container">
    <div class="jumbotron bg-white">
      <h1 class="display-4 text-center text-warning">Dashboard</h1>
  <!--dash -->
  <div class="container-fluid row text-center mb-5">
    <div class="col-sm-4">
      <div class="card border-warning">
        <div class="card-body">
          <h4 class=" text-center text-warning mt-3">HailPay Balance</h4>
          <p class="card-text">RM <?php echo $balance;?></p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card border-success">
        <div class="card-body">
          <h4 class="text-center text-success mt-3">Hail Points</h4>
            <p class="card-text"><?php echo $point;?></p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="">
        <div class="card-body p-0">
          <div class="m-3 text-light">
            <div class="card border">
              <div class="card-body" style="background:<?php
                    if ($point>2000){
                      echo"background-color: #933acb;background-image: linear-gradient(270deg, #933acb 31%, #840bb6 73%);";
                    }
                    else if($point>750){
                      echo"background-color: #dcde58;background-image: linear-gradient(270deg, #dcde58 31%, #e2b810 73%);";
                    }
                    else if($point>250){
                      echo"background-color: #bdb7b2;background-image: linear-gradient(270deg, #bdb7b2 31%, #877e77 73%);";
                    }
                    else{
                      echo"background-color: #c79332;background-image: linear-gradient(270deg, #c79332 31%, #ba7938 73%);";
                    }
                  ?>">
                <h5 class="card-title">Ranking</h5>
                <p class="card-text" >
                  <?php
                    if ($point>2000){
                      echo"Platinum";
                    }
                    else if($point>750){
                      echo"Gold";
                    }
                    else if($point>250){
                      echo"Silver";
                    }
                    else{
                      echo"Bronze";
                    }
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- dash end --><hr>
      <div class="row">
        <div class="col-7 ">
          <div class="h4 my-3">Enter Amount:</div>
          <div class="input-group my-3">
            <div class="input-group-prepend">
              <button class="btn btn-outline-success text-dark" type="button">RM20</button>
              <button class="btn btn-outline-success text-dark" type="button">RM50</button>
              <button class="btn btn-outline-success text-dark" type="button">RM100</button>
            </div>
            <input type="number" class="form-control border-success" placeholder="Preferred Amount" aria-label="" aria-describedby="basic-addon1" min="0">
          </div>
        </div>
        <div class="col-4 my-auto">
          <br><br>
          <button class="btn btn-block btn-info py-4">Top up</button>
        </div>
      </div>
    </div>

    <div class="mx-5 mt-5 mb-0 p-0">
      <h3 class="my-3 text-center">Transaction History</h3><hr>
      <div>
        <table class="table table-striped table-dark rounded-lg mt-0">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">TransactionNo</th>
              <th scope="col">Date</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php

            if ($txresult->num_rows > 0) {
              $i=1;
              while($txrow=mysqli_fetch_array($txresult)){
                echo "<tr><th scope='row'>".$i."</th>";
                echo "<td>".$txrow['transactionNo']."</td>";
                echo "<td>".$txrow['date']."</td>";
                echo "<td>".$txrow['amount']."</td></tr>";
                $i++;
              }
            }
            else{
              echo"<tr><td class='text-center' colspan='4'>No transaction found.</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
  </div>
</div>
