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
    <br>
<center><h1>Confirm Booking Details</h1></center>
<br>
<br>
	<table border="1" align="center">
		<form action="confirmbook2.php" method="post">
	<tr align="center">
		<td>E-Mail ID</td>
		<td><input type="text" name="mail" /></td>
	</tr>
	<table  align="center">
	<tr>
	<td><a href="editcon.php">Edit Confirm Booking</a></td>	
	</tr>
	<table  align="center">
	<tr>
	<td><button class="button" type="submit" name="view">View</button></td>	
	</tr>
	
	</table>
</body>
</html>