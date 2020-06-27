<?php
session_start();
include "config.php";
ignore_user_abort(true);
date_default_timezone_set("America/Chicago");
$date = date('Y-m-d H:i:s');

$email = $_SESSION["email"];



   $sql = "UPDATE admin SET Result_Close = '$date' WHERE Email = '$email';";
   
   if ($conn->query($sql) === TRUE) {
    //    echo "Good Bye";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }






?>

