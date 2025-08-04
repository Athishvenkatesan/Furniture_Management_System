<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/adminlogin.css" />
		<link rel="shortcut icon" href="./images/d logo.jpg" type="image/x-icon">

  
  
  <title>Dayana Furniture Shop</title>
    </head>
    <body>
    <div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="post">
				<h1>Admin - Login</h1>
				<br>
				
				<input type="text" placeholder="username" name="username"/>
				<input type="password" placeholder="Password" name="password" />
				
				<button  name="log">Log IN</button> <br>
        <center><button class='back'><a href='index.php'>Back</a></button></center>  
			
		</div>
		<div class="overlay-container">
			<img src="./images/adminlogin.webp" alt="" width="460"> 
			
		</div>
	</div>

            <!-- <button name="log">Sign In</button> -->
        
          </form>
        <?php
				
				if(isset($_POST['log']))
				{
                    $name=$_POST['username'];
				    $pwd=$_POST['password'];
				if(($name=="Admin"|| $name=="admin"||$name=="ADMIN")&&($pwd=="Admin"||$pwd=="admin"||$pwd=="ADMIN"))
				{
				echo("<script>window.location.href='adminindex.html'</script>");
				}
				else
				{
				echo"<script>alert('User name and Password Incorrect')</script>";
				}
				}
			?>
    </body>
</html>