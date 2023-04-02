<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE floor set Floor_Number='" . $_POST['Floor_Number'] . "', Block='" . $_POST['Block'] . "', Num_of_Kitchen='" . $_POST['Num_of_Kitchen'] . "', Num_of_Room='" . $_POST['Num_of_Room'] . "', Num_of_Washroom='" . $_POST['Num_of_Washroom'] . "' WHERE Floor_Number='" . $_POST['Floor_Number'] . "'");
//  $message = "Record Modified Successfully";
include "DispFloor.php";
// require "DispStudent.php";
// echo 'record';


}
$result = mysqli_query($conn,"SELECT * FROM floor WHERE Floor_Number='" . $_GET['Floor_Number'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update floor Data</title>
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
<form name="frmUser" method="post" action="#">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<!-- <div style="padding-bottom:5px;">
 <a href="retrieve.php">Employee List</a> 
</div> -->
<section class="sec">
Floor Number: <br>
<input style="width: 50%; height:30px; " type="hidden" name="Floor_Number" class="txtField" value="<?php echo $row['Floor_Number']; ?>">
<input style="width: 50%; height:30x; " type="text" name="Floor_Number"  value="<?php echo $row['Floor_Number']; ?>">
<br>
Block: <br>
<input style="width: 50%; height:30px; " type="text" name="Block" class="txtField" value="<?php echo $row['Block']; ?>">
<br>
Num of Kitchen:<br>
<input style="width: 50%; height:30px; " type="number" name="Num_of_Kitchen" class="txtField" value="<?php echo $row['Num_of_Kitchen']; ?>">
<br>
Num of Room:<br>
<input style="width: 50%; height:30px; " type="number" name="Num_of_Room" class="txtField" value="<?php echo $row['Num_of_Room']; ?>">
<br>
<br>
Num of Washroom:<br>
<input style="width: 50%; height:30px; " type="number" name="Num_of_Washroom" class="txtField" value="<?php echo $row['Num_of_Washroom']; ?>">
<br>
<!-- <br>
Floor_Number:<br>
<input style="width: 50%; height:30px; " type="text" name="Floor_Number" class="txtField" value="<?php echo $row['Floor_Number']; ?>">
<br> -->
<!-- <button>submit</button> -->
<!-- <input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom"> -->
<button>  Submit</button>

</section>


</form>
</body>
</html>