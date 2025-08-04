<?php
  // Database connection
$conn = new mysqli("localhost", "root", "", "fmsdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<html>
	<head>
	<link rel="stylesheet" href="booking.css"/>
    <title></title>
  <link rel="shortcut icon" href="./short icon.png" type="image/x-icon">		
	</head>
<body>
    <center><h1 style="background-color: #c7789d; color:aliceblue;">WELCOME TO DAYANA FURNITURE SHOP</h1>
    <h2 style="color:#c7789d;">Fill your Booking Details</h2>
    <table border="1" align="center">
		<form action="booking3.php" method="post" enctype="multipart/form-data">
    <?php
        if(isset($_POST['sub']))
        {
            $a=$_POST['proid'];
            
            $con=mysqli_connect("localhost", "root", "","fmsdb");
            $sql=" SELECT `brand_name`, `product_name`, `url`, `price` FROM product WHERE product_id='$a'";
            $result = $conn->query($sql);
            //<!-- product details !-->
            if ($result->num_rows > 0) {
                // Output images
                while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td> Product ID </td><td><input type='text' value='" . $a. "' name='prdid'></td></tr>"; // Display image name
                echo "<td> Brand Name </td><td><input type='text' value='" .$row['brand_name'] . "' name='brdnam'></td></tr>"; // Display image name
                echo "<tr><td> Product Name </td><td><input type='text' value='" .$row['product_name'] . "' name='prdnam'></td></tr>"; // Display Product Name
                echo "<tr><td> Images </td><td><img src='" .$row['url'] . "'height='100px' width='100px''></td></tr>"; // Display image from URL
                echo "<tr><td> Amount </td><td><input type='text' value='" .$row['price'] . "' name='amount'></td></tr>"; // Display Product Price
                //echo"<tr><td align='center'> <a href='bill.html'><button  class='buy' name='buy' value='buynow'>Buy Now</button></a></td>";
                echo "</tr>";
                }
            }
        }
                ?>
                
<!--Presonal Details!-->
                
                <tr align="center">
		        <td>Customer Name </td>
		        <td><input type="text" name="name" placeholder="jhone"/></td>
            	</tr>
                <tr align="center">
		        <td>Gender </td>
        		<td> <input type="radio" name="gender" value="Male" />Male <input type="radio" name="gender" value="Female"  />Female </td>
            	</tr>
            	<tr align="center">
	        	<td>Address </td>
        		<td> <input type="text" name="add1" placeholder="Address line 1" /></td>
            	</tr>
            	<tr align="center">
        		<td>Address </td>
        		<td> <input type="text" name="add2" placeholder="Address line 2" /></td>
            	</tr>
                <tr align="center">
        		<td>State</td>
        		<td> <input type="text" name="state" placeholder="Tamil Nadu"/></td>
            	</tr>
                <tr align="center">
        		<td>District</td>
        		<td> <input type="text" name="disct" placeholder="Madurai"/></td>
            	</tr>
                <tr align="center">
        		<td>Pincode</td>
        		<td><input type="text" name="pin" placeholder="123456"></td>
            	</tr>
            	<tr align="center">
            	<td>Phone Number</td>
            	<td><input type="text" name="pho" placeholder="1234567892"/></td>
            	</tr>
                <tr align="center">
        		<td>E-mail ID</td>
        		<td><input type="text" name="mail" placeholder="example@gmail.com"></td>
            	</tr>
                <tr align="center">
        		<td colspan="2"><input type="submit" name="book" value="Book"></td>
                </tr>
            	
        </form>
    </table></center>
</body>
</html>