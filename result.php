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
text-align:center;
margin-left:5%;
	
}
.bigbun:hover{
cursor:pointer;
background-color:#FF69B4;



	
}
.para{
	margin-left:60;
}
.radio{
	color:#006400;
	margin-left:35%;
	font-size:18;
	display:inline-block;
}

div{
	display:inline-block;
}
</style>
<body>
 <div class="divi">


<a href="contact.php"><button class="bun" ><b>Contact </b></button></a>
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


<form>


</form>


<?php
$id=$_GET['id'];
if(!isset($_SESSION['name'])){
	echo"<h3> To Participate in this Voting</h3><br><a href='home.php'><button class='bigbun' style='margin-left:44%'><b>Log In</b></button></a><br><br><a href='sign.php'><button class='bigbun' style='margin-left:44%'><b>Sign In</b></button></a>";
	echo"<br><br><h3>To View Result Of This Voting</h3><br>";
	echo"<a href='resultview.php?id=$id'><button class='bigbun'style='margin-left:44%'><b>Result</b></button></a>";
	die();
}
?>
<?php
$flag=1;
$temp='';
 $filename = 'file/'.$id.'.txt';
	$myf=fopen($filename,'r');
while (($line = fgets($myf)) !== false) {
        if($line==$_SESSION['name'].PHP_EOL){
			$flag=0;
			break;
		
		}
		$temp=$line;
    }










	$sql = "select * from votelist where id='$id'" ;
$res=mysql_query($sql);

while($row=mysql_fetch_array($res)){
	
	echo"<h1>".$row['title']."</h1>";
	echo "<h3>".$row['description']."</h3>";
   echo"<br>";
	echo "<form class='radio' method='get' action='update.php'>";
	echo "<input type='radio' name='op' value='1'>".$row['op1']."<br><br>";
    echo "<input type='radio' name='op' value='2'>".$row['op2']."<br><br>";
	if(!empty($row['op3'])){
		 echo "<input type='radio' name='op' value='3'>".$row['op3']."<br><br>";
	}
	if(!empty($row['op4'])){
		 echo "<input type='radio' name='op' value='4'>".$row['op4']."<br><br>";
	}
	if(!empty($row['op5'])){
		 echo "<input type='radio' name='op' value='5'>".$row['op5']."<br><br>";
	}
	echo"<input type='hidden' name='id' value='$id'/>";
	if($flag==1){
	echo "<input type='submit' value='Vote' class='bigbun'/><br>";
	}
	else{
		$myint=(int)$temp;
		$myy='op'.$myint;
		echo "<h4 >Your have already voted for <span style='color:red'> ".$row[$myy]."</span></h4>";
	}
	echo "</form>";
	
		
}
echo "<a href='resultview.php?id=$id'><button class='bigbun'>Result</button></a>";

?>


	
</body>
</html>