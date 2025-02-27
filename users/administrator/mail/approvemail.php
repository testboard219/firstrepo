<?php
// mail TO
//$new_psw=substr(str_shuffle("1234567890"), 0,8); 
$message="hello welcome onboard";    
  //Message
 $subject = "harsh it solutions";           
 //Subject
 $headers = "MIME-Version: 1.0" . "\r\n"; 
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From: gplifelab@gmail.com" . "\r\n";        
// mail From mail("harshbnasal@gmail.com",$subject,$message,$headers);          
// mail Function 
if (mail("powerpassive219@gmail.com",$subject,$message,$headers)) { 
echo "Mail Successfully Sent"; 
} 
else { echo "Failed"; }

?>