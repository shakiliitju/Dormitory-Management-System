<?php
	$P_ID = $_POST['P_ID'];
	$Phone = $_POST['Phone'];
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
		$stmt = $conn->prepare("insert into provost(P_ID, Phone, Name, Address, Email, Designation) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssss", $P_ID, $Phone, $Name, $Address, $Eamil, $Designation);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Inserted successfully...";
		include "DispProvost.php";
		$stmt->close();
		$conn->close();
	}
?>