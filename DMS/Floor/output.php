 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
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

      </style>
	</head> 
  
	<body bgcolor="lightblue"> 
	<table align="center" border="1px" style="width:1000px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>Floor</h2></th> 
		</tr> 
			  <th> Floor Number</th> 
			  <th> Block </th> 
			  <th> Number of Kitchen </th> 
			  <th> Number of Room </th> 
        <th> Number of Washroom </th> 
        
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from floor";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['Floor_Number']; ?></td> 
		<td class="tdr"><?php echo $row1['Block']; ?></td> 
		<td class="tdr"><?php echo $row1['Num_of_Kitchen']; ?></td> 
		<td class="tdr"><?php echo $row1['Num_of_Room']; ?></td> 
    <td class="tdr"><?php echo $row1['Num_of_Washroom']; ?></td>
    <!-- <td style="width: 140px;">
    <button><a href="Delete.php?Floor_Number=<?php echo $row1["Floor_Number"]; ?>"style=" text-decoration:none; ">Delete</a></button>
    <button><a href="Update.php?Floor_Number=<?php echo $row1["Floor_Number"]; ?>"style=" text-decoration:none; ">Update</a></button>
                            </td> -->
		</tr> 
	<?php 
               } 
          ?> 

	</table>
   <!-- <a  href="#"><h3 btn style="font-family: sans-serif;  text-align:center; font-size:30px; font-color:green;" >Insert</h3> -->
<!-- <button class="btn btn-primary btn-lg center"> <a href="#"></a> INSERT</button> -->

<center>
 <button class="button" > <a href="index.html" style="text-decoration: none;">Search</a> </button>
 <button class="button" > <a href="../home.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>