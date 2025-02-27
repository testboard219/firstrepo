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
    <link rel="" href="">
<style>


    </style>

       
    <title>contact us</title>
    <script> function stay(){
        swal("Email Sent!")};
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
    <div class="card" >
        <h1 style="color:white">welcome</h1>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <p>contact us </p>
                </div>

                

            </div>
        </div>
    </div>
</div>
<!------send from------>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
<?php
   

?>
    ?>
        <form action="#" method="POST" class="con_timeline" id="">
                    
                       
                            
                          
                    <div class="form-group">
                <div class="col-sm-12 justify-content-center" style=" display:flex;">
                <h3 class=" mb-5" style="color:#8b51fe;">Contact one of the boards</h3></div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">first name</label>
                      <input type="text" class="form-control mb-1"  name="fname" placeholder="First name">
                    </div>
                    <div class="col-md-6">
                        <label for=""> lastname</label>
                      <input type="text" class="form-control"  name="lname" placeholder="Last name">
                    </div>
                  </div>



                <label for="" class="inpu-label">Email</label>
                <div class="input-cnt">
                   
                <input type="email" name="email" placeholder="email@example.com" class="form-control ">
                </div>
                <br>
                
                <label for="" class="inpu-label">message</label>
                <div class="input-cnt">
                

                <textarea type="text" class="form-control" name="text" id="" cols="30" rows="10" placeholder=""></textarea>
            </div>
              <!----flex of input---->
              

              <!-----end of flex input ---->
            
            
            
              
        </div>

        <div class="form-group">
            <input type="submit"  class="btn btn-primary btn-block"  onclick="stay()" value="send">
            
        </div>
        </form>
        </div>
    </div>
</div>
<!-------end of send form--->
<!-------------->
<script src="cryptomax.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>