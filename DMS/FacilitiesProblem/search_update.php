<?php
include 'connection.php';
$Room_Number = $_POST['Room_Number'];
$result = mysqli_query($conn, "SELECT Room_Number,sum(Damaged_Fan_Un+Damaged_Light_Un) as total_uv, sum(Damaged_Fan_Pro+Damaged_Light_Pro) as total_pro,sum(Damaged_Fan_Sol+Damaged_Light_Sol) as total_sol, Modified_Date FROM facility_problem where Room_Number='$Room_Number' ");

?>
<!DOCTYPE html>
<html>

<head>
  <title> Retrive data</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }

    .center {
      margin-left: auto;
      margin-right: auto;
    }

    .button {
      background-color: #4CAF50;
      /* Green */
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
    .search{
        margin-top: 70px;
        margin-left: 400px;
    }
    
  </style>
</head>

<body style="background-color: darkslategray;">
  <table class="search" class="center table table-striped">
    <tr>
      <td>Room Number</td>
      <td> Total Unsolved</td>
      <td> Total Processing</td>
      <td> Total Solved</td>
      <td> Modified Date</td>
    </tr>
    <?php
    while ($row1 = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td><?php echo $row1["Room_Number"]; ?></td>
        <td><?php echo $row1["total_uv"]; ?></td>
        <td><?php echo $row1["total_pro"]; ?></td>
        <td><?php echo $row1["total_sol"]; ?></td>
        <td><?php echo $row1["Modified_Date"]; ?></td>
       
      </tr>
    <?php
    }
    ?>
  </table>
  <center>
    <button class="button"> <a href="DispFP.php" style="text-decoration: none;">Back</a> </button>
  </center>

</body>

</html>