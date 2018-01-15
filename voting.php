<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
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
 @keyframes s { 
        from { 
            width:110; 
        } to { 
            width:200; 
        }
    }	


@keyframes spin { 
        from { 
            transform: rotate(0deg); 
        } to { 
            transform: rotate(360deg); 
        }
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

.largebun{
margin-left:220;
height:200;
width:24%;
color:white;
 background-color: #51D6EB;

border:none;
border-radius:40px;
margin-top:140;
font-size:27;
}
.largebun:hover{
cursor:pointer;
background-color:#FF69B4;

}

.para{
	margin-left:60;
}
</style>
</head>
<body style="margin:0">

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

<br>


<a href="arrange.php"><button class="largebun">Arrange Voting</button></a>
<a href="press.php"><button class="largebun">Apply Voting</button></a>


</body>
</html>