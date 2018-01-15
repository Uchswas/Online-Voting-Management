 <?php
ob_start();
include 'db.php';
session_start();
 $no=$_GET['id'];
	$sss = "select * from result where id='$no'" ;
	if(!isset($_GET['op'])){
		header("location:resultview.php?id=$no");
		die();
	}
  $oopp=(int)$_GET['op'];
  $res2=mysql_query($sss);
$row2=mysql_fetch_array($res2);
$new=(int)$row2[$oopp];

$new++;

mysql_query("
    UPDATE result
    SET `$oopp` =  '$new'
    WHERE id = '$no'
");
 
	
	 $filename = 'file/'.$no.'.txt';
	$myf=fopen($filename,'a');
	fwrite($myf,$oopp.PHP_EOL);
	fwrite($myf,$_SESSION['name'].PHP_EOL);
  
  
  
  
  
  
 
  ?>