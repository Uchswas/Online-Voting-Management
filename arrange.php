<?php
ob_start();
include 'db.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<style>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url('http://themes.googleusercontent.com/static/fonts/opensans/v5/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff') format('woff');
}
a {text-decoration: none; }
body{
margin:0 auto;
}
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


p{
	
	display:inline;
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
	
	background-color:#51D6EB;
	color:white;
	font-size:18;
border:none;	
margin-left:45%;
	
}
.bigbun:hover{
cursor:pointer;
background-color:#FF69B4;



	
}
.para{
	margin-left:60;
}
sup{
	color:red;
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
if(!isset($_SESSION['name'])){
	echo"<h2> You are not Logged IN</h2><br><a href='home.php'><button class='bigbun'><b>Log In</b></button></a><br><br><a href='sign.php'><button class='bigbun'><b>Sign In</b></button></a>";
	die();
}
?>
<?php
if(!empty($_GET['vote_title']) && !empty($_GET['des']) && !empty($_GET['op1']) && !empty($_GET['op2']) )     {
$title=$_GET['vote_title'];
$des=$_GET['des'];
$op1=$_GET['op1'];
$op2=$_GET['op2'];
$op3=$_GET['op3'];
$op4=$_GET['op4'];
$op5=$_GET['op5'];
$email=$_SESSION['name'];
$time=date("F j, Y, g:i a");  


	$sql = "INSERT INTO votelist(title,description,op1,op2,op3,op4,op5,email,time) VALUES('$title','$des','$op1','$op2','$op3','$op4','$op5','$email','$time')";
mysql_query($sql);


$res=mysql_query("SELECT id FROM votelist ORDER BY id DESC");
$row=mysql_fetch_array($res);
$id= $row['id'];
$one='1';
mysql_query("INSERT INTO result(id) VALUES('$id')");
  
		$filename = 'file/'.$row['id'].'.txt';
	$myf=fopen($filename,"w");

header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<note>";
echo "<from>Jani</from>";
echo "<to>Tove</to>";
echo "<message>Remember me this weekend</message>";
echo "</note>";


	
	header('location:press.php');
	die();
}

?>
<h1>Post your Topics </h1>
<h5>Fill up the Requirements</h5>

<form class="ff" method="get" name="contact" action="arrange.php" >


Voting Title<sup>*</sup><br><br>    <input type="text" size="48" name="vote_title"/><br><br>
Description<sup>*</sup> <br> <br>    <textarea  rows="3" cols="50" name="des"></textarea><br><br><br>
Option 1<sup>*</sup>   <input type="text"  name="op1"/>
Option 2<sup>*</sup> <input type="text"  name="op2"/><br><br>
Option  3     : <input type="text"  name="op3"/>
Option  4     :  <input type="text"  name="op4"/><br><br>
Option  5  : <input type="text"  name="op5"/><br><br>

  <input type="submit" value="Submit" />
</form>


</body>
</html>