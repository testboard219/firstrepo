
<?php
$servername = "localhost";
$username = "root";
$password = "";
$port ="3307";
$dbname ="cryptomax";

$id =$_POST['id'] ?? null;


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$vt= "DELETE FROM mainapprovetable WHERE id = id ";
$insertintodb="INSERT INTO cryptomaxtable (email,fname,lname,country,date,ip,number,ballance,profit,bonus,plan,withdraw,password) 
SELECT email,fname,lname,country,date,ip,number,ballance,profit,bonus,plan,withdraw,password FROM mainapprovetable";
                            if(mysqli_query($conn,$insertintodb)){
                mysqli_query($conn,$vt);
             header('location:approve.php');
}else{
  echo 'try again';
}
                           

                              
      


?>


