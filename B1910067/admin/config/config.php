<?php
$mysqli = new mysqli("localhost:3306","root","","websitebanhang");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
?>