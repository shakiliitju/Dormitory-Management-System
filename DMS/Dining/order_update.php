<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE orders set order_id='" . $_POST['order_id'] . "', name='" . $_POST['name'] . "',type='" . $_POST['type'] . "', quantity='" . $_POST['quantity'] . "' WHERE order_id='" . $_POST['order_id'] . "'");

}
$result = mysqli_query($conn,"SELECT * FROM orders WHERE order_id='" . $_GET['order_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Order Infor</title>
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
Order ID:  <br>
<input style="width: 50%; height:30px; " type="hidden" name="order_id" class="txtField" value="<?php echo $row['order_id']; ?>">
<input style="width: 50%; height:30x; " type="text" name="order_id"  value="<?php echo $row['order_id']; ?>">
<br>
Name: <br>
<input style="width: 50%; height:30px; " type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Student ID: <br>
<input style="width: 50%; height:30px; " type="text" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<br>
 Type: <br>
<input style="width: 50%; height:30px; " type="text" name="type" class="txtField" value="<?php echo $row['type']; ?>">
<br>
Quantity:<br>
<input style="width: 50%; height:30px; " type="number" name="quantity" class="txtField" value="<?php echo $row['quantity']; ?>">
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">

</section>

</form>
</body>
</html>