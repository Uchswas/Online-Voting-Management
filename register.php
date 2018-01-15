<?php 

	if (isset($_POST['submit'])) {
		
	$name = $_POST['username'];
	$password = $_POST['password'];

	if($name && $password){
	$connection=mysqli_connect('localhost','root','','bookshelf');
	
	$query = "INSERT INTO userlogin(username,password) VALUES('$name','$password')";

	$result = mysqli_query($connection,$query);
	header('LOCATION:Userpage.php');

	}
	// else{
	// 	header('LOCATION:Bookshelf.php');
	// }
	}
 ?>

<html>
<head>
	<title></title>
	<style type="text/css">
		body{
  
  background-color:#f0f0f0;
  font-family:helvetica;
}
	</style>
</head>
<body>


	<fieldset style="margin-left:250px;margin-right:250px;margin-bottom:50px;margin-top:50px;">
    <legend align="center"> <h2>Registration Form</h2> </legend><br>

	<form action="register.php" method="POST" style="padding-left:5px;height:100px;width:500px;border-radius:5px;">
	<p>Username: <input type="text" name="username" ></p>
	<p>Password: <input type="password" name="password"></p> 
	<input type="submit" name="submit" style="" >
	</form>

	</fieldset>

</body>
</html>
