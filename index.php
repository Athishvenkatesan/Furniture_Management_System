<!DOCTYPE html>
<html>
<head>
<title>Dayana Furniture Shop</title>
  <link rel="shortcut icon" href="./images/d logo.jpg" type="image/x-icon">
	 <link rel="stylesheet" href="./css/login.css">
    
</head>
<body>
<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="post">
				<h1>Login</h1>
				<br><br>
				<span>or use your account</span>
				<input type="email" placeholder="Email" name="mail"/>
				<input type="password" placeholder="Password" name="pass" />
				<a href="#">Forgot your password?</a>
				<button value="sub" name="sub">Log In</button>
				<br>
				<br>
               <button><a class="Admin" href="adminlogin.php">Admin login</a></button>  or 
			   <button><a class="signup" href="signup.php">Signup</a><br></button>


				
				


			</form>
		</div>
		<div class="overlay-container">
			<img src="./images/login pic.webp" alt="" width="500" > 
			
		</div>
	</div>

               
           
              
	<?php
				if(isset($_POST['sub']))
				{
					
					$a=$_POST['mail'];
				    $b=$_POST['pass'];
						
                        if(($a=="") || ($b==""))
						{
							echo "<script>alert('invalid username and password')</script>";
						}
						else
						{
							
                            $con=mysqli_connect("localhost", "root", "","fmsdb");
							$sql="select * from user where mail='$a'";
                            
							$result=mysqli_query($con,$sql);
				
								while($row=mysqli_fetch_array($result))
									{
										if(($a==$row[1])&&($b==$row[3]))
										{
											echo("<script>window.location.href='userdash.html'</script>");
										}
										else
										{
											echo("<script>alert('Incorrect User Name and Password')</script>");
										}
									}
						}
					
                    
				}
			?>

</body>
</html>
