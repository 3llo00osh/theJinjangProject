<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$jobname = =$jobdesc = $jobloc = $skills = $date = $duration = $payrate ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["jobname"])) {
    $jobnameEr = "The job name is needed";
  } else {
    $jobname = test_input($_POST["jobname"]);
  }

  if (empty($_POST["jobdesc"])) {
    $jobdescEr = "The job description is needed";
  } else {
    $jobdesc = test_input($_POST["jobdesc"]);
  }

  if (empty($_POST["jobloc"])) {
    $joblocEr = "The job location is needed";
  } else {
    $jobloc = test_input($_POST["jobloc"]);
  }

  if (empty($_POST["skills"])) {
    $skillsEr = "The skills needed are needed";
  } else {
    $skills = test_input($_POST["skills"]);
  }

  if (empty($_POST["date"])) {
    $dateEr = "The date of the job is needed";
  } else {
    $date = test_input($_POST["date"]);
  }

  if (empty($_POST["duration"])) {
    $durationEr = "The duration of the job in days is required";
  } else {
    $duration = test_input($_POST["duration"]);
  }

  if (empty($_POST["payrate"])) {
    $payrateEr = "The pay rate per hour is required";
  } else {
    $payrate = test_input($_POST["payrate"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Job Name: <input type="text" name="jobname" value="<?php echo $jobname;?>">
  <span class="error">* <?php echo $jobnameEr;?></span>
  <br><br>
  Job Description: <input type="text" name="jobdesc" value="<?php echo $jobdesc;?>">
  <span class="error">* <?php echo $jobdescEr;?></span>
  <br><br>
  Job Location: <input type="text" name="jobloc" value="<?php echo $jobloc;?>">
  <span class="error">* <?php echo $joblocEr;?></span>
  <br><br>
  Skills Needed:
  <input type="checkbox" name="skills" <?php if (isset($skills) &&
  $skills=="Cooking") echo "checked";?> value="Cooking">Cooking
  <input type="checkbox" name="skills" <?php if (isset($skills) &&
  $skills=="Handcraft") echo "checked";?> value="Handcraft">Handcraft
  <input type="checkbox" name="skills" <?php if (isset($skills) &&
  $skills=="Babysitting") echo "checked";?> value="Babysitting">Babysitting
  <input type="checkbox" name="skills" <?php if (isset($skills) &&
  $skills=="Cleaning") echo "checked";?> value="Cleaning">Cleaning
  <input type="checkbox" name="skills" <?php if (isset($skills) &&
  $skills=="Sewing") echo "checked";?> value="Sewing">Sewing
  <input type="checkbox" name="skills" <?php if (isset($skills) &&
  $skills=="General Skills") echo "checked";?> value="General Skills">General Skills
  <span class="error">* <?php echo $skillsEr;?></span>
  <br><br>
  Date: <input type="date" name="date" value="<?php echo $date;?>">
  <span class="error">* <?php echo $dateEr;?></span>
  Duration: <input type="number" name="duration" value="<?php echo $duration;?>">
  <span class="error">* <?php echo $durationEr;?></span>
  Pay Rate: <input type="number" name"payrate" value="<?php echo $payrate;?>">
  <span class="error">* <?php echo $payrateEr;?></span>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
