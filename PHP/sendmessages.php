<?php
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');
  $msg=$_POST['msg'];
  $email=$_SESSION['email'];

  $sql="INSERT INTO posts(msg,email) values('$msg', '$email')";
  $result=$conn->query($sql);

  header("Location:chathome.php");

 ?>
