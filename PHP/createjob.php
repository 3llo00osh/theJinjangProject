<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>

    <style>
        .error{
            color:red;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#form")[0].reset();
        });
    </script>
</head>
<body>

<?php

// define variables and set to empty values
$jobname  = $jobdesc = $jobloc = $skills = $date = $duration = $payrate ="";
$jobnameEr  = $jobdescEr = $joblocEr = $skillsEr = $dateEr = $durationEr = $payrateEr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["jobname"])) {
        $jobnameEr = "*The job name is needed";
    } else {
        $jobname = test_input($_POST["jobname"]);
    }

    if (empty($_POST["jobdesc"])) {
        $jobdescEr = "*The job description is needed";
    } else {
        $jobdesc = test_input($_POST["jobdesc"]);
    }

    if (empty($_POST["jobloc"])) {
        $joblocEr = "*The job location is needed";
    } else {
        $jobloc = test_input($_POST["jobloc"]);
    }

    if (empty($_POST["skills"])) {
        $skillsEr = "*The skills needed are needed";
    } else {
        $skills = implode(",",$_POST["skills"]);
    }

    if (empty($_POST["date"])) {
        $dateEr = "*The date of the job is needed";
    } else {
        $date = test_input($_POST["date"]);
    }

    if (empty($_POST["duration"])) {
        $durationEr = "*The duration of the job in days is required";
    } else {
        $duration = test_input($_POST["duration"]);
    }

    if (empty($_POST["payrate"])) {
        $payrateEr = "*The pay rate per hour is required";
    } else {
        $payrate = test_input($_POST["payrate"]);
    }
    $db = mysqli_connect('localhost', 'root', '', 'thejinjangproject');

    $query = "INSERT INTO jobs (job_name,job_Description,job_location,skills,job_date,
              job_duration,pay_rate,check_bit,job_reviews) VALUES ('$jobname','$jobdesc','$jobloc','$skills','$date',
                '$duration','$payrate',0,'')";
    if(mysqli_query($db, $query)){
        echo "<script language='javascript'>;
                alert('Job is saved!')
             </script>";
        echo "<script language='javascript'>;
                    window.location.href = 'createjob.php'</script>";
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <duv class="row" style="padding-top: 10px">
        <div class="col-md-6 offset-md-3">
            <h2>Add Job</h2>
            Job Name: <input class="form-control" type="text" name="jobname" value="<?php echo $jobname;?>">
            <span class="error"><?php echo $jobnameEr;?></span>
            <br><br>
            Job Description: <input type="text" class="form-control" name="jobdesc" value="<?php echo $jobdesc;?>">
            <span class="error"><?php echo $jobdescEr;?></span>
            <br><br>
            Job Location: <input type="text" class="form-control" name="jobloc" value="<?php echo $jobloc;?>">
            <span class="error"><?php echo$joblocEr;?></span>
            <br><br>
            <div class="radio-inline">
                Skills Needed:
                <input type="checkbox" name="skills[]" <?php if (isset($skills) && $skills=="Cooking") echo "checked";?> value="Cooking">Cooking
                <input type="checkbox" name="skills[]" <?php if (isset($skills) && $skills=="Handcraft") echo "checked";?> value="Handcraft">Handcraft
                <input type="checkbox" name="skills[]" <?php if (isset($skills) && $skills=="Babysitting") echo "checked";?> value="Babysitting">Babysitting
                <input type="checkbox" name="skills[]" <?php if (isset($skills) && $skills=="Cleaning") echo "checked";?> value="Cleaning">Cleaning
                <input type="checkbox" name="skills[]" <?php if (isset($skills) && $skills=="Sewing") echo "checked";?> value="Sewing">Sewing
                <input type="checkbox" name="skills[]" <?php if (isset($skills) && $skills=="General Skills") echo "checked";?> value="General Skills">General Skills
                <span class="error"> <?php echo$skillsEr;?></span>
                <br><br>
            </div>
            Date: <input type="date" class="form-control" name="date" value="<?php echo $date;?>">
            <span class="error"> <?php echo $dateEr;?></span><br>
            Duration: <input type="number" class="form-control" name="duration" value="<?php echo $duration;?>">
            <span class="error"> <?php echo$durationEr;?></span><br>
            Pay Rate: <input class="form-control" type="number" name="payrate" value="<?php echo $payrate;?>">
            <span class="error"> <?php echo$payrateEr;?></span><br>
            <input type="submit" class="btn btn-success" name="submit" value="Submit">
        </div>
        <div class="col-md-2 offset-md-1">
            <a type="submit" class="btn btn-info" href="logout.php"> LogOut </a>
        </div>
    </duv>
</form>
<?php
//echo "<h2>Your Input:</h2>";
//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $website;
//echo "<br>";
//echo $comment;
//echo "<br>";
//echo $gender;
?>


</body>
</html>
