<?php
$page_title = "Hail Dashboard";

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
$amount=0;
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
//To Topup
if(isset($_POST['submit']))
{
  $amount = $_POST['amount'];
  if ($amount>0){
    //To create new transaction row
    mysqli_query($con,"INSERT INTO transaction (phoneNo,date,amount) VALUES ('".$phoneNo."','".date('Y-m-d H:i:s')."',".$_POST['amount'].");");
    $txresult = mysqli_query($con,"SELECT * FROM transaction WHERE phoneNo='".$phoneNo."';");
    //Add topup amount to balance
    mysqli_query($con,"UPDATE user SET balance = balance +".$_POST['amount']."  WHERE phoneNo='".$phoneNo."';");
    $amount=0;
    header('Location: ' . $_SERVER['PHP_SELF']);
  }
}
include "header.php";
?>
<section>
<div class="container ">
    <h1 class="display-4 text-center text-warning font-weight-bold">Dashboard</h1>
  <!--dash -->
    <div class="container-fluid row text-center ml-auto mt-5">
    	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-warning mb-60 shadow">
          <div class="card-body ">
            <h4 class=" text-center text-warning mt-3">HAIL Pay Balance</h4>
            <p class="card-text py-3">RM <?php echo $balance;?></p>
          </div>
        </div>
      </div>

    	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
      <div class="card border-success mb-60 shadow">
        <div class="card-body ">
          <h4 class="text-center text-success mt-3">Hail Points</h4>
            <p class="card-text py-3"><?php echo $point;?></p>
        </div>
      </div>
    </div>

  	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="card-body p-0 mb-60 shadow">
          <div class="text-light">
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
                <h4 class="text-center mt-3">Ranking</h4>
                <p class="card-text py-3" >
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
</section>
<!-- dash end --><hr>
<section>
<h1 class="display-4 text-center text-warning font-weight-bold pb-5">Top Up Now</h1>
  <form action="#" method="post" >
        <div class="row justify-content-center ">

          <div class=" col-md-10 col-lg-8">
            <div class="h4 my-3">Enter Amount:</div>
            <div class="input-group my-3">
              <div class="input-group-prepend">
                <button class="btn  btn-lg btn-outline-success text-dark " type="button" onclick="document.getElementById('amount').value=20">RM20</button>
                <button class="btn  btn-lg btn-outline-success text-dark " type="button" onclick="document.getElementById('amount').value=50">RM50</button>
                <button class="btn  btn-lg btn-outline-success text-dark " type="button" onclick="document.getElementById('amount').value=100">RM100</button>
              </div>
                <input type="number" id="amount" class="form-control form-control-lg border-success p-3" placeholder="Preferred Amount" aria-label="" aria-describedby="basic-addon1" min="0" name="amount">
                <!-- Button trigger modal -->
                  <div class="input-group-append">
                <button type="button" class="btn btn-lg btn-warning px-4" data-toggle="modal" data-target="#topupModal">
                  Top up
                </button>
                </div>
            </div>
          </div>

        </div>

            <!-- Modal -->
            <div class="modal fade" id="topupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Top up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Are you sure?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" name="submit" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>
</section>

<section>
    <div class="mx-5 mt-5 mb-5 p-0">
      <h1 class="display-4 text-center text-warning font-weight-bold pb-5">Transaction History</h1>
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
            //To retrieve transaction table
            $txresult = mysqli_query($con,"SELECT * FROM transaction WHERE phoneNo='".$phoneNo."';");
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
</section>
<?php
  include "footer.php";
?>
