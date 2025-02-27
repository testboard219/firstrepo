<?php
require_once 'db.php';

?>
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="cryptomax.css">


       
    <title>profile</title>
</head>
<body>
<!-------nav------>
<div class="container-fluid">
 <div class="row">
    <div class="col-sm-12">   
<!-------start------>
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
     <!--------ends----->
</div></div>
</div>
   
    <!-------------->
<div class="container">
    <div class="card">
        <h1 style="color:white">welcome</h1>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
       <div class="card" style="background-color: blue; color:white;">
        <br>
        <div class="rgb" style="justify-content: center;text-align:center;">
        <i class="fa-solid fa-user-circle fa-3x"></i>
        
            <p style="color:white">online</p>
        <p><?php echo $row['fname']; ?> 
        <?php echo  $row['lname'];?></p>
        <p><?php echo $row['ballance'];?></p>
        </div>
       </div>
            <div class="card" style="padding:10px 10px;; ">
                <div class="card-body">
                    <p>PROFILE INFORMATION</p>
                    <br>
                    <div style="display:flex;">
                        <p style="font-weight: bold;">name::</p><p style="padding:0px 5px;"><?php echo $row['fname'];?></p> <p class="" style="margin-left:5px;"><?php echo $row['lname'];?></p>
                        </div>
                        <bold style="font-weight: bold;">Phone number::</bold><?php echo $row['number'];?><br><br>
                        <bold style="font-weight: bold;">Email Address::</bold><?php echo $row['email'];?><br><br>
                        <bold style="font-weight: bold;">Country:</bold><?php echo $row['country'];?><br><br>
                
                <p class="acc" style="font-weight: bold;" >ACCOUNT-Withdraw-limit:</p>$30,000 daily
</div>
                <h6 class='slef' style="color:aqua; text-align:center;">privacy</h6>
                <p>regional filter</p>
                <div class="rad">
                    <form action=""></form>
                <input type="radio" name="selection1">Enable<br>
                <input type="radio" name="selection1">disable 
                </form>
            </div>send me notifications when ever i signed in 
                <div class="rad">
                    <form action="">
                <input type="radio" name="selection">Enable<br>
                <input type="radio" name="selection">Disable 
                </form>
            </div>
                data access filter 
                <div class="rad">
                    <form action="">
                <input type="radio" name="selection2">yes
                <input type="radio" name="selection2">no 
                </form>
            </div>
            <input type="submit" value="save changes" onclick="save()" class="btn btn-danger">
  
            </div><br><br>
            <div class="card" style="text-align:center;">
                <h6>verify your Acconut</h6>
                <p>Valid identity card. (e.g. Drivers licence, international passport or any government approved document).</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium harum reprehenderit obcaecati.</p>
            <div class="card">
                <div class="col-sm-10 col-md-10 col-lg-10" style="padding:10px 10px;">
                <form action="" method="post">
                <input type='file' required=''>
                <input type='file' required=''>
            </div>
            <button class="btn btn-primary" onclick ='sent()'>submit</button>

            </div><!--col ends--->
        </div>
    </form>
            
        </div>
    </div>
</div>
<!-------------->

<script src="cryptomax.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function sent(){
    swal("Write something here:", {
  content: "input",
})
.then((value) => {
  swal(`You typed: ${value}`);
});}

function save(){
    swal("settings has been saved!", "You clicked the button!", "success");

}
    </script>
</body>
</html>