<?php
include ('../Student/db.php');

if(isset($_POST['loginbtn'])){

  $myusername = $_POST['u'];
  $mypassword = $_POST['p'];

  $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword';";
  if ($res=mysqli_query($conn, $sql)) {
    foreach ($res as $row) {
      $data[]=$row;
    }
  }
  else {
      echo " ";
  }
  $r3=$res->num_rows;
  if($r3>0){
    if ($data[0]['username']==$myusername && $data[0]['password']==$mypassword) {
      //$_SESSION['login_user']=$username;
      header('Location: Add Events.html');
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
$conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</style>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-97824898-1', 'auto');
ga('send', 'pageview');
</script>

</head>
<body style="color:#FFFFFF;">

<header>
<img src="http://vectorlogofree.com/wp-content/uploads/2013/01/canadian-olympic-team-logo-vector-400x400.png" width="100px" height="80px">
<a href="../Student/login.php" style="float:right;">STUDENT LOGIN</a>
<h1 class="liketext">SportPro</h1>
</header>

<div class="row">
<br><br>

<div class="col-12" style="padding-left:20%;padding-right:20%;" >
<div style="width:100%;border-style:solid; border-radius:10px;text-align:center;border-color:#0000ff">
 <h2 class="liketext">Login!</h2>

    <form action="index.php" method="post">
      <input type="text" name="u" id="username" placeholder="username" class="bigtext"required /><br><br>
      <input type="password" name="p" id="password" placeholder="password" required class="bigtext" /><br><br>
      <input type="submit" name="loginbtn" value="Login"/>
    </form>

	</div>
</div>


</div>


</div>

<footer>
  <p>Copyright 2019 by S Corp. All Rights Reserved.</p>
</footer>

</body>
</html>
