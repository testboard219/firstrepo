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


       
    <title>account manager</title>
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
                    <p class="mb-4">Account manager</p>
                    <h3>OnlineTrader Account manager</h3>

<p class="inivcd">Don’t have time to trade or learn how to trade? Our Account Management Service is The Best Profitable Trading Option for you, We can help you to manage your account in the financial MARKET with a simple subscription model.
Terms and Conditions apply
Reach us at support@cryptomax.com for more info.</p>
                </div>
            </div>

            <div class="card">
            <iframe src="https://trade.mql5.com/trade" name="WebTrader" title="Subscription Trade" frameborder="0" style="display: block; border: none; height: 76vh; width: 80vw;"></iframe>


            </div>
        </div>
    </div>
</div>
<!-------------->



<script src="cryptomax.js"></script>

</body>
</html>