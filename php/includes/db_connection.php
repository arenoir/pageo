
<?php

// 1. Create a database connection
$servername = "localhost";
$username = "pageo_farms";
$password = "password";
$dbname = "pageo_contact";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


?>