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




.formi{

margin-left:30%;
}
.ff{
padding:5;

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




}
a{
	color:black;
}
a:hover{
	color:red;
}
table {
    width: 50%;
	 border-collapse:collapse;
	 float:center;
	 margin-left:25%;
}

   th {
    background-color: #16EBFA;
    color:black;
	text-align:center;
	height:30;
	
	
}

td{
	text-align:center;
	padding:7;
	width:33%;
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
<img display="inline" src="logo.png" width="83%" />
<img  style="margin-top:40"src="scl.png" align="right" width="15%" usemap="#user"/>
<map name="user" >
<area  alt="" title="" href="http://twitter.com" shape="rect" coords="8,6,57,50" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.youtube.com/" shape="rect" coords="60,10,101,50" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.facebook.com/" shape="rect" coords="107,8,147,49" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.linkedin.com/" shape="rect" coords="153,11,191,52" style="outline:none;" target="_self"     />
</map>

<?php

  $id=$_GET['id'];
 

	$sql = "select * from votelist where id='$id'" ;
	$sss = "select * from result where id='$id'" ;
$res=mysql_query($sql);
$res2=mysql_query($sss);
$row2=mysql_fetch_array($res2);


 while($row = mysql_fetch_array($res))
     {
		 echo"<h1> ".$row['title']."</h1>";
		 echo "<h4> Arranged By  ".$row['email']."</h4>";
		  echo "<h4> ".$row['time']."</h4>";
		 
		 
?>
<table>
<th> Candidates<th>
<th> Achieved Vote <th>
<th> Percentance</th>
</table>
<?php		
$count=1;
$total=0;
while ($count<6) {
			  	$opt='op'.$count;
		
		 if(!empty($row[$opt])){
	        $total+=(int)$row2[$count];
	
		}		  
			  $count++;
            
    }
if($total==0){
	$total++;
}



	
		 $count=1;
		 $cnt=1;	 
		 echo "<table class='restable'>";
		  while ($count<6) {
			  	$opt='op'.$count;
				
			  if($cnt%2==0){
			echo "<tr style='background-color:#CCFFFF'>";
		 }
		 else{
				echo "<tr style='background-color:#DEFFDE'>";
		 }
		 if(!empty($row[$opt])){
			 $per=(float)($row2[$count]/$total);
			 $per*=100;
	  echo "<td>".$row[$opt]."</td>";
	  echo "<td>" . $row2[$count]. "</td>";
	  echo "<td>".number_format((float) $per,2, '.', ' ') ."  %</td>";
         
echo "</tr>";
$cnt++;		
		}		  
			  $count++;
            
    }
		echo "</table>" ;
		 
	 
	 }
?>



</body>
</html>