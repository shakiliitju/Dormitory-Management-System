<?php
include 'connection.php';
$S_ID = $_POST['S_ID'];
$result = mysqli_query($conn,"SELECT * FROM Staff where S_ID='$S_ID' ");
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
<td>Staff ID</td>
<td>Name</td>
<td>Address</td>
<td> Email</td>
<td> Designation</td>


</tr>
<?php
while($row1 = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row1["S_ID"]; ?></td>
<td><?php echo $row1["Name"]; ?></td>
<td><?php echo $row1["Address"]; ?></td>
<td><?php echo $row1["Email"]; ?></td>
<td><?php echo $row1["Designation"]; ?></td>
</tr>
<?php
}
?>
</table>
<center>
<button class="button" > <a href="DispStaff.php" style="text-decoration: none;">Back</a> </button>
</center>

</body>
</html>