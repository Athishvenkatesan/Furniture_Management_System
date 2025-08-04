<?php
  // Database connection
$conn = new mysqli("localhost", "root", "", "fmsdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<html>
	<head>
  <title></title>
    <link rel="shortcut icon" href="./Images/HEL Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="booking.css">
  </head>
  <body>
    

  <center> <h1>View Booking Details</h1>
	<table border="1" >
  <tr>
    <th>Product ID</th>
    <th>Customer Name</th>
    <th>Gender</th>
    <th>Address Line 1</th>
    <th>Address Line 2</th>
    <th>State</th>
    <th>District</th>
    <th>Pincode</th>
    <th>Phone Number</th>
    <th>E-Mail ID</th>
    <th>Brand Name</th>
    <th>Product Name</th>
    <th>Amount</th>
    <th>Status</th>
  </tr>
  

	
<?php

$con=mysqli_connect("localhost", "root", "","fmsdb");
$sql="select * from conbook";
$res=mysqli_query($con,$sql);
				
while($coln=mysqli_fetch_array($res))
{
echo"<tr><td>".$coln[0]."</td><td>".$coln[1]."</td><td>".$coln[2]."</td><td>".$coln[3]."</td><td>".$coln[4]."</td><td>".$coln[5]."</td><td>".$coln[6]."</td><td>".$coln[7]."</td><td>".$coln[8]."</td><td>".$coln[9]."</td><td>".$coln[10]."</td><td>".$coln[11]."</td><td>".$coln[12]."</td><td>".$coln[13]."</td></tr>";
}
$result = $conn->query($sql);

// Close database connection
$conn->close();

?>
	<tr align="center">
	<td colspan="14"><a class="back" href="adminindex.html">Back</a></td>
	</tr>
	</table></center>
	<br>
	<br>
</body>
</html> 