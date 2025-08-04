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
	
<nav>
      <div class="section__container nav__links">
      <img src="./images/d logo.jpg" alt="" width="100" height="80">
       
        <span><a href="adminindex.html">Home</a></span>
        <span><a href="addproduct.php">Add Product</a></span>
        <span><a href="adminFurniture.html">Furniture</a></span>
        <span><a href="addbook.php">Booking</a></span>
        <span><a href="confirmbook.php">ConfirmBooking</a></span>
        <span><a href="addstaff.php">AddStaff</a></span>
        <span><a href="viewstaff.php">ViewAllStaff</a></span>
        <span><a href="report.php">Report</a></span>

        <span><a href="index.php">Logout</a></span>
        

        

      </div>
    </nav> 


  <center> <h1>View All Staff Details</h1>
  <table>
  <tr>
    <th>Staff ID</th>
    <th>Staff Name</th>
    <th>Password</th>
    <th>Qualification</th>
    <th>Salary</th>
  </tr>
  
   
  


	
<?php

		$con=mysqli_connect("localhost", "root", "","fmsdb");
		$sql="select * from staff";
		$res=mysqli_query($con,$sql);
				
			while($coln=mysqli_fetch_array($res))
			{
			echo"<tr><td>".$coln[0]."</td><td>".$coln[1]."</td><td>".$coln[2]."</td><td>".$coln[3]."</td><td>".$coln[4]."</td></tr>";
			}
	
?>
    
	
	</table></center> 
	<br>
	<br>
</body>
</html> 