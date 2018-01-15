<?php
include 'db.php';
 $st = $_GET['q'];
 $st = strtolower($st);
 
 $result = mysql_query("SELECT * FROM votelist ORDER BY id DESC");
  while($row = mysql_fetch_array($result))
     {
		$s=$row['title'];
		$user=$row['email'];
		$id=$row['id'];
		 $s = strtolower($s);
		if(!empty($_GET['q']))
		if (strpos($s,$st) !== false) {
     echo "<a href='result.php?id=$id'> " . $row['title'] . "</a><br><br>";
}
	if(!empty($_GET['q']))
		if (strpos($user,$st) !== false) {
     echo "<a href='result.php?id=$id'> " . $row['title'] . "</a><br><br>";
}

     }
?>