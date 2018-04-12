<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <form method="get">
      <div class="row" style="padding-top: 10px">
        <div class="col-md-8 offset-md-1" >
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-info" role="alert">
                <b>Here are important jobs to apply!</b>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <select onchange="this.form.submit()" name="skills_menue" class="form-control">
                <option value=""><b>Filter By</b></option>
                <option value="Cooking">Cooking</option>
                <option value="Handcraft">Handcraft</option>
                <option value="Babysitting">Babysitting</option>
                <option value="Cleaning">Cleaning</option>
                <option value="Sewing">Sewing</option>
                <option value="General Skills">General Skills</option>
                <option value="All">All</option>
              </select><br>
            </div>
          </div>
          <?php
          $sotryBy = "";
          if(isset($_GET["skills_menue"])){
            $sotryBy = $_GET["skills_menue"];
          }
          $con=mysqli_connect('localhost', 'root', '', 'thejinjangproject');
          // Check connection
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $result = mysqli_query($con,"SELECT * FROM jobs");

          echo "<table class='table'>";
          echo "<tr>";
          echo "<th>Name</th>";
          echo "<th>Description</th>";
          echo "<th>Location</th>";
          echo "<th>Skills</th>";
          echo "<th>Date</th>";
          echo "<th>Duration</th>";
          echo "<th>Pay Rate</th>";
          echo "<th>Action</th>";
          echo "</tr>";
          while($row =  mysqli_fetch_row($result))
          {
            if($sotryBy != "" && $sotryBy != "All"){
              if(strpos($row[3],$sotryBy) === false){
                continue;
              }
            }
            echo "<tr>";
            for($i =0; $i < count($row);$i++){
              if($i==7 || $i == 8){
                continue;
              }
              echo "<td>{$row[$i]}</td>";
            }
            if($row[7] == "1")
            echo"<td><a class='btn btn-info' href='showReviews.php/?jobName=".urlencode($row[0])."'><b>Job Done!</b></a></td>";
            else
            echo"<td><a class='btn btn-info' href='reviews.php/?jobName=".urlencode($row[0])."'><b>Apply for this job</b></a></td>";
            echo "</tr>";
          }
          echo "</table>";

          mysqli_close($con);
          ?>
        </div>
        <div class="col-md-2 offset-md-1">
          <a type="submit" class="btn btn-info" href="logout.php"> LogOut </a>
        </div>
      </div>
    </form>
  </body>
  </html>
