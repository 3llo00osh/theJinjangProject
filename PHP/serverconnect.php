<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$db = new mysqli('localhost', 'root', 'Gr1mjoww', 'jobs');
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$jobname = mysqli_real_escape_string($db, $_POST['jobname']);
$jobdesc = mysqli_real_escape_string($db, $_POST['jobdesc']);
$jobloc = mysqli_real_escape_string($db, $_POST['jobloc']);
$skills = mysqli_real_escape_string($db, $_POST['skills']);
$date = mysqli_real_escape_string($db, $_POST['date']);
$duration = mysqli_real_escape_string($db, $_POST['duration']);
$payrate = mysqli_real_escape_string($db, $_POST['payrate']);

$sql = INSERT INTO demo (jobname, jobdesc, jobloc, skills, date, duration, payrate) VALUES ('jobs');

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>
