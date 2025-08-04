<html>
    <head>
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
    <div class="row">
  <div class="column">
   
    <img src="./images/table 5.webp" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
   <center><h3>Table</h3></center> 
   <h4 style="color:brown">Claire Rectangular Solid Wood Coffee Table In Mahogany Finish</h4>
    <h4>Prod ID:Table001-010</h4>
  </div>
  <div class="column">
    <img src="./images/chair 5.webp" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
   <center><h3>Chair</h3></center> 
    <h4  style="color:brown">Runge Fabric Accent Chair In Pink Colour</h4>
    <h4>Prod ID:Chair001-010</h4>
  </div>
  <div class="column">
    <img src="./images/dining 5.webp" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
   <center><h3>Dining</h3></center> 
    <h4  style="color:brown">Brighton Large- Zella 6 Seater Dining Table Set</h4>
    <h4>Prod ID:Dining001-010</h4>
  </div>
  <div class="column">
    <img src="./images/sofa 5.webp" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    <center><h3>Sofa</h3></center>
    <h4 style="color:brown">Royaloak Audi Fabric Sofa 2S</h4>
    <h4>Prod ID:Sofa001-010</h4>
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="./images/table 5.webp" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="./images/chair 5.webp" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="./images/dining 5.webp" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="./images/sofa 5.webp" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="./images/table 5.webp" style="width:100%" onclick="currentSlide(1)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/chair 5.webp" style="width:100%" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/dining 5.webp" style="width:100%" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/sofa 5.webp" style="width:100%" onclick="currentSlide(4)" alt="">
    </div>
  </div>
</div>
    <form action="" method="post" enctype="multipart/form-data">    

  <center> <h1>Add Product Details</h1>
    
<table>
 
  <tr>
  <td>Brand name</td>
   <td><input type="text" name="prd"></td>
      
  
  </tr>
  <tr>
   <td>Product ID</td>
      <td><input type="text" name="id"></td>
      
  </tr>
  <tr>
  <td>Product Name</td>
      <td><input type="text" name="name"></td>
  </tr>
  <tr>
  <td>Product Image</td>
        <td><input type="file" name="image"></td>
     
  </tr><tr>
   <td>Price</td>
      <td><input type="number" name="price"></td>
     
  </tr></table>

  <table><tr>
      <td><button   class="button" name="upload">Update </button></td> 
    </tr> 

 
   
   
  

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["upload"])) {
        // Database connection
        $conn = new mysqli("localhost", "root", "", "fmsdb");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
   
        $a=$_POST['prd'];
		$b=$_POST['id'];
        $c=$_POST['name'];

        // Upload image to folder
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

        // Save image details to database
        $imageName = $_FILES["image"]["name"];
        $imageUrl = $targetFile;

        $e=$_POST['price'];
         
        
        $sql = "INSERT INTO product VALUES ('$a','$b','$c','$imageName', '$imageUrl','$e')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Image uploaded successfully.')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
    }
?>
</table>
    </form>
    <script src="booking.js"></script>
    </body>
</html>