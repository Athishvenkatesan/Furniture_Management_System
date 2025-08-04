<!DOCTYPE html>
<html lang="en">
<head>

	
</head>
<body>
	
<nav>
      
</nav> 

<h1 align="center">ADDING STAFF'S DETAILS</h1>
<br>
	
	
<form action="" method="post">		
    <center><table>
 
 <tr>
   <td>Staff ID</td>
   <td> <input type="text" name="id" ></td>
  
 </tr>
 <tr>
   <td>Staff Name</td>
   <td><input type="text" name="sfn" ></td>
 
 </tr>
 <tr>
   <td>Qualification</td>
   <td><input type="text" name="q" ></td>
   
 </tr>
 <tr>
   <td>Salary</td>
   <td> <input type="text" name="sy" /></td>
   
 </tr> </table>
 <table> <tr>
   <td> <button class="button" type="submit" name="addstf">Add Staff</button></td>
   
 </tr>
</table>

</center>
		</form>
	
		
		<?php
		 
		 	if(isset($_POST['addstf']))
				{
						$n=$_POST['id'];
           				$a=$_POST['sfn'];
						$b=$_POST['q'];
						$c=$_POST['sy'];
		 
					if(($a=="")||($b=="")||($c==""))
					{
					echo("<script>alert('Fill All Detail')</script>");
		 			}
		 	else
		 		{
				
					echo("<script>alert('Record Is Added Successfully')</script>");
					}
				}
		?>
</body>
</html>