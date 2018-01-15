<?php
ob_start();
include 'db.php';

  $id=$_GET['id'];
 

	$sql = "DELETE from votelist where id='$id'" ;
	$sss = "DELETE from result where id='$id'" ;
$res=mysql_query($sql);
$res2=mysql_query($sss);
header('Location:press.php');


?>