<?php
ob_start();
session_start();
if(isset($_SESSION['name']))
unset($_SESSION['name']); 
setcookie("user", "", time()-3600);
header("location:home.php");
?>