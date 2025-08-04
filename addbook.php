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

	<center><h1>Choose Your Furniture </h1></center>
	<table border="1" align="center">
		<form action="addbook2.php" method="post">
	<tr>
        <td>Product ID</td>
        <td><input type="text" name="proid" placeholder="Enter Correct product id " ></td>
    </tr>
    <tr >
	<td colspan="2"><center><button class="button" type="submit" name="sub">NEXT</button></center></td>
	</tr>
	
	</form>
	</table>
      </center>


   
	<script src="addbooking.js"></script>
	
	</form>
	</table>
</body>
</html>