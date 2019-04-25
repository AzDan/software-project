<?php
  include 'db.php';

  if(isset($_POST['signupbtn'])){
    header('Location: signup.php');
  }

  if(isset($_POST['loginbtn'])){
    $uname=$_POST['username'];
    $pswd=$_POST['password'];
    $hash = hash('sha1',$pswd);

    $data=array();
    $query = "SELECT username,password FROM login WHERE username='$uname';";
    if ($res=mysqli_query($conn, $query)) {
      foreach ($res as $row) {
        $data[]=$row;
      }
    }
    else {
        echo " ";
    }
    $r3=$res->num_rows;
    if($r3>0){
      if ($data[0]['username']==$username && $data[0]['password']==$hash) {
        //$_SESSION['login_user']=$username;
        header('Location: index.html');
        exit;
      }
      else{
        $errormsg="Incorrect username password combo!";
        echo "<script type='text/javascript'>alert('$errormsg')</script>";
      }
    }
    else{
    $errormsg="Incorrect username password combo!";
    echo "<script type='text/javascript'>alert('$errormsg')</script>";
    }
    mysqli_close($conn);
  }
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);


.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  padding: 45px;
  text-align: center;
  margin-left: 47%;
  margin-top: 5%;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  width: 100%;
  border: 0;
  padding: 15px;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>


<div class="header" style="margin-left:40%;">
<img src="http://vectorlogofree.com/wp-content/uploads/2013/01/canadian-olympic-team-logo-vector-400x400.png" width="115px" height="115px">
<h1 class="liketext">SportPro</h1>
</div>

<div class="col-9">
  <div class="login-page">
  <div class="form">
    <form class="login-form" action="login.php" method="post">
      <input type="text" value="username" placeholder="username">
      <input type="password" value="password" placeholder="password">
      <input type="submit" value="LOGIN" name="loginbtn" style="color=black;">
      <input type="submit" value="Sign Up" name="signupbtn" style="color=black;">
    </form>
  </div>
  </div>
</div>

</body>
</html>