<?php
if(isset($_POST['Submit'])){
    $jobName = $_GET['jobName'];
    $db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');
    $reviews = $_POST['reviews'];
    $query = "UPDATE jobs SET check_bit=\"1\",job_reviews='$reviews' WHERE job_name = '$jobName'";
    mysqli_query($db, $query) or die(mysqli_error($db));

    if(mysqli_query($db, $query)){
        echo "<script type=\"text/javascript\">location.href = '../showAllJobs.php';</script>";
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
</head>
<body>
<form  method="post">
    <div class="row" style="padding-top: 30px">
        <div class="col-md-6 offset-md-3">
            <textarea  class="form-control" name="reviews" placeholder="reviews..." rows="4" cols="50"></textarea><br>
            <input type="submit" class="btn btn-info" name="Submit" value="Submit">
        </div>
    </div>
</form>
</body>
</html>
