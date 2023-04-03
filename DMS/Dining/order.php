<?php
	$Floor_Number = $_POST['name'];
	$Block = $_POST['id'];
	$Num_of_Kitchen = $_POST['type'];
	$Num_of_Room = $_POST['quantity'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','dms');
	$stmt = "insert into orders(name, id, type, quantity) values('$Floor_Number',' $Block', '$Num_of_Kitchen', '$Num_of_Room')";
	
	if ($conn->query($stmt) === TRUE) {
		
		include "Displayorder.php";
	  } else {
		echo "Error: " . $stmt . "<br>" . $conn->error;
	  }
