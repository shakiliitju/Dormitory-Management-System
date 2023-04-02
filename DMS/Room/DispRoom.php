 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
      body{
        background-image: url(../images/img2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
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
#delete{
  background-color: #f44336;
  color: black;
  border-radius: 9px 9px;

}
#link1{
  color: black;
  text-decoration: none;
  font-size: 15px;
}
#update{
  background-color: blue;
  color: black;
  border-radius: 9px 9px;
}

      </style>
	</head> 
  
	<body > 
	<table align="center" border="1px" style="width:1100px; line-height:40px;"> 
	<tr> 
		<th colspan="8"><h2>Room</h2></th> 
		</tr> 
			  <th> Room Number </th> 
			  <th> Number of Table </th> 
			  <th> Number of bed </th> 
			  <th> Floor Number </th> 
        <th> Opeations </th> 
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from room ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
    <a href="" ></a>
		<tr> <td class="tdr"><?php echo $row1['Room_Number']; ?></td> 
		<td class="tdr"><?php echo $row1['Num_of_Table']; ?></td> 
		<td class="tdr"><?php echo $row1['Num_of_Bed']; ?></td> 
		<td class="tdr"><?php echo $row1['Floor_Number']; ?></td> 
    <td style="width: 140px;">
    <button id="delete"><a href="Delete.php?Room_Number=<?php echo $row1["Room_Number"]; ?>" id="link1">Delete</a></button>
    <button id="update"><a href="Update.php?Room_Number=<?php echo $row1["Room_Number"]; ?>" id="link1">Update</a></button>

                            </td>
		</tr> 
	<?php 
               } 
          ?> 

	</table>
<center>
 <button class="button" > <a href="Room.html" style="text-decoration: none;">INSERT</a> </button> 
 <button class="button" > <a href="index.html" style="text-decoration: none;">Search</a> </button>
 <button class="button" > <a href="../dashboard/home.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>