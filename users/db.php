<?php
session_start();

?>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prime";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if(!empty($_SESSION['id'])){
    $id = $_SESSION['id'];
    
    $result = mysqli_query($conn,"SELECT * FROM  globaltable WHERE id = $id");
    $row = mysqli_fetch_assoc($result);


    // please put the transaction query here('i have a table with the folling collum') id,ammount,method ,status
    
  //$uid = $_SESSION["id"];

    
    }else{
    header("location:../login.php");
    
    
    }

?>