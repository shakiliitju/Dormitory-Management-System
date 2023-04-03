<?php
	$H_ID = $_POST['H_ID'];
	$H_Name = $_POST['H_Name'];
    $T_Seat = $_POST['T_Seat'];
	$A_Seat = $_POST['A_Seat'];
	$N_Student = $_POST['N_Student'];

	// Database connection
	$conn = new mysqli('localhost','root','','DMS');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into hall(H_ID, H_Name, T_Seat, A_Seat, N_Student) values('$H_ID', '$H_Name', '$T_Seat', '$A_Seat', '$N_Student')");
		$execval = $stmt->execute();
		echo $execval;
		// echo "Inserted successfully...";
		include "DispHall.php";
		$stmt->close();
		$conn->close();
	}
?>