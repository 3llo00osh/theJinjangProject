<?php
//Signup
session_start();
//Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');

//When signup button is clicked
if(isset($_POST['signup_btn'])){
    $skillsString=" ";

    $name = mysqli_real_escape_string($db, $_POST['Name']);
    $email = mysqli_real_escape_string($db, $_POST['Email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $rePassword = mysqli_real_escape_string($db, $_POST['confirm_password']);
    $contact = mysqli_real_escape_string($db, $_POST['Contact']);
    $address = mysqli_real_escape_string($db, $_POST['Address']);
    $dob = mysqli_real_escape_string($db, $_POST['DOB']);
    $bDescription = mysqli_real_escape_string($db, $_POST['businessDesc']);

    if($_POST['skills'] != ""){
        $skillsString = implode(" ", $_POST['skills']);
        $skillsString = mysqli_real_escape_string($db, $skillsString);
    }
    $user_check_query_mother = "SELECT * FROM mother WHERE email='$email'";
    $user_check_query_client = "SELECT * FROM client WHERE email='$email'";

    $result_mother = mysqli_query($db, $user_check_query_mother) or die(mysqli_error($db));
    $result_client = mysqli_query($db, $user_check_query_client) or die(mysqli_error($db));
    // $user = mysqli_fetch_assoc($result);

    if(empty($name) || empty($email) || empty($password) || empty($rePassword) ||
        empty($contact) || empty($address) || empty($bDescription)){
        echo "<script language='javascript'>;
    alert('Please fill in all the Fields');
    window.location.href = 'signup.php'</script>";
        return;
    }
    else{
        if(mysqli_num_rows($result_mother)>0 || mysqli_num_rows($result_client)>0){
            echo "<script language='javascript'>;
      alert('Email is already used');
      window.location.href = 'signup.php'</script>";
            return;
        }
        else if($password != $rePassword ){
            echo "<script language='javascript'>;
      alert('Passwords are not same');
      window.location.href = 'signup.php'</script>";
            return;
        }else{
            if($_POST['uType']=='Mother'){
                $query = "INSERT INTO mother (email, password, name, contact_no, dob,
          address,skills,check_bit) VALUES ('$email', '$password','$name','$contact','$dob',
            '$address','$skillsString',0)";
                if(mysqli_query($db, $query)){
                    session_start();
                    $_SESSION['email']=$email;
                    $_SESSION['success'] = "You are now logged in";
                    echo "<script type=\"text/javascript\">location.href = 'showAllJobs.php';</script>";
                }
                else{
                    echo "<script language='javascript'>;
                    alert('error');
                    window.location.href = 'signup.php'</script>";
                    return;
                }

            }
            else{
                $query = "INSERT INTO client (email, name, password, address, contact_no,
              business_desc,check_bit) VALUES ('$email','$name','$password','$address','$contact',
                '$bDescription',0)";
                if(mysqli_query($db, $query)){
                    session_start();
                    $_SESSION['email']=$email;
                    $_SESSION['success'] = "You are now logged in";
                    echo "<script type=\"text/javascript\">location.href = 'createjob2.php';</script>";
                }
                else{
                    echo "<script language='javascript'>;
                    alert('error');
                    window.location.href = 'signup.php'</script>";
                    return;
                }
            }
        }
    }
}
?>
