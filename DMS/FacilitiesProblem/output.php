 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
		body{
			background-color: lightskyblue;
			
		}
      .tdr{
        text-align:center;
      }
      .button {
  background-color: #4CAF50; /* Green */
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
.main{
	margin-top: 10px;
	margin-left: 125px;
}

      </style>
	</head> 
  
	<body> 
		<section class="main">
	<table align="center" border="1px" style="width:1100px; line-height:40px;"> 
	<tr> 
		<th colspan="8"><h2>Facilities Problem</h2></th> 
		</tr> 
			  <th> Room Number</th> 
			  <th> Damaged Fan Unsolved</th> 
			  <th> Damaged Fan Processing</th> 
			  <th> Damaged Solved</th> 
			  <th> Damaged Light Unsolved</th> 
			  <th> Damaged Light Processing</th> 
			  <th> Damaged Light Solved</th>
			  <th> Last Modified Date</th>
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from Facility_Problem ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['Room_Number']; ?></td> 
		<td class="tdr"><?php echo $row1['Damaged_Fan_Un']; ?></td> 
		<td class="tdr"><?php echo $row1['Damaged_Fan_Pro']; ?></td> 
		<td class="tdr"><?php echo $row1['Damaged_Fan_Sol']; ?></td> 
		<td class="tdr"><?php echo $row1['Damaged_Light_Un']; ?></td> 
		<td class="tdr"><?php echo $row1['Damaged_Light_Pro']; ?></td> 
		<td class="tdr"><?php echo $row1['Damaged_Light_Sol']; ?></td> 
    <td class="tdr"><?php echo $row1['Modified_Date'];?></td>
   

    <!-- <td style="width: 140px;">
    <button ><a href="Delete.php?Room_Number=<?php echo $row1["Room_Number"]; ?>">Delete</a></button>
    <button ><a href="Update.php?Room_Number=<?php echo $row1["Room_Number"]; ?>">Update</a></button>

                            </td> -->
		</tr> 
	<?php 
               } 
          ?> 

	</table>
	</section>
  

<center>
 <button class="button" > <a href="index.html" style="text-decoration: none;">Search By Date</a> </button>
 <button class="button" > <a href="search_update.html" style="text-decoration: none;">Search BY Room</a> </button>
 <button class="button" > <a href="../home.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>