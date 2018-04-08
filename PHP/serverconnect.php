<?php
//Signup
session_start();
//Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');

//When signup button is clicked
if(isset($_POST['createjob_btn']) && isset($_POST['insert'])){
  $jobname = mysqli_real_escape_string($db, $_POST['jobName']);
  $jobdesc = mysqli_real_escape_string($db, $_POST['jobDescription']);
  $jobloc = mysqli_real_escape_string($db, $_POST['jobLocation']);
  $skills = mysqli_real_escape_string($db, $_POST['skills']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $duration = mysqli_real_escape_string($db, $_POST['duration']);
  $payrate = mysqli_real_escape_string($db, $_POST['payRate']);
  $result = mysqli_query($db, $query);

  if(empty($jobname) || empty($jobdesc) || empty($jobloc) || empty($skills)
  || empty($date) || empty($duration) || empty($payrate)){
    echo "<script language='javascript'>;
    alert('Please fill in all the Fields');
    window.location.href = 'createjob.php'</script>";
    return;
  } else {
    $query = "INSERT INTO jobs (job_name, job_description, job_location, skills
      job_date, job_duration, pay_rate, check_bit) VALUES ('$jobname', '$jobdesc',
        '".$_POST["insert"]."', '$jobloc', '$date', '$duration', '$payrate', 0)";
    if(mysqli_query($db, $query)){
      $_SESSION['success'] = "You have created a job";
    }
  }
}
?>
