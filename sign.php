
<?php
ob_start();
include 'db.php';
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
 <script type="text/javascript">
 function check2(){
	 var pass2 = document.getElementById('p2');
      var message = document.getElementById('c'); 
	 
 }
    function checkPassImg(){
 
      var pass1 = document.getElementById('p1');
      var pass2 = document.getElementById('p2');
      var message = document.getElementById('confirmMessage');
      var ms=document.getElementById('cm');
      var goodColor = "#096E1D";
      var badColor = "#F60707";
        
      if(pass1.value == pass2.value){
     
        pass2.style.borderColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Password Match";
      }else{
  
        pass2.style.borderColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password Doesn,t Match";
      }
    }  
	function checklength()
	{
		
		 var pass1 = document.getElementById('p1');
      var pass2 = document.getElementById('p2');
      var message = document.getElementById('confirmMessage');
      var ms=document.getElementById('cm');
      var goodColor = "#096E1D";
      var badColor = "#F60707";
	     var value=pass1.value;
		 var len=value.length;
        if(value.length<4){
			  pass1.style.borderColor = badColor;
		 ms.style.color = badColor;
        ms.innerHTML = "    Password must have at least 4 charecter";	
		}
		else{
			  pass1.style.borderColor = goodColor;
			 ms.style.color = goodColor;
        ms.innerHTML = "     Okk";
		}
		
		
	}
	  
	
	
	
  </script>
<style>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src:  url('/ffff.woff') format('woff');
}
body{
margin:0 auto;
}

a {text-decoration: none; }
.divi{
 
top:0;
 right:0;
padding:10;
  z-index: 9999;
 width: 98.5%;
  height: 35px;
  background-color: #51D6EB;
border:none;
}

 @keyframes s { 
        from { 
            width:110; 
        } to { 
            width:200; 
        }
    }	


.bun{
 border-radius: 5px;
	width:110;
	height:50;
	color:white;
margin-top:0;
	background-color:transparent;
	font-size:18;
border:none;
float:right;
	
}
.bun:hover{
cursor:pointer;
background-color:white;
color:#51D6EB;	
  animation-name: s;
    animation-duration: 4000ms;
    animation-repeat:0;
}
h1,h2 {
	font-family: 'Arial Narrow', Arial, sans-serif;
	font-style: normal;
	font-variant: normal;
	text-align:center;
color:#D13593;
	font-weight: 500;
	line-height: 26.4px;
}

h3,h4,h5{

	font-family: 'Arial Narrow', Arial, sans-serif;
	text-align:center;
color:#20B2AA;
}


.ff{

padding:5;
text-align:center;
}
.ff input[type="submit"] {
   border-radius: 8px;
	width:125;
	height:40;
	margin-left:5%;
	background-color:#51D6EB;
	color:white;
	font-size:18;
border:none;

}

.ff input[type="submit"]:hover {
  cursor:pointer;

color:white;
background-color:#FF69B4;
}
.bigbun{

 border-radius: 8px;
	width:125;
	height:40;
	margin-left:45%;
	background-color:#51D6EB;
	color:white;
	font-size:18;
border:none;	
	
}
.bigbun:hover{
cursor:pointer;
background-color:#03DFE6;



	
}
.para{
	margin-left:60;
}

</style>
<body>
 <div class="divi">


<a href="contact.php"><button class="bun" ><b>Contact Us</b></button></a>
<a href="inst.php"><button class="bun" ><b>Instruction</b></button></a>
<?php
session_start();
if(isset($_SESSION['name'])){
	echo"<a href='logout.php'><button class='bun'><b>LogOut</b></button></a>";
}
else{
	echo"<a href='sign.php'><button class='bun'><b>Sign in</b></button></a>";
}
?>
<a href="voting.php"><button class="bun" ><b>Voting</b></button></a>
<a href="home.php"><button class="bun" ><b>Home</b></button></a>
<b><p class="para"> <?php 
if(isset($_SESSION['name'])){
	$name=$_SESSION['name']; echo $name ;
}
 ?></p></b>

</div>
<img display="inline" src="logo.png" width="84%" />
<img  style="margin-top:40"src="scl.png" align="right" width="15%" usemap="#user"/>
<map name="user" >
<area  alt="" title="" href="http://twitter.com" shape="rect" coords="8,6,57,50" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.youtube.com/" shape="rect" coords="60,10,101,50" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.facebook.com/" shape="rect" coords="107,8,147,49" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.linkedin.com/" shape="rect" coords="153,11,191,52" style="outline:none;" target="_self"     />
</map>


<?php
if(isset($_SESSION['name'])){
	echo"<h1> Already Logged IN</h1><a href='logout.php'><div class='formi'><button class='bigbun'><b>LogOut</b></button></div></a>";
	die();
}
?>


<?php



if((!isset($_POST['s']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email_m']) || empty($_POST['password']) || empty($_POST['cpassword']))  ){
	echo"<h1>Create Your Account</h1>";
	echo "<h5>Fill up All the Requirements</h5>";
}

else{
$email=$_POST['email_m'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];

$pass = $_POST['password'];
$en=$_POST['s'];
$rpass=$_POST['cpassword'];

if(mysql_num_rows(mysql_query("SELECT email FROM temp WHERE email = '$email'"))){
	   echo"<h1>Create Your Account</h1>";
		echo "<h5>This e-mail already exits.Try with new one</h5>";

}
    
	else if($pass!=$rpass ){
		echo"<h1>Create Your Account</h1>";
		echo "<h5>Password Doesn't match</h5>";
	
	}
	else{
		$sql = "INSERT INTO temp(fname,lname,gen,email,pass) VALUES('$first','$last','$en','$email','$pass')";
mysql_query($sql);
echo "<h2>Successfully Registered</h2><br>";
echo "<div class='formi'><a href='home.php'><button class='bigbun' ><b>Login </b></button></a></div> ";

die();
		
	}
	
	
	
	

}

?>



<form class="ff" method="post" name="contact" action="sign.php" >


First  name  :    <input type="text" name="first_name" /> 
  Last name  :  <input type="text" name=" last_name"/>
<br><br><br>
Gender : <input type="radio" name="s" value="male"> Male
<input type="radio" name="s" value="female">Female<br><br>
<br>
Email ID :  <input type="text" name="email_m" /><br><br><br>
Password:  <input type="password" name="password" id="p1" onkeyup="checklength()" /><br>
<span id="cm" >  </span>
<br><br>
Re-Enter :  <input type="password" name="cpassword"  id="p2" onkeyup="checkPassImg()"; return false; /><br>
<span id="confirmMessage" >  </span>
<br><br>
 <input type="submit" value="Submit" />
</form>






</body>
</html>