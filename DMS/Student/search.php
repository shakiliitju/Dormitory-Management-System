<?php
include 'connection.php';
$Stu_id = $_POST['Stu_id'];
$result = mysqli_query($conn,"SELECT * FROM student where Stu_id='$Stu_id' ");
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
    border: 1px solid black;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
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

</style>
</head>
<body>
<table  class="center table table-striped" >
<tr>
<td>Student ID</td>
<td>Name</td>
<td>Department</td>
<td> Session</td>
<td> Room Number</td>

</tr>
<?php
while($row1 = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row1["Stu_id"]; ?></td>
<td><?php echo $row1["Name"]; ?></td>
<td><?php echo $row1["Department"]; ?></td>
<td><?php echo $row1["Session"]; ?></td>
<td><?php echo $row1["Room_Number"]; ?></td>
</tr>
<?php
}
?>
</table>
<center>
<button class="button" > <a href="DispStudent.php" style="text-decoration: none;">Back</a> </button>
</center>

</body>
</html>