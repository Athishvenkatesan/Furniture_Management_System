<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dayana Furniture Shop</title>
  <link rel="shortcut icon" href="./images/d logo.jpg" type="image/x-icon">
   <link rel="stylesheet" href="booking.css">
</head>
<body>
<nav>
      <div class="section__container nav__links">
      <img src="./images/d logo.jpg" alt="" width="100" height="80">
       
        <span><a href="userdash.html">HOME</a></span>
        <span><a href="furniture.html">FURNITURE</a></span>
        <span><a href="booking.php">BOOKING</a></span>
        <span><a href="about.html">ABOUT</a></span>
        <span><a href="contact.html">CONTACT</a></span>
        <span><a href="index.php">LOGOUT</a></span>
        

      </div>
    </nav> 
      
     
      <center> <h2 style="text-align:center">Choose Your Furniture</h2>
<br>
<br>
<div class="row">
  <div class="column">
   
    <img src="./images/table 5.webp" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h3>Table</h3>
    <h4>Prod ID:Table001-010</h4>
  </div>
  <div class="column">
    <img src="./images/chair 5.webp" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
    <h3>Chair</h3>
    <h4>Prod ID:Chair001-010</h4>
  </div>
  <div class="column">
    <img src="./images/dining 5.webp" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    <h3>Dining</h3>
    <h4>Prod ID:Dining001-010</h4>
  </div>
  <div class="column">
    <img src="./images/sofa 5.webp" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    <h3>Sofa</h3>
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
<br>
<br>
<br>
<table border="1" align="center">
		<form action="booking2.php" method="post">
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


   
	<script src="booking.js"></script>
	
</body>
</html>