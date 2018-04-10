<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>The Jinjang Project - Profile</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
</head>
<body>
  <div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img  class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>

          <input type="file" class="form-control">
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a>
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages
          to the user.
        </div>

        <h3>Your Personal Profile</h3>

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" id="name_fieldE">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" id="email_fieldE">
            </</div>div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" id="password_fieldE">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" id="rePassword_fieldE">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Date of Birth:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" id="dob_fieldE">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Skills:</label>
            <div class="col-md-8">
              <form class= "mothersParam" id="param1">
                <input type="checkbox" name="skills[]" id="skillsE" value="Cooking"
                class="skills"/>Cooking
                <input type="checkbox" name="skills[]" id="skillsE" value="Handcraft"
                class="skills"/>Handcraft
                <input type="checkbox" name="skills[]" id="skillsE" value="Babysitting"
                class="skills"/>Babysitting<br />
                <input type="checkbox" name="skills[]" id="skillsE" value="Cleaning"
                class="skills"/>Cleaning
                <input type="checkbox" name="skills[]" id="skillsE" value="Sewing"
                class="skills"/>Sewing
                <input type="checkbox" name="skills[]" id="skillsE" value="General Skills"
                class="skills"/>General Skills
              </form>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <hr>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/userProfile.js"></script>
</body>
</html>
