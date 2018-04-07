<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>The Jinjang Project - Signup</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jQuery.js"></script>
  <script>
  $(document).ready(function() {
    $("#userType_Mother").on('click', function(){
      $("#param1").show();
      $("#param2").hide();
    });
    $("#userType_Client").on('click', function(){
      $("#param2").show();
      $("#param1").hide();
    });
  });
  </script>
</head>
<body>
  <div>
    <h2>Sign Up Now!</h2>
    <form method="POST" action="server.php" id="signupForm">
    <p>
      <label for="uType" class="floatLabel">Register as: </label><br /><br />
      <input id="userType_Mother" name="uType" type="radio" value="Mother"
      class="userType" checked="checked"/>Mother
      <input id="userType_Client" name="uType" type="radio" value="Client"
      class="userType"/>Client
    </p>
    <p>
      <label for="Email" class="floatLabel">Email</label>
      <input required id="email_fieldS" name="Email" type="text">
    </p>
    <p>
      <label for="Name" class="floatLabel">Name</label>
      <input required id="name_fieldS" name="Name" type="text">
    </p>
    <p>
      <label for="password" class="floatLabel">Password</label>
      <input required id="password_fieldS" name="password" type="password">
      <span>Password length at least 6 characters</span>
    </p>
    <p>
      <label for="confirm_password" class="floatLabel">Confirm Password</label>
      <input required id="passwordRe_fieldS" name="confirm_password" type="password">
      <span>Your passwords do not match</span>
    </p>
    <p>
      <label for="Address" class="floatLabel">Address</label>
      <textarea id="address_fieldS" name="Address" rows="2"></textarea>
    </p>
    <p>
      <label for="Contact" class="floatLabel">Contact Number</label>
      <input required id="contact_fieldS" name="Contact" type="tel" placeholder=
      "01x-xxxxxxxx" maxlength="12">
    </p>
    <div class= "mothersParam" id="param1">
    <p >
      <label for="DOB" class="floatLabel">Date of Birth</label>
      <input id="dob_fieldS"name="DOB" type="date" min="1930-12-31"
      value="1990-01-01" max="2000-01-01" class="dateofbirth">
    </p>
    <p class= "mothersParam" id="param1">
      <label class="floatLabel">Select your Skills</label><br />
      <input type="checkbox" name="skills[]" value="Cooking"
      class="skills"/>Cooking
      <input type="checkbox" name="skills[]" value="Handcraft"
      class="skills"/>Handcraft
      <input type="checkbox" name="skills[]" value="Babysitting"
      class="skills"/>Babysitting
      <input type="checkbox" name="skills[]" value="Cleaning"
      class="skills"/>Cleaning
      <input type="checkbox" name="skills[]" value="Sewing"
      class="skills"/>Sewing
      <input type="checkbox" name="skills[]" value="General Skills"
      class="skills"/>General Skills
    </p>
    </div>
    <p class="clientsParam" id="param2">
      <label for="businessDesc" class="floatLabel">Business Description</label>
      <textarea id="businessDesc_fieldS" name="businessDesc" type="text" row="2">
      </textarea>
    </p>
    <p>
      <button type="submit" name="signup_btn">Create My Account</button>
    </p>
    </form>
    <p>
      <a href="login.php" style="text-decoration:none"><button>
        Already have an account? Login</button></a>
    </p>
    <p>
      <a href="../home.html" style="text-decoration:none"><button >
        Back to Home Page</button></a>
    </p>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../js/signup.js"></script>
</body>
</html>
