
<?php

session_start();
?>

<?php // require_once "../preload.php"; ?>
<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=prime','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$error=[];
$fname='';
$lname='';
$email='';
$number='';
$password1='';
$password2='';
$country='';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $fname=$_POST['fname'];
 $lname=$_POST['lname'];
  $email=$_POST['email'];
  $number=$_POST['number'];
   $password1=$_POST['password1'];
   $password2=$_POST['password2'];
   $country=$_POST['country'];
  $date= date('d-m-y H:i:s'); 
$ip = $_SERVER['REMOTE_ADDR'];
$ballance  = $_POST['ballance'];
$profit  = $_POST['profit'];
$bonus  = $_POST['bonus'];
$plan  = $_POST['plan'];
$withdraw  = $_POST['withdraw'];
 if(!$fname){
  $error[]='first name fild is empty';
}
if(!$lname){
  $error[]='</br>last name field is empty';
}
if(!$email){
  $error[]='</br> please enter A valid Email ';
}
if(!$number){
  $error[]='</br>last name field is empty';
}
if($password1 !== $password2){
  $error[]='</br>password do not match';
}
if(empty($error)){
	//include_once 'sendmail.php';
//tester
$id = $_SESSION['id'];
$statement=$pdo->prepare("INSERT INTO globaltable (email,fname,lname,number,country,date,ip,ballance,profit,bonus,id,plan,withdraw,password1) VALUES (:email,:fname,:lname,:number,:country,:date,:ip,:ballance,:profit,:bonus,:id,:plan,:withdraw,:password1)");
$statement->bindValue(':email',$email);
$statement->bindValue(':fname',$fname);
$statement->bindValue(':lname',$lname);
$statement->bindValue(':number',$number);
$statement->bindValue(':country',$country);
$statement->bindValue(':date',$date); 
$statement->bindValue(':ip',$ip); 
$statement->bindValue(':ballance',$ballance); 
$statement->bindValue(':profit',$profit);
$statement->bindValue(':bonus',$bonus);  
$statement->bindValue(':id',$id); 
$statement->bindValue(':plan',$plan); 
$statement->bindValue(':withdraw',$withdraw); 
$statement->bindValue(':password1',$password1); 
$statement->execute();


header('location:users/index.php');
    

}
}
?>





<!doctype html> 
<html class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="primeimg.JPG" rel="icon" type="image/x-icon" />
<!-- Add icon library -->
<!----<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
------>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">

 <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href="css/main.css" rel="stylesheet"/>
<link href="css/animate.min.css" rel="stylesheet" />

<title>PrimePlox| Your Trusted Bitcoin  Mining and Investment Company</title>
<link rel="manifest" href="js/manifest.json">
<meta name="theme-color" content="#FD961A">
<meta name="msapplication-navbutton-color" content="#FD961A">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FD961A">


<meta name="theme-color" content="#FD961A">
<meta name="msapplication-navbutton-color" content="#FD961A">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FD961A">

<link href="primeimg.JPG" rel="icon" type="image/x-icon" />
<link rel="icon" sizes="192x192" href="images/icon/icon-192.html">

<meta name="keywords" content="Elite Plox, Bitcoin Investment, Bitcoin Trading Company" />
<meta property="og:image" content="images/icon/icon-310x310.png" />

<meta name="msapplication-square310x310logo" content="images/icon/icon-310x310.png">
<meta name="msapplication-square70x70logo" content="images/icon/icon-70x70.png">
<meta name="msapplication-square150x150logo" content="images/icon/icon-150x150.png">
<meta name="msapplication-wide310x150logo" content="images/icon/icon-310x150.png">

<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/icon/apple-touch-icon-57x57.html" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72x72.html" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144x144.png" />


<meta property="og:site_name" content="Eliteplox| Your Trusted Bitcoin  Mining and Investment Company">
<meta property="og:title" content="Your Trusted Bitcoin  Mining and Investment Company" />
<meta name="description" content="Elite Plox  is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:description" content="Elite Plox  is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:type" content="website" />

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.form.js"></script>

<link href="css/select2.min.css" rel="stylesheet" />
<script>
$(document).ready(function() {
    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }
 
    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});
</script>
<script>
var fade_outthis = function() {
	$(".alert").fadeOut().empty();
}
setTimeout(fade_outthis, 8000);

$(document).ready(function(){
    $(".closebtn").click(function(){
        $(this).parent().fadeOut().empty();
    });
});
</script>
</head>
<body class="loading_it">
<header class="header">
<div class="container row">
<ul class="topheader">
	<li class="logo">
		<div class="bodycontainer">
			<button class="btn round default right menu"><i class="fa fa-align-right"></i></button>
			<a href="index.html">
            <img src="primeimg.JPG"  style="width:100px;height:80px; border-top-left-radius:20px;border-bottom-right-radius:20px;" title="Eliteplox| Your Trusted Bitcoin  Mining and Investment Company"/>
			</a>
		</div>
	</li>
	<li class="data">
		<div class="bodycontainer">
			<ul>
				<li><div>3,649,450 USD</div>Payouts</li>
				<li><div>+5.26%</div>24 hour price</li>
				<li><div>12.820 BTC</div>24 hour volume</li>
				<li><div>69,775</div>active traders</li>
			<!---	<li><div class="btcwdgt-price" bw-cur="usd"></div>Live Bitcoin price</li> --->
			</ul>
		</div>
	</li>
	<li class="account row">
		<div class="bodycontainer">
			<div class="button_container"><a href="login.php" class="btn"><i class="fa fa-user"></i> SIGN IN</a></div>
				<div class="button_container"><a href="register.php" class="btn v2"><i class="fa fa-user-plus"></i> REGISTER</a></div>		</div>
	</li>
</ul>
</div>


<!-- TradingView Widget BEGIN -->
	<div class="tradingview-widget-container" style="background: #1D1D1D; height: unset !important; overflow: hidden;">
		<div class="tradingview-widget-container__widget"></div>
		<!--<div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span class="blue-text">Ticker-->
		<!--			Tape</span></a> by TradingView</div>-->
		<script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
			async>
				{
					"symbols": [
						{
							"title": "S&P 500",
							"proName": "OANDA:SPX500USD"
						},
						{
							"title": "Nasdaq 100",
							"proName": "OANDA:NAS100USD"
						},
						{
							"title": "EUR/USD",
							"proName": "FX_IDC:EURUSD"
						},
						{
							"title": "BTC/USD",
							"proName": "BITSTAMP:BTCUSD"
						},
						{
							"title": "ETH/USD",
							"proName": "BITSTAMP:ETHUSD"
						}
					],
						"colorTheme": "dark",
							"isTransparent": true,
								"displayMode": "adaptive",
									"locale": "en"
				}
			</script>
	</div>
	<!-- TradingView Widget END -->






</header>
<nav class="center">
	<div class="bodycontainer">
		<ul>
			<li><a href="index.html" class="active">HOME</a></li>
			<li><a href="info/about.html">ABOUT US</a></li>
			<li><a href="index.html#investment">INVESTMENT PLANS</a></li>
			<li><a href="#">LEGAL <i class="fa fa-chevron-down"></i></a>
				<ul>
					<li><a href="info/terms.html">TERMS & CONDITIONS</a></li>
					<li><a href="faqs.html">FAQS</a></li>
				</ul>
			</li>
			<li><a href="contact.html">CONTACT US</a></li>
			<li><a href="affiliate_program.html">AFFILIATE</a></li>
		</ul>
	</div>
</nav>
<script>
	$(".menu").click( function(){
		$("nav").slideToggle();
	});
</script>

<div class="preloader">
<div id="bitcoin">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200px" height="200px" viewBox="100 100 400 400" xml:space="preserve">
    <filter id="dropshadow" height="130%">
  <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
  <feOffset dx="0" dy="0" result="offsetblur"/>
  <feFlood flood-color="red"/>
<feComposite in2="offsetblur" operator="in"/>
<feMerge>
<feMergeNode/>
<feMergeNode in="SourceGraphic"/>
</feMerge>
</filter>          
<path class="path" style="filter:url(#dropshadow)" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
	c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
	l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
	c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
	c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
	l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
	C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
	C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
	C327.767,212.14,389.234,221.02,379.302,260.846z"/>
          
</svg>
</div>
</div>
<script>
/*--window load functions--*/
jQuery(window).load(function(){
	var preLoder = $(".preloader");
	preLoder.fadeOut(1000);
	$("body").removeClass("loading_it");
});
</script>

  




<div class="banner-area center">
<div class="area">
	<div class="bodycontainer">
		<h1 class="tlt text-white" style="margin: 20px 0;">USER <span class="text-default">REGISTERATION</span></h1>
		<div class="banner-title">
           <span class="decor-equal"></span>
		</div>
		<div  style="margin: 20px 0;">
			<a href="index.html">HOME</a> / CREATE AN ACCOUNT
		</div>
	</div>
	<div id="particles-js"></div>
</div>
</div>
<script src="js/regvalidation.js"></script>
<link rel="stylesheet" href="css/intlTelInput.css">
<div class="smallcontainer padding">
    <!---------------
    
    ///////////////////////

    form 

    //////////////////////
    
    
    
    ------------------------->
  
	<form action="#" method="POST" class="validate row" id="register">
        <div class="col-12 col-m-12 col-sm-12">
			<div class="title_container">
				  <h4>Create an Account</h4>
				  <span class="decor_default"></span>
          <!-------error check---->
          <?php if(!empty($error)):?>
             <div class="alert alert-danger" style="color:red;">
              <?php foreach($error as $errors):?>
                    <?php echo $errors ?>

                    <?php endforeach?>
                      </div>
                    <?php endif?>
                    <!----end of error check------>
<!------------form config-------------->
			</div>
		</div>
                <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="Reference ID(Optional)" name="r_id" style="width:100%" style="width:100%" class="round">
        </div>
                <div class="col-12 col-m-12 col-sm-12">
                <input type="tel" class="form-control mb-1 round" placeholder="First name" name='fname' required="" style="width:100%;">
			<!--<input type="text" placeholder="First Name" required name="fname" value="" style="width:100%" class="round">
        --->    <div id="fnameErr" class="form_hint"> First name must not be empty!</div>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
        <input type="text" class="form-control" placeholder="Last name" name="lname" required="" style="width:100%" class="round">
		<!--	<input type="text" placeholder="Last Name" required name="lname" value="" style="width:100%" class="round">
  -->  <div id="lnameErr" class="form_hint"> Last name must not be empty!</div>
        </div>
              <!--  <div class="col-12 col-m-12 col-sm-12">
			<input type="email" placeholder="Email" required name="email" value="" style="width:100%" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" oninput="emaila(this)" class="round">
            <div id="emailErr" class="form_hint"> Email must not be empty!</div>
            <div id="emailErra" class="form_hint"> Email format not supportted!</div>
            <div id="emailErrb" class="form_hint"> Email already exist!</div>
            <div id="emailErrc" class="form_hint"><i class="fa fa-spinner fa-spin center"></i></div>
        </div>--->

        <div class="col-12 col-m-12 col-sm-12">
        <input type="email" placeholder="email@example.com" class="form-control" name="email" required="" style="width:100%"  class="round">
        <div id="emailErr" class="form_hint"> Email must not be empty!</div>
          </div>

          <div class="col-12 col-m-12 col-sm-12">
        <input type="tel" placeholder="phone number" class="form-control" name="number" required="" style="width:100%" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" class="round">
        <div id="emailErr" class="form_hint"> phone number must not be empty!</div>
          </div>
<!---
        <div class="col-12 col-m-12 col-sm-12">
        	<select name="gender" id="gender" style="width:100%" class="round">
                <option id="male" value ="male">Male</option>
                <option id="female" value="female">Female</option>
            </select>
        </div>--->
		<!----<div class="col-12 col-m-12 col-sm-12">
		<input type="tel" id="mobile-number" required name="pno" value="" class="round" style="width:100%;">
			<select id="address-country" name="country" style="display:none" required></select>
		</div>--->


       <!-- <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="Zip Code" required name="zip" value="" style="width:100%" class="round">
            <div id="zipErr" class="form_hint"> Zip code must not be empty!</div>
        </div>--->
       <!--- <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="Address" required name="address" value="" style="width:100%" class="round">
            <div id="addressErr" class="form_hint"> Address must not be empty!</div>
        </div>---->
		<div class="col-12 col-m-12 col-sm-12">
        	<input type="password" placeholder="Password" name="password1" style="width:100%" id="password"  required  class="round">
            <div id="passwordErr" class="form_hint"> Make your password stronger with more letters and at least a numbers</div>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
        	<input type="password" placeholder=" confirm Password" name="password2" style="width:100%" id="password"  required  class="round">
            <div id="passwordErr" class="form_hint"> Make your password stronger with more letters and at least a numbers</div>
        </div>
<!------country mode------->
<div class="col-12 col-m-12 col-sm-12">
<div class="form-group">
                        <!---<label for="country" name="country">Country</label>-->
                        <select class="form-control" name="country" id="country" required style="width:100%" class="round">
                            <option selected disabled value="">Choose Country</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire</option>
                                                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="East Timor">East Timor</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="France Metropolitan">France Metropolitan</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option>
                                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao, People&#039;s Democratic Republic">Lao, People&#039;s Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macau">Macau</option>
                                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="St. Helena">St. Helena</option>
                                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Vietnam">Vietnam</option>
                                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Yugoslavia">Yugoslavia</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                    </div>
                    </div>
                    <!------>
                    <div class="c" style="display: none;">
                    <input type="hidden" class="form-control" name="ballance" value="$0"><br>
                    <input type="hidden" class="form-control" name="profit" value="$0"><br>
                    <input type="hidden" class="form-control" name="bonus" value="$0"><br>
                    <input type="hidden" class="form-control" name="plan" value="NONE"><br>
                    <input type="hidden" class="form-control" name="withdraw" value="NOT selected"><br>
                    </div>

                    <!------->



        <!----END OF FORM-------->
        <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="age" required> I am 18 years of age or older
        </div>
        <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="agree" required checked> I agree to Primeplox| Your Trusted Bitcoin  Mining and Investment Company <a href="info/terms.html" target="_blank">Terms and conditions</a>
        </div>
        <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="mail" required> I agree to receive Primeplox| Your Trusted Bitcoin  Mining and Investment Company emails</label>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
        	<input type="submit" value="Submit" class="btn round default" style="border:0"><br><br>
            <a href="login.html">Already have an account</a>
        </div>
	</form>
</div>
<script src="js/intlTelInput.js"></script> 
<style>
.intl-tel-input .country-list {
    background-color: #111111 !important;
    border: 1px solid #2d2d2d !important;
}
.intl-tel-input .country-list .divider { border-bottom: 1px solid #2D2D2D !important; }
.intl-tel-input .selected-flag .iti-arrow { border-top: 4px solid #F1F1F1 !important; }
</style>
<script>
var countryData = $.fn.intlTelInput.getCountryData(),
  telInput = $("#mobile-number"),
  addressDropdown = $("#address-country");

telInput.intlTelInput({
  initialCountry: "auto",
  customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
	  return "e.g. " + selectedCountryPlaceholder;
	},
  preferredCountries: [ "us", "gb" ],
  geoIpLookup: function(callback) {
    $.get("https://ipinfo.io/", function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
  utilsScript: "js/utils.js" // just for formatting/placeholders etc
});

// populate the country dropdown
$.each(countryData, function(i, country) {
  addressDropdown.append($("<option></option>").attr("value", country.name).text(country.name));
});
// set it\'s initial value
var initialCountry = telInput.intlTelInput("getSelectedCountryData").name;
addressDropdown.val(initialCountry);

// listen to the telephone input for changes
telInput.on("countrychange", function(e, countryData) {
  addressDropdown.val(countryData.name);
});

// listen to the address dropdown for changes
addressDropdown.change(function() {
	telInput.intlTelInput("setCountry", $(this).val());
});
$("#register").submit(function(e) {
	telInput.val(telInput.intlTelInput("getNumber"));
});

</script>
<a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up show-back-to-top"></a>
<script>
/*--window Scroll functions--*/
$(window).on('scroll', function () {
	/*--show and hide scroll to top --*/
	var ScrollTop = $('#back-to-top');
	if ($(window).scrollTop() > 500) {
		ScrollTop.fadeIn(1000);
	} else {
		ScrollTop.fadeOut(1000);
	}
});
</script>
<div class="footer_bg center">
	<div class="area">
		<div class="bodycontainer">
			<div style="z-index:2; position: relative">
				<h2 class="margintb">GET STARTED TODAY WITH BITCOIN INVESTMENT</h2>
				<p class="margintb">Open account for free and start trading Bitcoins!</p>
				<a href="get-started.html" class="btn">GET STARTED</a>
			</div>
		</div>
	</div>
</div>
<footer>
    <div class="bodycontainer">
        <div class="row">
            <div class="col-2 col-m-4 col-sm-12">
            <div class="padding">
                <h3>QUICK LINKS</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="info/about.html">About Us</a></li>
                    <li><a href="faqs.html">FAQS</a></li>
                    <li><a href="info/terms.html">TERMS AND CONDITIONS</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
            </div>
            <div class="col-2 col-m-4 col-sm-12">
            <div class="padding">
                <h3>HELP & SUPPORT</h3>
                <ul>
                    <li><a href="https://cointelegraph.com/bitcoin-for-beginners/what-are-cryptocurrencies" target="_blank">WHAT IS BITCOIN?</a></li>
                    <li><a href="https://www.investopedia.com/tech/how-to-buy-bitcoin/" target="_blank">HOW TO BUY BITCOIN</a></li>
                    
					<li><a href="fpass.html">FORGOT PASSWORD</a></li>
                </ul>
            </div>
            </div>
            <div class="col-3 col-m-4 col-sm-12">
            <div class="padding">
                <h3>CONTACT US</h3>
                <ul>
                    <li>5 Preston Court, Burton Latimer, United Kingdom, NN15 5LR</li>
                </ul>
				<a href="mailto://support@Primeplox.com"><h3>support@Primeplox.com</h3></a>
				<a href="tel:+1(630)278-6086">+1(630)278-6087</a>
				<ul>
					<li>MON-SAT 08AM ⇾ 05PM</li>
					<ul class="social">
					<!--	<li><a href="#" class="circle"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="circle"><i class="fa fa-twitter"></i></a></li>-->
					</ul>
				</ul>
            </div>
            </div>
            <div class="col-5 col-m-12 col-sm-12">
				<div class="col-6 col-m-6 col-sm-6" style="padding-bottom:0">
					<div class="value">$198.76B</div>
					MARKET CAP
					<div class="value">69K+</div>
					ACTIVE ACCOUNTS
				</div>
				<div class="col-6 col-m-6 col-sm-6" style="padding-bottom:0">
					<div class="value">243K</div>
					WEEKLY TRANSACTIONS
					<div class="value">127</div>
					SUPPORTED COUNTRIES
				</div>
				<div class="col-12" style="padding-top:0">
					<hr>
					SUPPORTED PAYMENT METHODS<br>
					<img src="images/5b55bb652af1a.png" style="width:40px">
					<img src="images/1532345051h7.png" style="width:40px">
					<img src="images/1532345115h7.png" style="width:40px">
				</div>
            </div>
        </div>
	<hr>
	<p class="center">Copyright © 2024  primeplox, All Rights Reserved</p>
    </div>
</footer>
<script src="js/particle.js"></script>
<script>
particlesJS("particles-js", {
	"particles":{ "number":{"value":100,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}
},"retina_detect":true});
</script>
<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','../widgets.bitcoin.com/widget.js','btcwdgt');
</script>
</body>
</html>