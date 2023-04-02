<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  margin-top: 60px;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
#update{
  background-color: lightblue;
  color: black;
  border-radius: 9px 9px;
}
.record{
  border: white solid 1px;
  
}
    </style>
</head>
<body>
<?php
	$Stu_ID = $_POST['Stu_ID'];
	$Name = $_POST['Name'];
	$Room_Num = $_POST['Room_Num'];
	$Messages = $_POST['Messages'];

	// Database connection
	$conn = new mysqli('localhost','root','','final_dbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into message_table(Stu_ID, Name, Room_Num, Messages) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$Stu_ID, $Name, $Room_Num, $Messages);
		$execval = $stmt->execute();
		echo $execval;
        // echo "Your Problem has been recorder.....";
		$stmt->close();
		$conn->close();
	}
?>
<center>
  <div class="record"><h1>Your Problem has been recorded.....</h1></div>
 <button class="button" id="update"> <a href="../home.php" style="text-decoration: none;">Home Page</a> </button> 
              </center>
</body>
</html>
