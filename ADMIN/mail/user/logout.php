<?php
session_start();
if(isset($_SESSION['email']) && $_SESSION['fname'] && $_SESSION['number'] && $_SESSION['country'] && $_SESSION['ballance'] 
&& $_SESSION['profit'] && $_SESSION['bonus'] && $_SESSION['plan'] && $_SESSION['withdraw'] ){
}
session_destroy();
header("location:..\login.php");

?>