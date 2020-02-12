<?php
$servername   = "localhost";
$database = "olrsc_test";
$username = "root";
$password = "WAp6aspu";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";

 ?>
