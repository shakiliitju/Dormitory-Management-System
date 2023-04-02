<?php
	$Floor_Number = $_POST['Floor_Number'];
	$Block = $_POST['Block'];
	$Num_of_Kitchen = $_POST['Num_of_Kitchen'];
	$Num_of_Room = $_POST['Num_of_Room'];
	$Num_of_Washroom = $_POST['Num_of_Washroom'];

	// Database connection
	$conn = new mysqli('localhost','root','','final_dbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Floor(Floor_Number, Block, Num_of_Kitchen, Num_of_Room, Num_of_Washroom) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiii", $Floor_Number, $Block, $Num_of_Kitchen, $Num_of_Room, $Num_of_Washroom);
		$execval = $stmt->execute();
		echo $execval;
		include "Dispfloor.php";
		$stmt->close();
		$conn->close();
	}
?>