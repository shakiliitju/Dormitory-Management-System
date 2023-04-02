<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE staff set S_ID='" . $_POST['S_ID'] . "', Name='" . $_POST['Name'] . "', Address='" . $_POST['Address'] . "', Email='" . $_POST['Email'] . "' ,Designation='" . $_POST['Designation'] . "' WHERE S_ID='" . $_POST['S_ID'] . "'");
//  $message = "Record Modified Successfully";
include "DispStaff.php";
//require "DispStudent.php";

}
$result = mysqli_query($conn,"SELECT * FROM staff WHERE S_ID='" . $_GET['S_ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Staff Data</title>
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
Staff ID: <br>
<input style="width: 50%; height:30px; " type="hidden" name="S_ID" class="txtField" value="<?php echo $row['S_ID']; ?>">
<input style="width: 50%; height:30x; " type="text" name="Name"  value="<?php echo $row['S_ID']; ?>">
<br>
Name: <br>
<input style="width: 50%; height:30px; " type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Address:<br>
<input style="width: 50%; height:30px; " type="text" name="Address" class="txtField" value="<?php echo $row['Address']; ?>">
<br>
Email:<br>
<input style="width: 50%; height:30px; " type="text" name="Email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>
Designation:<br>
<input style="width: 50%; height:30px; " type="text" name="Designation" class="txtField" value="<?php echo $row['Designation']; ?>">
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>