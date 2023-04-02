 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
      body{
        background-image: url(../images/g1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
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
  
	<body bgcolor="lightgreen"> 
	<table align="center" border="1px" style="width:1000px; line-height:40px; margin-top:80px"> 
	<tr> 
		<th colspan="8"><h2>Staff Record</h2></th> 
		</tr> 
			  <th> Staff ID </th> 
			  <th> Name </th> 
        <th> Address </th> 
			  <th> Email </th> 
			  <th> Designation</th> 
        <td> Operations</td>
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from Staff ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['S_ID']; ?></td> 
		<td class="tdr"><?php echo $row1['Name']; ?></td> 
		<td class="tdr"><?php echo $row1['Address']; ?></td> 
    <td class="tdr"><?php echo $row1['Email']; ?></td>
    <td class="tdr"><?php echo $row1['Designation']; ?></td>
    <td style="width: 140px;">
                            <button id="delete"><a href="Delete.php?S_ID=<?php echo $row1["S_ID"]; ?>" id="link1">Delete</a></button>
                            <button id="update"><a href="update.php?S_ID=<?php echo $row1["S_ID"]; ?>" id="link1">Update</a></button>

                            </td>
		</tr> 
	<?php 
               } 
          ?> 

	</table>
<center>
 <button class="button" > <a href="staff.html" style="text-decoration: none;">INSERT</a> </button> 
 <button class="button" > <a href="index.html" style="text-decoration: none;">Search</a> </button>
 <button class="button" > <a href="../dashboard/home.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>