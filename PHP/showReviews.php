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
    <div class="row" style="padding-top: 30px">
        <div class="col-md-6 offset-md-3">
            <?php
                $db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');
                $jobName = $_GET['jobName'];
                if($jobName != ""){
                    $query = "SELECT * FROM jobs WHERE job_name = '$jobName'";
                    $result = mysqli_query($db,$query);
                    if(mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_row($result);

                        echo "<label><b>Job Name:</b></label> &nbsp;&nbsp;&nbsp;   " . $row[0] . "<br>";
                        echo "<label><b>Job Description:</b></label>&nbsp;&nbsp;&nbsp;   " . $row[1] . "<br>";
                        echo "<label><b>Job Location:</b></label>&nbsp;&nbsp;&nbsp;   " . $row[2] . "<br>";
                        echo "<label><b>Job Skills:</b></label> &nbsp;&nbsp;&nbsp;  " . $row[3] . "<br>";
                        echo "<label><b>Job Date:</b></label>  &nbsp;&nbsp;&nbsp; " . $row[4] . "<br>";
                        echo "<label><b>Job Duration:</b></label>  &nbsp;&nbsp;&nbsp; " . $row[5] . "<br>";
                        echo "<label><b>Pay Rate:</b></label>  &nbsp;&nbsp;&nbsp; " . $row[6] . "<br>";
                        echo "<label><b>Job Reviews:</b></label>  &nbsp;&nbsp;&nbsp; " . $row[8]."<br>";
                    }
                }
            ?>
            <a class="btn btn-info" href="../showAllJobs.php">Go Back</a>
        </div>
    </div>
</body>
</html>
