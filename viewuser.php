<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dayana Furniture Shop</title>
    <link rel="stylesheet" href="booking.css">
  <link rel="shortcut icon" href="./images/d logo.jpg" type="image/x-icon">
</head>
<body>
	


  <center> <h1>View User Details</h1>
  <table>
  <tr>
    <th>Username</th>
    <th>Email.ID</th>
    <th>Password</th>
     <th>Confirm Password</th>
  </tr>
  
 
	
<?php

		$con=mysqli_connect("localhost", "root", "","fmsdb");
		$sql="select * from user";
		$res=mysqli_query($con,$sql);
				
			while($coln=mysqli_fetch_array($res))
			{
			echo"<tr><td>".$coln[0]."</td><td>".$coln[1]."</td><td>".$coln[2]."</td><td>".$coln[3]."</td></tr>";
			}
	
?>
    <table>
	<tr align="center">
	<td colspan="14"><a class="back" href="report.php">Back</a></td>
	</tr>
	</table></center> 
	<br>
	<br>
</body>
</html> 