<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <div class="row">
      <form>
        <div class="col-md-9 offset-md-2" style="padding-top: 10px">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-info" role="alert">
                <b>Here are important jobs to apply!</b>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <b>Filter By</b>
              <select onchange="this.form.submit()" name="skills_menue" class="form-control">
                <option selected value="all">All</option>
                <option value="Cooking">Cooking</option>
                <option value="Handcraft">Handcraft</option>
                <option value="Babysitting">Babysitting</option>
                <option value="Cleaning">Cleaning</option>
                <option value="Sewing">Sewing</option>
                <option value="General Skills">General Skills</option>
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
          while($row = $result->fetch_assoc())
          {
            $i = 0;
            echo "<tr>";
            foreach ($row as $value) {
              $i++;
              if($value=="0" || $value=="1")
              continue;
              if($i==4 && $sotryBy != "" && $sotryBy != "All"){
                if(!strpos($value, $sotryBy)){
                  echo "<td></td>";
                  continue;
                }
              }
              echo "<td>" . $value . "</td>";
            }
            echo"<td><a class='btn btn-info'><b>Apply for this job</b></a></td>";
            echo "</tr>";
          }
          echo "</table>";

          mysqli_close($con);
          ?>
        </div>
      </form>
    </div>
  </body>
  </html>
