<? php

	ob_start();
	session_start();
	if(isset($_SESSION['u']))
		unset($_SESSION['u']);
	setcookie('user', "", time()-60);
header("location: Bookshelf.php");
?>