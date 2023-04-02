<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE message_table set Stu_ID='" . $_POST['Stu_ID'] . "', Name='" . $_POST['Name'] . "', Room_Num='" . $_POST['Room_Num'] . "', Messages='" . $_POST['Messages'] . "' WHERE Stu_ID='" . $_POST['Stu_ID'] . "'");

include "disp.php";

}
$result = mysqli_query($conn,"SELECT * FROM message_table WHERE Stu_ID='" . $_GET['Stu_ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Message Record</title>
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
Student ID: <br>
<input style="width: 50%; height:30px; " type="hidden" name="Stu_ID" class="txtField" value="<?php echo $row['Stu_ID']; ?>">
<input style="width: 50%; height:30x; " type="text" name="Name"  value="<?php echo $row['Stu_ID']; ?>">
<br>
Name: <br>
<input style="width: 50%; height:30px; " type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Room Number:<br>
<input style="width: 50%; height:30px; " type="text" name="Room_Num" class="txtField" value="<?php echo $row['Room_Num']; ?>">
<br>
Messages:<br>
<input style="width: 50%; height:30px; " type="text" name="Messages" class="txtField" value="<?php echo $row['Messages']; ?>">
<br>
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>