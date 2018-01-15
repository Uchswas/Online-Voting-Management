<?php
ob_start();
include 'db.php';
if(isset($_COOKIE['user'])){
	session_start();
		$_SESSION['name']=$_COOKIE['user'];
header('Location:voting.php');
die();
}
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
body{
margin:0;
}
.divi{
 
top:0;
  bottom:0;
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


.logfixed{
  position: fixed;
 top:170;
 right:70;
padding:10;
  z-index: 9999;
  width: 25%;
color:white;
height:240;
background-color:#87CEE8;
font-size:20;
border-radius:5px;
 
  
border:none;
}
.rec{
  position: fixed;
 top:525;
 right:70;
padding:10;
  z-index: 9999;
  width: 25%;
color:white;
height:20;

font-size:20;
border-radius:5px;
 
  
border:none;
}


.recent{
  position: fixed;
 top:480;
 right:85;
  z-index: 9999;
  width: 25%;
color:white;
height:35;
background-color:#87CEE8;
font-size:20;
 
  
border:none;
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

h3,h4{

	font-family: 'Arial Narrow', Arial, sans-serif;
	text-align:center;
color:#20B2AA;
}

h5{
		font-family: 'Arial Narrow', Arial, sans-serif;
	text-align:center;
color:red;
}

.formi{

margin-left:30%;
}
.ff{
padding:5;
}

hover{
cursor:pointer;	
}

.bigbun{

 border-radius: 10px;
	width:180;
	height:35;
	
	background-color:white;
	color:#3CBDF5;
 margin-left:28%;
	font-size:18;
border:none;	
	
}
.bigbun:hover{
cursor:pointer;




	
}
.para{
	margin-left:60;
}

a {text-decoration: none; color:#C71585; }
</style>


<script type="text/javascript">

var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "1.jpg" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "2.jpg"
slideimages[2] = new Image()
slideimages[2].src = "4.jpg"
slideimages[3] = new Image()
slideimages[3].src = "5.jpg"

</script>
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
<img class="im" src="1.PNG" id="slide" width=700 height=530  />
<script type="text/javascript">

//variable that will increment through the images
var step=0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src
 if (step<3)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",3500)
}

slideit()

</script>




<div class="rec">
<button class="recent">Recent</button>
<?php 
echo "<table>";
$result = mysql_query("SELECT * FROM votelist ORDER BY id DESC");
$count=1;
echo "<marquee behavior='scroll' direction='up'scrolldelay='500' height='130' onmouseover='this.stop()' onmouseout='this.start()'  >";
 while($row = mysql_fetch_array($result))
     {
		
		
			if($count==7)
break;				
		 
		 $id=$row['id'];
	
	  echo " <a href='result.php?id=$id'> " . $row['title'] . "</a><br>";
	 

     $count++;
     }
  echo "</table>"   ;  
echo "</marquee>";


?>
</div>
<?php
if(isset($_SESSION['name'])){
	die();
}

?>
<div class="logfixed">

<?php
if(!isset($_POST['username']) || !isset($_POST['password'])){
	
}
else{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$sql = "select user from temp where email='$user' AND pass='$pass'" ;
$res=mysql_query($sql);

while($row=mysql_fetch_array($res)){
	if($row['user']){
		session_start();
		$_SESSION['name'] = $user;

	 if(isset($_POST['rem'])){
		setcookie('user',$user,time()+10);		
	 }
  	
       	
		
	header("Location: voting.php");
		
	}
	
	
}
echo "<p style='color:red;bottom:0;display:inline;margin-left:10%'>Wrong Email and Password</p>";
}
?>

<form method="post" action="home.php"  >
<br>
UserName:  <input type="text" name="username" />
<br><br>
PassWord    :  <input type="password" name="password" />
<br><br>
<input type="checkbox" name="rem"  style="margin-left:130;"/>Remember me
<br><br>
<input type="submit" value="Log In" class="bigbun" />
</form>



</div>

</body>
</html>