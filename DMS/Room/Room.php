<?php
	$Room_Number = $_POST['Room_Number'];
	$Num_of_Table = $_POST['Num_of_Table'];
	$Num_of_Bed = $_POST['Num_of_Bed'];
	$Floor_Number = $_POST['Floor_Number'];

	// Database connection
	$conn = new mysqli('localhost','root','','final_dbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Room(Room_Number, Num_of_Table, Num_of_Bed, Floor_Number) values(?, ?, ?, ?)");
		$stmt->bind_param("iiis", $Room_Number, $Num_of_Table, $Num_of_Bed, $Floor_Number);
		$execval = $stmt->execute();
		echo $execval;
		include "DispRoom.php";
		$stmt->close();
		$conn->close();
	}
?>