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
 
 a {text-decoration: none; }
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
        if(value.length<8){
			  pass1.style.borderColor = badColor;
		 ms.style.color = badColor;
        ms.innerHTML = "    Password must have at least 8 charecter";	
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
  src: local('Open Sans'), local('OpenSans'), url('http://themes.googleusercontent.com/static/fonts/opensans/v5/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff') format('woff');
}
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

h3,h4{

	font-family: 'Arial Narrow', Arial, sans-serif;
	text-align:center;
color:red;
}

.para{
		font-family: 'Arial Narrow', Arial, sans-serif;
	text-align:center;
	font-size:20;
color:	#696969;
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





}
a{
	color:black;
}
a:hover{
	color:red;
}
table {
    width: 100%;
	 border-collapse:collapse;
}

   th {
    background-color: #16EBFA;
    color:black;
	text-align:center;
	height:30;
	width:22%;
	
}
th.a{
	width:34%;
	
	
}
td{
	text-align:center;
	width:22%;
	padding:7;
}
td.a{
 
	width:34%;
	padding:left:20;
	padding:7;

}
a{
	color:black;
	text-decoration: none
}
a:hover{
	color:red;
	text-decoration: none
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
	$name=$_SESSION['name']; echo "<p>".$name."</p>" ;
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
for($i=0;$i<3;$i++){
	$inst = simplexml_load_file('inst.xml');
    echo "<h1>".$inst->ins[$i]->heading."</h1>";
	echo "<h4>".$inst->ins[$i]->address."</h4>";
	echo "<br>";
	for($j=0;$j<5;$j++){
		$var="in".$j;
		echo "<p class='para'>".$inst->ins[$i]->$var."</p>";
	}
echo "<br><br>"	;
}
    
?>


</body>
</html>