<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
session_unset();
header("location:login.php");  /* Redirect to login page */
exit;
?>