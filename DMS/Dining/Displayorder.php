<!DOCTYPE html>
<html>

<head>

  <title> Fetch Data From Database </title>

  <style>
    body {
      background-image: url(../images/sea2.jpg);
      background-repeat: no-repeat;
      background-size: cover;

    }

    .tdr {
      text-align: center;
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

    #delete {
      background-color: #f44336;
      color: black;
      border-radius: 9px 9px;

    }

    #link1 {
      color: black;
      text-decoration: none;
      font-size: 15px;
    }

    #update {
      background-color: blue;
      color: black;
      border-radius: 9px 9px;
    }
  </style>
</head>

<body bgcolor="lightblue">
  <table align="center" border="1px" style="width:1000px; line-height:40px; margin-top:50px">
    <tr>
      <th colspan="8">
        <h2>Order Details</h2>
      </th>
    </tr>
    <th> Order ID </th>
    <th> Student Name </th>
    <th> Student ID </th>
    <th> Order Type </th>
    <th>Quantity </th>
    <th>Operations</th>

    </tr>
    <?php
    include 'connection.php';
    $sql = "select * from orders";
    $query = mysqli_query($conn, $sql);
    while ($row1 = mysqli_fetch_array($query)) {
    ?>
      <tr>
        <td class="tdr"><?php echo $row1['order_id']; ?></td>
        <td class="tdr"><?php echo $row1['name']; ?></td>
        <td class="tdr"><?php echo $row1['id']; ?></td>
        <td class="tdr"><?php echo $row1['type']; ?></td>
        <td class="tdr"><?php echo $row1['quantity']; ?></td>
        <td style="width: 140px;">
          <button id="delete"><a href="delete.php?order_id=<?php echo $row1["order_id"]; ?>" id="link1">Delete</a></button>
          <button id="update">
            <a href="order_update.php?order_id=<?php echo $row1["order_id"]; ?>" id="link1"> Update</a>
          </button>


        </td>
      </tr>
    <?php
    }
    ?>

  </table>
  <!-- <a  href="#"><h3 btn style="font-family: sans-serif;  text-align:center; font-size:30px; font-color:green;" >Insert</h3> -->
  <!-- <button class="btn btn-primary btn-lg center"> <a href="#"></a> INSERT</button> -->

  <center>

    <button class="button"> <a href="../index.php" style="text-decoration: none;">Home Page</a> </button>
  </center>
</body>

</html>