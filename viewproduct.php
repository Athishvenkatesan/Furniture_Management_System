<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dayana Furniture Shop</title>
    <link rel="stylesheet" href="booking.css">
  <link rel="shortcut icon" href="./images/d logo.jpg" type="image/x-icon">
</head>
<body><?php
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
    <link rel="stylesheet" href="viewuser.css">
  </head>
  <body>
    

  <center> <h1>View Product Details</h1>
	<table border="1" >
  <tr>
    <th>BrandName</th>
    <th>ProductName</th>
    <th>ProductImage</th>
    <th>ProductID</th>
    <th>PRICE</th>
   
  </tr>
  

	
<?php
// Query to retrieve image URLs
$sql = "SELECT brand_name, product_id, product_name, url, price FROM product"; // Retrieve all images
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output images
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['brand_name'] . "</td>"; // Display image name
        echo "<td>" . $row['product_name'] . "</td>"; // Display Product Name
        echo "<td><img src='" . $row['url'] . "'height='100px' width='100px''></td>"; // Display image from URL
        echo "<td>" . $row['product_id'] . "</td>"; // Display Product ID
        echo "<td>" . $row['price'] . "</td>"; // Display Product Price
        echo "</tr>";
    }
} else {
    echo "No images found.";
}

// Close database connection
$conn->close();

?>
	<tr align="center">
	<td colspan="14"><a class="back" href="report.php">Back</a></td>
	</tr>
	</table></center>
	<br>
	<br>
</body>
</html> 