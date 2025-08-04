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


<center><h1>Report Details</h1>
<br>
<br>
	
		<form action="" method="post">
		
<table id="customers">
  <tr>
    <th>Choose Report Details</th>
    
  </tr></table>
 <table> <tr>
     <td><input type="radio" name="select" value="user">User Details </td>
      <td><input type="radio" name="select" value="product">Product Details</td>
  </tr></table>
 <table> <tr>
    <td><button class="button" type="submit" name="view">View</button></td>
  </tr>
  

	
	
	<?php
	
			if(isset($_POST['view']))
			{
			$a=$_POST['select'];
				if($a=="user")
				{
				echo("<script>window.location.href='viewuser.php'</script>");
				}
				else if($a=="product")
				{
				echo("<script>window.location.href='viewproduct.php'</script>");
				}
			}
	
		
	?>
		</table>
			</form>
		</center>
	
</body>
</html>