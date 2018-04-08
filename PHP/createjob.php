<?php include('serverconnect.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>The Jinjang Project - Create Job</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jQuery.js"></script>
</head>
<body>
  <div>
    <h2>Create A Job</h2>
    <form method="post" action="createjob.php">
    <p>
      <label for="jobName" class="floatLabel">Job Name: </label>
      <input id="jobname_field" name="jobName" type="text">
    </p>
    <p>
      <label for="jobDescription" class="floatLabel">Job Description: </label>
      <input id="jobdesc_field" name="jobDescription" type="text">
    </p>
    <p>
      <label for="jobLocation" class="floatLabel">Job Location: </label>
      <input id="jobloc_field" name="jobLocation" type="text">
    </p>
      <label class="floatLabel">Skills Needed: </label>
      <input type="checkbox" name="skills" value="Cooking"
      class="skills">Cooking<br />
      <input type="checkbox" name="skills" value="Handcraft"
      class="skills">Handcraft<br />
      <input type="checkbox" name="skills" value="Babysitting"
      class="skills">Babysitting<br />
      <input type="checkbox" name="skills" value="Cleaning"
      class="skills">Cleaning<br />
      <input type="checkbox" name="skills" value="Sewing"
      class="skills">Sewing<br />
      <input type="checkbox" name="skills" value="General Skills"
      class="skills">General Skills<br />
      <br/>
    <p>
      <label for="date" class="floatLabel">Date: </label>
      <input id="date_field" name="date" type="date">
    </p>
    <p>
      <label for="duration" class="floatLabel">Duration: </label>
      <input id="dur_field" name="duration" type="number">
    </p>
    <p>
      <label for="payRate" class="floatLabel">Pay Rate: </label>
      <input id="payrate_field" name="payRate" type="number">
    </p>

    <script>
    $(document).ready(function(){
      $('#submit').click(function(){
        var insert = [];
        $('.get_value').each(function(){
          if($(this).is(":checked"))
          {
            insert.push($(this).val());
          }
        });
        insert = insert.toString();
        $.ajax({
          url:"serverconnect.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
            $('#result').html(data);
          }
        });
      });
    });
    </script>
    <p>
      <button type="submit" name="createjob_btn">Confirm</button>
    </p>
    <p>
      <button type="submit" name="clear_btn">Clear</button>
    </p>
    <p>
      <button type="submit" name="cancel_btn">Cancel</button>
    </p>
    </form>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>
