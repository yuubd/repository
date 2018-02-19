<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$sql = "SELECT * FROM user WHERE name='".$_POST['author']."'";
// echo $sql; just checking if the code works well
$result = mysqli_query($conn, $sql);
if($result->num_rows == 0){
  $sql = "INSERT INTO user (name, password) VALUES('".$_POST['author']."','111111')";
  mysqli_query($conn, $sql);
  $user_id = mysqli_insert_id($conn);
} else {
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['id'];
}
$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$user_id."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost:8080/index.php');
// var_dump($row);
// var_dump show the detailed information on $row
// var_dump($result) is the way that figured out num_rows is 1 or 0.
// two tests had been maded: one is the author who is in user and the other one is a new author.
?>
