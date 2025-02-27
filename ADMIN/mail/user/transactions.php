<?php
require_once 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="cryptomax.css">

<!-----------------------style for frmwb------------->
<style>
    .col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}
.btn:active{
    background-color: #996655 !important;
    display:block !important;
}
.btn:focus{
    background-color: #996655 !important;
    display:block !important;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<!------------style from frm web--------->
       
    <title>transactions</title>
    <script>
 function copyEvent(id) { 
     var str = document.getElementById('copy');
  window.getSelection().selectAllChildren(str); document.execCommand("Copy")
document.getElementById('copy1').innerHTML="copied";


  
 }
</script>
<script>
 function copyEvent2(id) { 
     var str = document.getElementById('copy2');
  window.getSelection().selectAllChildren(str); document.execCommand("Copy2")
document.getElementById('copy3').innerHTML="copied";


  
 }
</script>
</head>
<body>
<!-------nav------>

<nav>
        <div class="nav-bar">
            <!---<i class='bx bx-menu sidebarOpen' >---->
            <i class="fa-solid fa-bars sidebarOpen"></i>
            <!----</i>--->
            <span class="logo navLogo"><a href="#">cryptomax</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">php</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                    <li><a href="profile.php">profile</a></li>
                    <li><a href="account manager.php">management</a></li>
                    <li><a href="transactions.php">transactions</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                    <li><a href="logout.php">log out</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class="fa-solid fa-moon" style="color:white;"></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    
                   </div>

                   
                </div>
            </div>
        </div>
    </nav>
 <!-------------->
 <div class="container">
    <div class="card">
        <h1 style="color:white">welcome</h1>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <p>transactions</p>
                    <bold style="font-weight: bold;">ballance:</bold><?php echo $row['ballance'];?><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<!--plane select---->
<div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
<div class="card">

    <h5>select a plan</h5>
    <div class="but-plan" style="display:flex">
    <button class="btn btn-secondary" id="drlf">ROOKIE<br><p>$1000</p></button>
    <button class="btn btn-secondary ml-4">PRO-plan From <p>$10,000</p></button>
    </div>    
</div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
<div class="card">

    <h5>select a plan</h5>
    <div class="but-plan" style="display:flex">
    <button class="btn btn-secondary">Basic<br><p>$300</p></button>
    <button class="btn btn-secondary ml-4">MASTER PLAN <p> $100,000</p></button>
    </div>    
</div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
<div class="card">

    <h5>select a plan</h5>
    <div class="but-plan" style="display:flex">
    <button class="btn btn-secondary">PREMIUM <p> $5000<p></button>
    <button class="btn btn-secondary ml-4">VIP <p> $75,000</p></button>
    </div>    
</div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
<div class="card">

    <h5>select a plan</h5>
    <div class="but-plan" style="display:flex">
    <button class="btn btn-secondary">VIP LUXURY <p> $150,00</p></button>
    <button class="btn btn-secondary ml-4">SILVER PLATINUM <p>$350,000</p></button>
    </div>    
</div>
    </div>

    </div>
</div>
<!-----from web----->
<div class="container">
<center>
      <h5 style="margin-bottom: 20px;">Desposit</h5>
</center>
<div class="row">
 
<div class="col-sm-12 col-md-6 col-lg-6">

      <p style="color: blue;" >deposit via bitcoin</p>
      <p id="copy">bitcoin hhhhhwallet</p>
      <button class=" btn btn-info " onclick="copyEvent(id)" id="copy1"> copy address</button>

</div>
<div class="col-sm-12 col-md-6 col-lg-6">
<p style="color:blue;">deposit via Etherium</p>
      <p id="copy2">ethirium wallet</p>
      
<button class=" btn btn-info " onclick="copyEvent2(id)" id="copy3"> copy address</button>


    


</div>


</div>
<!---from here -->

<?php   





?>

<?php

$bitdefault='';
$ammount='';
$status='';

if($_SERVER['REQUEST_METHOD'] === "POST"){
 
 
   $bitdefault=$_POST["bit"];
  $amount=$_POST["amount"];
  $status=$_POST["status"];
  $user_id = $_SESSION['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cryptomax";


  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO withdraw3 (user_id,method, amount, status)
                      VALUES ('$user_id','$bitdefault','$amount','$status')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";

}


 



?>
<?php





?>




 
<!------------starts- insert--->

<?php
$con = mysqli_connect("localhost","root","","cryptomax");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$user_id = $_SESSION['id'];

$sql = "SELECT * FROM withdraw3 WHERE user_id= '$user_id'";
$result = mysqli_query($con, $sql);

// Associative array
$rw = mysqli_fetch_assoc($result);


?>

<!-------ends----->
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <h4>widthdraw</h4>
            <form  method="POST" action="#">
            <div class="form-group">
                <p>Currency</p>
            <input type="text" class="form-control" name="bit"placeholder="BITCOIN" value="BITCOIN" default>
            <p>wallet id</p>
            <input type="text" class="form-control" name="walletid" placeholder="wallet ID" required="">
                <p>Ammonut</p>
            <input type="number" class="form-control" name = "amount" placeholder="$0.00" required="">
            <input type="hidden" class="form-control" name="status" value="pending" value="pending">
            <br>
            <input type="submit"  class="btn btn-primary">

            
        </div>        
        </form>         
        </div>
    </div>
</div>
<div class="comtainer-fluid">
    <h6>widthdraw history</h6>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">currency</th>
      <th scope="col">ammonut</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <!----i want this fields to fetch ----->
      <td><?php echo $rw['amount'];?></td>
      <td><?php echo $rw['method'];?></td>
      <td><?php echo $rw['status'];?></td>
    </tr>
  </tbody>
</table>
</div>
<!----ends here---->
<!---from web end--->
<!-------------->
<script src="cryptomax.js"></script>

</body>




</html>