<?php
	$conn = mysqli_connect("localhost", "root", 306698);
  // connect to DB
	mysqli_select_db($conn,"opentutorials");
  // select DB
  $name = mysqli_real_escape_string($conn,$_GET['name']);
  $password = mysqli_real_escape_string($conn,$_GET['password']);
  // the way that allows user to use ' as a string and prevent hackers to use ' to attack
  $sql = "SELECT * FROM user WHERE name = '".$name."' AND password = '".$password."'";
	echo $sql;
  $result = mysqli_query($conn, $sql);
  // var_dump($result->num_rows);
  // send code to sql
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

    <?php
    if($result->num_rows == "0"){
      echo "who r u";
    } else {
      echo "hi master";
    }
    ?>

</body>
</html>
