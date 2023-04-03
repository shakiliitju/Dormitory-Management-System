<?php
	$Stu_id = $_POST['Stu_id'];
	$Name = $_POST['Name'];
	$Department = $_POST['Department'];
	$Session = $_POST['Session'];
	$Hall = $_POST['hall'];
	$Room_Number = $_POST['Room_Number'];
	$Floor_Number = $_POST['Floor_Number'];
	$conn = new mysqli('localhost','root','','DMS');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into student(Stu_id, Name, Department, Session, hall, Room_Number, Floor_Number) values('$Stu_id', '$Name', '$Department', '$Session', '$Hall', '$Room_Number', '$Floor_Number')");
		//$stmt->bind_param("isssis", $Stu_id, $Name, $Department, $Session, $Hall, $Room_Number, $Floor_Number);
		$execval = $stmt->execute();
		echo $execval;
		include "DispStudent.php";
		$stmt->close();
		$conn->close();
	}
?>