<?php
  include 'db.php';

  if(isset($_POST['submitbtn'])){
    $a=0;
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $reg_no = $_POST['regno'];
    $branch = $_POST['branch'];
    $password = $_POST['pword'];
    $hashed = hash('sha1',$password);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $a=1;
    }
    else{
    $query = "INSERT INTO login VALUES('$reg_no','$hashed','$email','$branch','$first_name','$last_name');";
      if(mysqli_query($conn,$query)) {
        header('Location: login.php');
        exit;
      }
      else {
        echo "Already registered.";
      }
    }
    if($a==1){
    $errormsg="Invalid email";
    echo "<script type='text/javascript'>alert('$errormsg')</script>";
    }
    mysqli_close($conn);
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>َSign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>

    <form action="signup.php" method="post">
      <div class="signupinfo">
        <div class="first-last">
          <label for="fname">First Name</label>
          <input type="text" placeholder="First Name" name="fname" class="ipbox" style="margin-left: 8px;" required>
          <br>
          <label for="lname">Last Name</label>
          <input type="text" placeholder="Last Name" name="lname" class="ipbox" style="margin-left: 10px;" required>
        </div>
          <br>
        <div class="email-pass">
          <label for="email">E-mail</label>
          <input type="text" placeholder="E-mail" name="email" class="email-box" style="margin-left: 40px;" required>
        </div>
          <br>
        <div class="reg-no">
          <label for="regno">Registration Number</label>
          <input type="text" placeholder="Reg. No." name="regno" class="reg-box" style="margin-left: 93px;" required>
        </div>
          <br>
        <div class="email-pass">
          <label for="pword">Password</label>
          <input type="password" placeholder="Password" name="pword" class="pass-box" style="margin-left: 15px;" required>
        </div>
          <br>
          <div class="reg-no" style="margin-left:39px;">
            <label for="branch">Branch</label>
            <input type="text" placeholder="Branch" name="branch" class="address" style="margin-left: 30px;" required>
          </div>
            <br>
          <button type="submit" name="submitbtn" class="signupbtn"><span>SUBMIT</span></button>
      </div>
    </form>
  </body>
</html>
