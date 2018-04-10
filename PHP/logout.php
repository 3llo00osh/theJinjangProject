<?php
$_SESSION['email'] = "";
session_abort();
echo "<script type=\"text/javascript\">location.href = '../home.html';</script>";
?>
