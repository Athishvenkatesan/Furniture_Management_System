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
    <link rel="stylesheet" href="categ.css">
    </head><body>

  <center> <h1>View Product Details</h1>

	<table>
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

	
	</table></center>
	<br>
	<br>
</body>
</html> 