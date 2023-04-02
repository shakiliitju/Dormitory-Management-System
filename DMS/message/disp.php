 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
      body{
        background-image: url(../images/g1.jpg);
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
      </style>
	</head> 
  
	<body bgcolor="lightgreen"> 
	<table align="center" border="1px" style="width:1000px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Message Record</h2></th> 
		</tr> 
			  <th> Student ID </th> 
			  <th> Name </th> 
        <th> Room Number </th> 
			  <th> Message </th>
       
       
			  
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from message_table ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['Stu_ID']; ?></td> 
		<td class="tdr"><?php echo $row1['Name']; ?></td> 
		<td class="tdr"><?php echo $row1['Room_Num']; ?></td> 
    <td class="tdr"><?php echo $row1['Messages']; ?></td>
    <!-- <td style="width: 140px;">
                           <center> <button id="delete"><a href="Delete.php?S_ID=<?php echo $row1["Stu_ID"]; ?>" id="link1">Delete</a></button></center>
                            <button><a href="update.php?S_ID=<?php echo $row1["Stu_ID"]; ?>">Update</a></button>

                            </td> -->
		</tr> 
	<?php 
               } 
          ?> 

	</table>
   <!-- <a  href="#"><h3 btn style="font-family: sans-serif;  text-align:center; font-size:30px; font-color:green;" >Insert</h3> -->
<!-- <button class="btn btn-primary btn-lg center"> <a href="#"></a> INSERT</button> -->

<center>
 <!-- <button class="button" > <a href="staff.html" style="text-decoration: none;">INSERT</a> </button>  -->
 <!-- <button class="button" > <a href="index.html" style="text-decoration: none;">Search</a> </button> -->
 <button class="button" > <a href="../dashboard/home.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>