<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The Jinjang Project - Login</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <video autoplay muted loop id="myVideo">
  <source src="../videos/construction.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
  <div id="login-form">
    <h2>Log In Now!</h2>
    <form method="POST" action="loginPHP.php">
      <p>
        <label for="Email" class="floatLabel">Email</label>
        <input id="email_field" name="Email" type="text">
      </p>
      <p>
        <label for="password" class="floatLabel">Password</label>
        <input id="password_field" name="password" type="password">
        <span>Password length at least 6 characters</span>
      </p>
      <p>
        <button type="submit" name="login_btn"id="submit">Login</button>
      </p>
      </form>
      <p>
        <a href="signup.php" style="text-decoration:none"><button>
          Don't have an account? Signup</button></a>
      </p>
      <p>
        <a href="../home.html" style="text-decoration:none"><button >
          Back to Home Page</button></a>
      </p>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../js/signup.js"></script>
  </body>
  </html>
