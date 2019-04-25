<?php
  include 'db.php';

  if(isset($_POST['submitbtn'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $reg_no = $_POST['regno'];
    $branch = $_POST['branch'];
    $password = $_POST['pword'];
    $hashed = hash('sha1',$password);
    $query = "INSERT INTO login VALUES('$reg_no','$hashed','$email','$branch','$first_name','$last_name');";
      if(mysqli_query($conn,$query)) {
        header('Location: login.php');
        exit;
      }
      else {
        echo "Error connecting to database";
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
          <input type="text" placeholder="First Name" name="fname" class="ipbox" required>
          <br>
          <label for="lname">Last Name</label>
          <input type="text" placeholder="Last Name" name="lname" class="ipbox" style="margin-left: 80px;" required>
        </div>
          <br>
        <div class="email-pass">
          <label for="email">E-mail</label>
          <input type="text" placeholder="E-mail" name="email" class="email-box" required>
        </div>
          <br>
        <div class="reg-no">
          <label for="regno">Registration Number</label>
          <input type="text" placeholder="Reg. No." name="regno" class="reg-box" required>
        </div>
          <br>
        <div class="email-pass">
          <label for="pword">Password</label>
          <input type="password" placeholder="Password" name="pword" class="pass-box" required>
        </div>
          <br>
          <div class="reg-no" style="margin-left:39px;">
            <label for="branch">Branch</label>
            <input type="text" placeholder="Branch" name="branch" class="address" required>
          </div>
            <br>
          <button type="submit" name="submitbtn" class="signupbtn"><span>SUBMIT</span></button>
      </div>
    </form>
  </body>
</html>
