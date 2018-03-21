<?php
session_start();
    //Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');
    //When signup button is clicked
    if(isset($_POST['signup_btn'])){
      $name = mysqli_real_escape_string($db, $_POST['Name']);
      $email = mysqli_real_escape_string($db, $_POST['Email']);
      $password = mysqli_real_escape_string($db, $_POST['password']);
      $rePassword = mysqli_real_escape_string($db, $_POST['confirm_password']);
      $contact = mysqli_real_escape_string($db, $_POST['Contact']);
      $address = mysqli_real_escape_string($db, $_POST['Address']);
      $dob = mysqli_real_escape_string($db, $_POST['DOB']);
      $bDescription = mysqli_real_escape_string($db, $_POST['businessDesc']);
      //skills - TBD

      $user_check_query = "SELECT * FROM mother WHERE email='$email' LIMIT 1";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);

      if($user){ //if User exists
        if($user['email'] === $email){
          echo '<script language="javascript">';
          echo 'alert("Email is already used by another User!")';
          echo '</script>';
        }
      }

      if($_POST['uType']=='Mother'){
        $query = "INSERT INTO mother (email, password, name, contact_no, dob,
        address) VALUES ('$email', '$password', '$name', '$contact','$dob',
          '$address')";
           mysqli_query($db, $query);
           $_SESSION['email']=$email;
           $_SESSION['success'] = "You are now logged in";
      }else{
        $query = "INSERT INTO client (email, name, password, address, contact_no,
        business_desc) VALUES ('$email','$name', '$password', '$address', '$contact',
         '$bDescription')";
           mysqli_query($db, $query);
           $_SESSION['email']=$email;
           $_SESSION['success'] = "You are now logged in";
      }
    }
?>
