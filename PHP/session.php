<?php

session_start();
$db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');
if(isset($_SESSION['email'])){
  echo $_SESSION['email'];
}



 ?>
