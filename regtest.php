<?php 

  if (isset($_POST['submit'])) {
    
    $name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if($name && $password && $email){
      $connection=mysqli_connect('localhost','root','','bookshelf');
    
      $query = "INSERT INTO login(username,email,password) VALUES('$name','$email','$password')";

      $result = mysqli_query($connection,$query);
      header('LOCATION:Userpage.php');
    }
  }
 ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up Form</title>

  <style type="text/css">
body {
  font: 13px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: #404040;
  background: #596778;
}

.sign-up {
  position: relative;
  margin: 50px auto;
  width: 280px;
  padding: 33px 25px 29px;
  background: white;
  border-bottom: 1px solid #c4c4c4;
  border-radius: 5px;
  @include box-shadow(0 1px 5px rgba(black, .25));

  &:before, &:after {
    content: '';
    position: absolute;
    bottom: 1px;
    left: 0;
    right: 0;
    height: 10px;
    background: inherit;
    border-bottom: 1px solid #d2d2d2;
    border-radius: 4px;
  }

  &:after {
    bottom: 3px;
    border-color: #dcdcdc;
  }
}

.sign-up-title {
  margin: -25px -25px 25px;
  padding: 15px 25px;
  line-height: 35px;
  font-size: 26px;
  font-weight: 300;
  color: #aaa;
  text-align: center;
  text-shadow: 0 1px rgba(white, .75);
  background: #f7f7f7;

  &:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 8px;
    background: #c4e17f;
    border-radius: 5px 5px 0 0;
    @include linear-gradient(left,
                             #c4e17f, #c4e17f 12.5%,
                             #f7fdca 12.5%, #f7fdca 25%,
                             #fecf71 25%, #fecf71 37.5%,
                             #f0776c 37.5%, #f0776c 50%,
                             #db9dbe 50%, #db9dbe 62.5%,
                             #c49cde 62.5%, #c49cde 75%,
                             #669ae1 75%, #669ae1 87.5%,
                             #62c2e4 87.5%, #62c2e4);
  }
}

input {
  font-family: inherit;
  color: inherit;
  @include box-sizing(border-box);
}

.sign-up-input {
  width: 100%;
  height: 50px;
  margin-bottom: 25px;
  padding: 0 15px 2px;
  font-size: 17px;
  background: white;
  border: 2px solid #ebebeb;
  border-radius: 4px;
  @include box-shadow(inset 0 -2px #ebebeb);

  &:focus {
    border-color: #62c2e4;
    outline: none;
    @include box-shadow(inset 0 -2px #62c2e4);
  }

  .lt-ie9 & { line-height: 48px; }
}

.sign-up-button {
  position: relative;
  vertical-align: top;
  width: 100%;
  height: 54px;
  padding: 0;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(black, .25);
  background: #f0776c;
  border: 0;
  border-bottom: 2px solid #d76b60;
  border-radius: 5px;
  cursor: pointer;
  @include box-shadow(inset 0 -2px #d76b60);

  &:active {
    top: 1px;
    outline: none;
    @include box-shadow(none);
  }
}

:-moz-placeholder { color: #ccc; font-weight: 300; }
::-moz-placeholder { color: #ccc; opacity: 1; font-weight: 300; }
::-webkit-input-placeholder { color: #ccc; font-weight: 300; }
:-ms-input-placeholder { color: #ccc; font-weight: 300; }

::-moz-focus-inner { border: 0; padding: 0; }

  </style>
 <script type="text/javascript">
 function validateEmail(){
  var text = document.forms["anything"]["email"].value;
  var atpos = text.indexOf("@");
  var dotpos = text.lastIndexOf(".");

  if(atpos < 1){
    errors.push("missing something before @");
  }
  else if(dotpos < atpos+2){
    errors.push("1");
  }
  else if(dotpos+2 > text.length){
    errors.push("2");
  }
 }
  function checkForm(form){

  var errors = [];
  var re = /^[\w]+$/;

  // var text = document.forms["anything"]["email"].value;
  // var atpos = text.indexOf("@");
  // var dotpos = text.lastIndexOf(".");

  if(form.username.value == ""){
    errors.push("Username is empty!!");
  }
  
  else if (!re.test(form.username.value)) {
    errors.push("Username contains invalid characters!");
  }

  // if(atpos < 1){
  //   errors.push("missing something before @");
  // }
  // else if(dotpos < atpos+2){
  //   errors.push("1");
  // }
  // else if(dotpos+2 > text.length){
  //   errors.push("2");
  // }

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
<body>
  <form action="regtest.php" method="POST" onsubmit="return checkForm(this);" class="sign-up">
    <h1 class="sign-up-title">Sign up in seconds</h1>
    <input type="text" class="sign-up-input" name="username" placeholder="What's your username?" autofocus>
    <input type="text" class="sign-up-input" name="email" placeholder="What's your usermail? onclick="return validateEmail()" ">
    <input type="password" class="sign-up-input" name="password" placeholder="Choose a password">
    <input type="submit" name="submit" class="sign-up-button">
  </form>
</body>
</html>