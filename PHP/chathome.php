<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'thejinjangproject');
?>


<!DOCTYPE html>
<html>
<head>
  <title>Chat</title>
  <link rel="stylesheet" type="text/css" href="chathome.css">
</head>
<body>
<div id="chathome">

  <h1 style="background-color: #6495ed; color: white;"><?php echo
      $_SESSION['email']?>-online</h1>
      <div class="output">
          <?php $sql = "SELECT * FROM posts";
  $result = $conn->query($sql);

    if ($result-> num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "" . $row["email"]. " " .":: " . $row["msg"]." --" .$row["date"]. "<br>";
        echo "<br>";
      }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
      </div>

<form method="POST" action="sendmessage.php">
<textarea name="msg" placeholder="Type to send message..." class="form-control"></textarea><br>
<input type="submit" value="Send">
</form>
<br>

</div>
</body>
</html>
