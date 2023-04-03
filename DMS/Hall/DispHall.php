 <!DOCTYPE html>
 <html>

 <head>

   <title> Fetch Data From Database </title>

   <style>
     .tdr {
       text-align: center;
     }

     body {
       background-image: url(../images/sea.jpg);
       background-repeat: no-repeat;
       background-size: cover;
     }

     .button {
       background-color: #4CAF50;
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

     .table1 {
       margin-top: 70px;
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

 <body>
   <table align="center" class="table1" border="3px solid black" style="width:1000px; line-height:40px;">
     <tr>
       <th colspan="8">
         <h2>Hall Record</h2>
       </th>
     </tr>
     <th> Hall ID </th>
     <th> Hall Name </th>
     <th> Total Seat </th>
     <th> Available Seat </th>
     <th> Number of Student </th>
     <th> Operations </th>
     </tr>

     <?php
      include 'connection.php';
      $sql = "select * from hall ";
      $query = mysqli_query($conn, $sql);
      while ($row1 = mysqli_fetch_array($query)) {
      ?>
       <tr>
         <td class="tdr"><?php echo $row1['H_ID']; ?></td>
         <td class="tdr"><?php echo $row1['H_Name']; ?></td>
         <td class="tdr"><?php echo $row1['T_Seat']; ?></td>
         <td class="tdr"><?php echo $row1['A_Seat']; ?></td>
         <td class="tdr"><?php echo $row1['N_Student']; ?></td>
         <td style="width: 140px;">
           <center><button id="delete"><a href="Delete.php?H_ID=<?php echo $row1["H_ID"]; ?>" id="link1" style="text-align:center">Delete</a></button></center>
         </td>
       </tr>
     <?php
      }
      ?>

   </table>

   <center>
     <button class="button"> <a href="Hall.html" style="text-decoration: none;">INSERT</a> </button>
     <button class="button"> <a href="../dashboard/home.php" style="text-decoration: none;">Home Page</a> </button>
   </center>
 </body>

 </html>