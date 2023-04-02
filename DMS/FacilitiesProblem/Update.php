<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE facility_problem set Damaged_Fan_Un='" . $_POST['Damaged_Fan_Un'] . "',
 Damaged_Fan_Pro='" . $_POST['Damaged_Fan_Pro'] . "', Damaged_Fan_Sol='" . $_POST['Damaged_Fan_Sol'] . "',
  Damaged_Light_Un='" . $_POST['Damaged_Light_Un'] . "',Damaged_Light_Pro='" . $_POST['Damaged_Light_Pro'] . "',Damaged_Light_Sol='" . $_POST['Damaged_Light_Sol'] . "',Modified_Date='" . $_POST['Modified_Date'] . "' WHERE Room_Number='" . $_POST['Room_Number'] . "'");
//  $message = "Record Modified Successfully";
include "DispFP.php";
}
$result = mysqli_query($conn,"SELECT * FROM facility_problem WHERE Room_Number='" . $_GET['Room_Number'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Facilities Problem</title>
<style>
  body{
    background-image: url(../images/sea2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
  .sec{
    margin: 50px 500px;
   align-items: center;
   line-height: 30px;
  }
</style>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<section class="sec">
Room Number: <br>
<input style="width: 50%; height:30px; " type="hidden" name="Room_Number" class="txtField" value="<?php echo $row['Room_Number']; ?>">
<input style="width: 50%; height:30x; " type="number" name="Room_Number"  value="<?php echo $row['Room_Number']; ?>">
<br>
Damaged Fan Unsolved: <br>
<input style="width: 50%; height:30px; " type="number" name="Damaged_Fan_Un" class="txtField" value="<?php echo $row['Damaged_Fan_Un']; ?>">
<br>
Damaged Fan Processing:<br>
<input style="width: 50%; height:30px; " type="number" name="Damaged_Fan_Pro" class="txtField" value="<?php echo $row['Damaged_Fan_Pro']; ?>">
<br>
Damaged Fan Solved:<br>
<input style="width: 50%; height:30px; " type="number" name="Damaged_Fan_Sol" class="txtField" value="<?php echo $row['Damaged_Fan_Sol']; ?>">
<br>
Damaged Light Unsolved:<br>
<input style="width: 50%; height:30px; " type="number" name="Damaged_Light_Un" class="txtField" value="<?php echo $row['Damaged_Light_Un']; ?>">
<br>
Damaged Light Processing:<br>
<input style="width: 50%; height:30px; " type="number" name="Damaged_Light_Pro" class="txtField" value="<?php echo $row['Damaged_Light_Pro']; ?>">
<br>
Damaged Ligth Solved:<br>
<input style="width: 50%; height:30px; " type="number" name="Damaged_Light_Sol" class="txtField" value="<?php echo $row['Damaged_Light_Sol']; ?>">
<br>
Last Modifed Date:<br>
<input style="width: 50%; height:30px; " type="text" name="Modified_Date" class="txtField" value="<?php echo $row['Modified_Date']; ?>">
<br>
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>