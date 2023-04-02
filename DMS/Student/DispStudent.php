 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
       body{
        background-image: url(../images/sea2.jpg);
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
.table2{
  margin-top: 70px;

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
  
	<body bgcolor="lightblue"> 
	<table align="center" class="table2" border="3px solid black" style="width:1000px; line-height:40px;"> 
	<tr> 
		<th colspan="8"><h2>Student Record</h2></th> 
		</tr>
   
			  <th> Student ID </th> 
			  <th> Name </th> 
			  <th> Department </th> 
			  <th> Session </th> 
        <th> Room Number </th> 
        <th> Floor Number </th>
        <th>Operations</th>
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from Student ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['Stu_id']; ?></td> 
		<td class="tdr"><?php echo $row1['Name']; ?></td> 
		<td class="tdr"><?php echo $row1['Department']; ?></td> 
		<td class="tdr"><?php echo $row1['Session']; ?></td> 
    <td class="tdr"><?php echo $row1['Room_Number']; ?></td>
    <td class="tdr"><?php echo $row1['Floor_Number']; ?></td>
    <td style="width: 140px;">
                                <button id="delete"><a href="Delete.php?Stu_id=<?php echo $row1["Stu_id"]; ?>" id="link1">Delete</a></button>
                                <button id="update">
                                <a href="Update.php?Stu_id=<?php echo $row1["Stu_id"]; ?>"id="link1"> Update</a>
                                </button>
                               

                            </td>
		</tr> 
	<?php 
               } 
          ?> 

	</table>
  <center>
 <button class="button" > <a href="student.html" style="text-decoration: none;">INSERT</a> </button> 
 <button class="button" > <a href="index.html" style="text-decoration: none;">Search</a> </button>
 <button class="button" > <a href="../dashboard/home.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>