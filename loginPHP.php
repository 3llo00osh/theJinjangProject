<?php
//Login
session_start();
$db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if(isset($_POST['login_btn'])){
  $email = mysqli_real_escape_string($db, $_POST['Email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $findMother = mysqli_query($db, "SELECT * FROM `mother` WHERE `email` = '$email'
  AND `password` = '$password';");
  $findClient = mysqli_query($db, "SELECT * FROM `client` WHERE `email` = '$email'
  AND `password` = '$password';");

  if(mysqli_num_rows($findMother) == 1 || mysqli_num_rows($findClient) == 1){
    $_SESSION['email'] = $email;
    header('location: motherProfile.php');
    //header('location: index.php');
  }else{
    $message = "Wrong username or password";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href = 'login.php'</script>";
  }
}
$db->close();
?>
