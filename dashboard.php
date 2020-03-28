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
<div>
  <div class="row border">
    <div class="text-white bg-warning p-5"><h2>Top up your wallet:</h2></div>
    <div class="col-4">
      <div class="h4 my-3">Enter Amount:</div>
      <div class="input-group my-3">
        <div class="input-group-prepend">
          <button class="btn btn-outline-dark text-dark" type="button">RM20</button>
          <button class="btn btn-outline-dark text-dark" type="button">RM50</button>
          <button class="btn btn-outline-dark text-dark" type="button">RM100</button>
        </div>
        <input type="number" class="form-control border-dark" placeholder="" aria-label="" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col-1 my-auto">
      <button class="btn btn btn-dark w-100 btn-lg py-4">Top up</button>
    </div>
  </div>
</div>
<div class="row py-3">
  <div class="col-sm-2 m-3">
    <div class="card border shadow-lg">
      <div class="card-body rounded-lg">
        <h5 class="card-title">HailPay Balance</h5>
        <p class="card-text">RM <?php echo $balance;?></p>
      </div>
    </div>
  </div>
  <div class="col-sm-2 m-3">
    <div class="card border shadow-lg">
      <div class="card-body rounded-lg">
        <h5 class="card-title">Hail Points</h5>
        <p class="card-text"><?php echo $point;?></p>
      </div>
    </div>
  </div>
  <div class="col-sm-2 m-3 text-light">
    <div class="card border shadow-lg">
      <div class="card-body rounded-lg" style="background:<?php
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

<div class="mx-5">
  <h3 class="my-3">Transaction History</h3>
  <div>
    <table class="table table-striped table-dark rounded-lg">
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
