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
       
    <title>contact us</title>
          
<script>
    
 function copyEvent(id) { 
     var str = document.getElementById('copy');
  window.getSelection().selectAllChildren(str); document.execCommand("Copy")
document.getElementById('copy1').innerHTML="copied";
  
 }

</script>
   
   <script>
        function run() {
            let copyGfGText =
                document.getElementById("GfGInput");
 
            copyGfGText.select();
            document.execCommand("copy");
             
            document.getElementById("gfg")
                .innerHTML = "Copied the text: "
                + copyGfGText.value;
        }
    

</script>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>
<!-------nav------>

<nav style="background-color:#061a39;">
        <div class="nav-bar" style="background-color:#061a39;">
            <!---<i class='bx bx-menu sidebarOpen' >---->
            <i class="fa-solid fa-bars sidebarOpen"></i>
            <!----</i>--->
            <span class="logo navLogo"><img src="primeimg.JPG" class="mt-1"  width="80" height="40" alt="..." style="border-radius: 10px;"></span>

            <div class="menu">
                <div class="logo-toggle">
                <span class="logo"><a href="#">Prime<span style="color:darkcyan;">Plox</span></a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                    <li><a href="profile.php">profile</a></li>
                    <li><a href="account manager.php">management</a></li>
                    <li><a href="transactions.php">transactions</a></li>
                    <li><a href="Addfunds.php">Add funds</a></li>
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
                    <p>Add funds</p>
                </div>

                

            </div>
        </div>
    </div>
</div>
<!------send from------>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
<?php
   

?>
    
        
                    
                       
                            
                          
                    <div class="form-group">
                <div class="col-sm-12 justify-content-center" >
                <h3 class=" mb-5" style="color:#8b51fe;">INVESTMENTS</h3></div>
                <div class="row mb-2">
        
                    
                        <div class="col-md-5 col-sm-12" style="border:1px solid red;border-radius:10px;">BTC</div>
                  </div>

                <!--from boot strap---->
                <center> 
                
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;border-radius:10px;">
  <div class="card-header">STARTER PLAN</div>
  <div class="card-body">
    <p>min/max ammount<br /> 5000-9500</p>
    <p>Deposit<br /> included in payments</p>
    <p>terms of mining weekly for 7 Days<br /> 1000 TH/s</p>
    
  </div>
</div>
<div class="card text-white bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header" style="color:black;">Add fund</div>
  <div class="card-body">
    <input type="text" placeholder="Enter Amount" style="border-radius:10px;padding:5px;">
    <image src="nnwallet.jpg" width="200px" height="200px">
    

      <p id="copy" style="color: blue;" >bc1qmrnr2xnj7e3mwa64uk8xpltkrfs38ycyg4y204</p>
      <button class=" btn btn-info " onclick="copyEvent(id)" id="copy1"> copy address</button>


</div>
</div>
      
 
<!---------------second---------->
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;border-radius:10px;">
  <div class="card-header">SILVER PLAN</div>
  <div class="card-body">
    <p>min/max ammount<br /> $9500-$20,000</p>
    <p>Deposit<br /> included in payments</p>
    <p>terms of mining weekly for 7 Days<br /> 2000 TH/s</p>
    
  </div>
</div>
<div class="card text-white bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header" style="color:black;">Add fund</div>
  <div class="card-body">
    <input type="text" placeholder="Enter Amount" style="border-radius:10px;padding:5px;">
    <image src="nnwallet.jpg" width="200px" height="200px">
    

      <p id="copyy" style="color: blue;" >bc1qmrnr2xnj7e3mwa64uk8xpltkrfs38ycyg4y204</p>
      <button class=" btn btn-info " onclick="copyEvent(iv)" id="copy2"> copy address</button>
  </div>
</div>















<div class="card text-white bg-primary mb-3" style="max-width: 18rem;border-radius:10px;">
  <div class="card-header">STARTER PLAN</div>
  <div class="card-body">
    <p>min/max ammount<br /> 3000-5000</p>
    <p>Deposit<br /> included in payments</p>
    <p>terms of mining weekly for 7 Days<br /> 1000 TH/s</p>
    
  </div>
</div>
<div class="card text-white bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header" style="color:black;">Add fund</div>
  <div class="card-body">
    <input type="text" placeholder="Enter Amount" style="border-radius:10px;padding:5px;">
    <image src="nnwallet.jpg" width="200px" height="200px">
    

      <p id="copyy" style="color: blue;" >bc1qmrnr2xnj7e3mwa64uk8xpltkrfs38ycyg4y204</p>
      <button class=" btn btn-info " onclick="copyEvent(iv)" id="copy2"> copy address</button>
  </div>
</div>

    </center>          
                

                <!----------->
            </div>
             
            
            
            
              
        </div>

       
        
    </div>
    <button id="one"></button>
</div>
<script src="cryptomax.js"></script>
<script>
document.getElementById('one').addEventListener('click',function(){
Swal.fire({
  title: 'Activate Bite plan',
  text: "bitcoin wallet!",
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
}) 

})

    </script>
</body>
</html>