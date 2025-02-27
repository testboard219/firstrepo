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


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO withdraw3 (user_id,method, amount, status)
                      VALUES ('$user_id','$bitdefault','$amount','$status')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;



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

$sql = "SELECT * FROM withdraw3 WHERE user_id= '$user_id'";
$result = mysqli_query($con, $sql);

// Associative array
$rw = mysqli_fetch_assoc($result);
//printf ("%s (%s)\n", $rw["amount"], $rw["statius"]);

// Free result set
                 //mysqli_free_result($result);

                 //mysqli_close($con);

?>


==============================================================================

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


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO withdraw3 (user_id,method, amount, status)
                      VALUES ('$user_id','$bitdefault','$amount','$status')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;



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

