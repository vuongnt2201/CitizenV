<?php
//MYSQL DATABASE 

//CHANGE 'localhost' 'root' to your server name and username of your database. After the username add ,'password' as password of your database 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

?>
