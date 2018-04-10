<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM server WHERE email='$email' AND password='$password'";
$result=$conn->query($sql);

if (!$row=$result->fetch_assoc()){
  header("Location:error.php");

} else {
  $_SESSION['email']=$_POST['email'];
  header("Location:")
}




  ?>
