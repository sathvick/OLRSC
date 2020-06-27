<?php
session_start();
include "config.php";

$email = $_SESSION["email"];
echo $email;


   $sql = "UPDATE admin SET Result = 'Yes' WHERE Email = '$email';";
   
   if ($conn->query($sql) === TRUE) {
      //  echo "Data Updated";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }






?>

