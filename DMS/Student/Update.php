<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set Stu_id='" . $_POST['Stu_id'] . "', Name='" . $_POST['Name'] . "', Department='" . $_POST['Department'] . "', Session='" . $_POST['Session'] . "' ,Room_Number='" . $_POST['Room_Number'] . "' ,Floor_Number='" . $_POST['Floor_Number'] . "' WHERE Stu_id='" . $_POST['Stu_id'] . "'");
include "DispStudent.php";
}
$result = mysqli_query($conn,"SELECT * FROM Student WHERE Stu_id='" . $_GET['Stu_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Student Data</title>
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
<input style="width: 50%; height:30px; " type="hidden" name="Stu_id" class="txtField" value="<?php echo $row['Stu_id']; ?>">
<input style="width: 50%; height:30x; " type="text" name="Name"  value="<?php echo $row['Stu_id']; ?>">
<br>
Name: <br>
<input style="width: 50%; height:30px; " type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Department:<br>
<input style="width: 50%; height:30px; " type="text" name="Department" class="txtField" value="<?php echo $row['Department']; ?>">
<br>
Session:<br>
<input style="width: 50%; height:30px; " type="text" name="Session" class="txtField" value="<?php echo $row['Session']; ?>">
<br>
Room_Number:<br>
<input style="width: 50%; height:30px; " type="number" name="Room_Number" class="txtField" value="<?php echo $row['Room_Number']; ?>">
<br>
Floor_Number:<br>
<input style="width: 50%; height:30px; " type="text" name="Floor_Number" class="txtField" value="<?php echo $row['Floor_Number']; ?>">
<br>
<!-- <button>submit</button> -->
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>