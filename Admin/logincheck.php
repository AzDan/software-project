<?php
include ('../Student/db.php');

  $myusername = $_POST['u'];
  $mypassword = $_POST['p'];

  $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword';";
  if(mysqli_query($conn,$sql))
  {
   header('Location: Add events.html');
  //echo $num_rows;
  }
  else
  {
    echo 'ERROR';
  }

$conn->close();
?>
