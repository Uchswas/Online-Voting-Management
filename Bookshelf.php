<?php
  if(isset($_COOKIE['user'])) {
    header("location: Userpage.php");
  }
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost','root','','bookshelf');
    $query = "SELECT *  FROM login WHERE username='{$username}' ";
    $select=mysqli_query($connection,$query);

    if ($select==FALSE) {
      echo "Wrong";
    }

    while($row=mysqli_fetch_array($select)){
      $log_user=$row['username'];
      $log_password=$row['password'];
    }
        if($username==$log_user && $password==$log_password){

            session_start();
            $_SESSION['u'] = $username;


          if(isset($_POST['rem'])){
            setcookie('user', $username, time()+60);
          }
      header('location: Userpage.php');
    } 
    else 
      header('location: Bookshelf.php');
  }


 ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        BookShelf.com
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">

     <script type="text/javascript">
function checkForm(form){

  var errors = [];
  var re = /^[\w]+$/;

  if(form.username.value == ""){
    errors.push("Username is empty!!");
  }
  
  else if (!re.test(form.username.value)) {
    errors.push("Username contains invalid characters!");
  }

  if (form.password.value == "") {
    errors.push("Password is empty!");
  }

  if (errors.length > 0) {
    var msg = "ERRORS:\n\n";
    for(var i=0; i<errors.length; i++){
      msg+=errors[i] + "\n";
    }
    alert(msg);
    return false;
  }

  return true;
}

 </script>
</head>
<body >
    <div id="nav">
        <ul>
            <!-- <li><a href="Bookshelf.php">BookShelf</a></li> -->
            <li><a href="Bookshelf.php">BookShelf</a></li>
            <!-- <li><a href="#recommendations">Recommendations</a></li> -->
            <li><a href="#help">Help</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <div id="about">
        <div class="image">
            <img class="logo" src="Capture.JPG">
        </div>
        <div class="topics">
            <div class="topicsNew">
                <h1 class="head">Meet your next fabourite book!</h1>
                <p id="p1">If you love reading and sharing your reading experiences you're in the right place! BookShelf lets you:</p>
                <ul style="list-style-type:square">
                    <li> Tell us what titles or genres you’ve enjoyed in the past, and we’ll give you surprisingly insightful recommendations.</li>
                    <li>Chances are your friends are discussing their favorite (and least favorite) books on BookShelf.</li>
                    <li>Write reviews of any books you read.</li>
                    <li>Read reviews by other BookShelf members.</li>
                </ul>
            </div>
        </div>                
        <div class="signin">
            <div class="boxNew">
                <section class="loginform cf">
                <p id="psign">Become a Member?</p>
                <ul style="list-style-type:none">
                <form action="regtest.php">
                  <li><input type="submit" value="Join Now"></li></li>
                </form>
                </ul>
                <p id="psign">Already a member?</p>

                <form action="Bookshelf.php" method="POST" onsubmit="return checkForm(this);">
                     <p>Username: <input type="text" name="username" ></p>
                     <p>Password: <input type="password" name="password"></p>
                     <p>Remember me <input type="checkbox" name="rem"></p>
                     <input type="submit" name="submit" >
                </form>
            </section>
            </div>   
        </div>
    </div>
    <div id="source">
        <div class="checkout">
            <div class="c1">
                
                <p id="h">Search and Browse books.</p>
                <table id="t1">
                    <tr>
                        <td><a href="#">Art</a></td>
                        <td><a href="#">Crime</a></td>
                        <td><a href="#">Memory</a></td>
                        <td><a href="#">Romance</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Biography</a></td>
                        <td><a href="#">Ebooks</a></td>
                        <td><a href="#">Mystery</a></td>
                        <td><a href="#">Science fiction</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Childrens</a></td>
                        <td><a href="#">Ficton</a></td>
                        <td><a href="#">Non fiction</a></td>
                        <td><a href="#">Suspense</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Comics</a></td>
                        <td><a href="#">History</a></td>
                        <td><a href="#">Philosophy</a></td>
                        <td><a href="#">Sports</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Cookbooks</a></td>
                        <td><a href="#">Horror</a></td>
                        <td><a href="#">Reigion</a></td>
                        <td><a href="#">Travel</a></td>
                    </tr>
                </table>
                <p id="h">Check it out.</p>
                <ul >
                    <li><a href="register.php"> Take the tour.</a></li>
                    <li><a href="register.php">Sign up </a>It's more fun than the tour.</li>
                    <li>See what <a href="#">people and media</a> say about <a href="#">BookShelf</a>.</li>
                </ul>
            </div>
        </div>
        <div class="recent">
            <div class="r1">
                <p id="h">Love Lists?</p>
                <table id="t2">
                    <tr>
                        <td><a href="#">Best Books on User Review.</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Best Books of the 20<sup>th</sup> Century.</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Best Crime amd Mystrey Books.</a></td>
                    </tr>                            
                </table>
                <p id="h">Quotes:</p>
            </div>
        </div>
    </div>
</body>
</html>