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
<form  method="post">
    <textarea name="reviews" placeholder="reviews..." rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="Submit" value="Submit">
</form>
