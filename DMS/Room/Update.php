<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE room set Room_Number='" . $_POST['Room_Number'] . "', Num_of_Table='" . $_POST['Num_of_Table'] . "', Num_of_Bed='" . $_POST['Num_of_Bed'] . "', Floor_Number='" . $_POST['Floor_Number'] . "' WHERE Room_Number='" . $_POST['Room_Number'] . "'");
//  $message = "Record Modified Successfully";
include "DispRoom.php";
//require "DispStudent.php";

}
$result = mysqli_query($conn,"SELECT * FROM room WHERE Room_Number='" . $_GET['Room_Number'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Room Data</title>
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
Number of Table: <br>
<input style="width: 50%; height:30px; " type="number" name="Num_of_Table" class="txtField" value="<?php echo $row['Num_of_Table']; ?>">
<br>
Num of Bed:<br>
<input style="width: 50%; height:30px; " type="number" name="Num_of_Bed" class="txtField" value="<?php echo $row['Num_of_Bed']; ?>">
<br>
Floor Number:<br>
<input style="width: 50%; height:30px; " type="text" name="Floor_Number" class="txtField" value="<?php echo $row['Floor_Number']; ?>">
<br>
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>