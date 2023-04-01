<?php
  session_start();
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "DMS";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
  
  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
