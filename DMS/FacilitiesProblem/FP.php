<?php
	$Room_Number = $_POST['Room_Number'];
	$Damaged_Fan_Un = $_POST['Damaged_Fan_Un'];
	$Damaged_Fan_Pro = $_POST['Damaged_Fan_Pro'];
	$Damaged_Fan_Sol = $_POST['Damaged_Fan_Sol'];
	$Damaged_Light_Un = $_POST['Damaged_Light_Un'];
	$Damaged_Light_Pro = $_POST['Damaged_Light_Pro'];
	$Damaged_Light_Sol = $_POST['Damaged_Light_Sol'];
	$Modified_Date = $_POST['Modified_Date'];
	$conn = new mysqli('localhost','root','','final_dbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Facility_problem(Room_Number, Damaged_Fan_Un, Damaged_Fan_Pro, Damaged_Fan_Sol, Damaged_Light_Un, Damaged_Light_Pro, Damaged_Light_Sol, Modified_Date) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("iiiiiiis", $Room_Number, $Damaged_Fan_Un, $Damaged_Fan_Pro, $Damaged_Fan_Sol, $Damaged_Light_Un, $Damaged_Light_Pro, $Damaged_Light_Sol, $Modified_Date);
		$execval = $stmt->execute();
		echo $execval;
		include "DispFP.php";
		$stmt->close();
		$conn->close();
	}
?>