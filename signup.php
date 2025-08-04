<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Furniture shop management</title>
  <link rel="shortcut icon" href="./images/d logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/signup.css">
    
</head>
   
<body>
<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="post">
				<h1>Signup</h1>
			
                <div class="form-group">
				<label for="username">Username:</label>
                <input type="text" id="username" name="username" >
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" >
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" >
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" >
                </div>
                <div class="form-group">
                    <input type="submit" value="Signup" name="sub">
                    <button><a href="index.php">Back</a></button>
                </div>
			</form>
		</div>
		<div class="overlay-container">
			<img src="./images/signup pic.webp" alt="" width="500" height="750"> 
			
		</div>
	</div>

             
            </div>

            <?php
		 
     if(isset($_POST['sub']))
        {
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confirmpass=$_POST['confirm_password'];
 
            if(($username=="")||($email=="")||($password=="")||($confirmpass==""))
            {
            echo("<script>alert('Fill All Detail')</script>");
            }
     else
         {
            $con=mysqli_connect("localhost","root","","fmsdb");
            $sql="INSERT INTO user VALUES('$username','$email','$password','$confirmpass')";
            mysqli_query($con,$sql);
            echo("<script>alert('Record Is Added Successfully')</script>");
            }
        }
?>

</body>
</html>