<?php
	$S_ID = $_POST['S_ID'];
	$Name = $_POST['Name'];
    $Address = $_POST['Address'];
	$Eamil = $_POST['Email'];
	$Designation = $_POST['Designation'];

	// Database connection
	$conn = new mysqli('localhost','root','','final_dbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into staff(S_ID, Name, Address, Email, Designation) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("issss", $S_ID, $Name, $Address, $Eamil, $Designation);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Staff info is inserted successfully...";
		include "DispStaff.php";
		$stmt->close();
		$conn->close();
	}
?>