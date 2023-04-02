<?php
// error_reporting(0);
// $conn = mysqli_connect("localhost","root","","student");
include 'connection.php';
// if(count($_POST)>0) {
$Floor_Number = $_POST['Floor_Number'];
$result = mysqli_query($conn,"SELECT * FROM Floor where Floor_Number='$Floor_Number' ");
//}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
  body{
    background-image: url(../images/slider3.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    

  }
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
#tdr{
     width: 50%;
     margin-top: 70px;
     align-items: center;
}


</style>
</head>
<body>
<table id="tdr" class="center table table-striped" >
<tr>
<td>Floor Number</td>
<td>Block</td>
<td>Number of Kitchen</td>
<td> Number of Room</td>
<td> Number of Washroom</td>
</tr>
<?php
while($row1 = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row1["Floor_Number"]; ?></td>
<td><?php echo $row1["Block"]; ?></td>
<td><?php echo $row1["Num_of_Kitchen"]; ?></td>
<td><?php echo $row1["Num_of_Room"]; ?></td>
<td><?php echo $row1["Num_of_Washroom"]; ?></td>
</tr>
<?php
}
?>
</table>
<center>
<button class="button" > <a href="DispFloor.php" style="text-decoration: none;">Back</a> </button>
</center>

</body>
</html>