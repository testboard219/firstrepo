
<?php
$servername = "localhost";
$username = "root";
$password = "";
$port ="3307";
$dbname ="cryptomax";



// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$vt= "DELETE FROM mainapprovetable WHERE id = id ";
$insertintodb="INSERT INTO cryptable (id,email,fname,lname,country,date,ip,number,ballance,profit,bonus,plan,withdraw,password) 
SELECT  id,email,fname,lname,country,date,ip,number,ballance,profit,bonus,plan,withdraw,password FROM mainapprovetable";
                            if(mysqli_query($conn,$insertintodb)){
                mysqli_query($conn,$vt);
             header('location:approve.php');
             
}else{
  echo 'try again';
}
                           

// delete end
                             //   echo '<br> successful';
                         //  }else{ 
                           //     echo '<br>try again';
                            //}

                              
      


?>


