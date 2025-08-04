
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
	<script>
        function closeWindowAndRedirect() {
            alert('Updated Booking Successfully');
            window.close();
            window.history.back();
        }
    </script>
</head>
<body>
    <center><h1>Confirm Booking Details</h1></center>
    <table border="1" align="center">
        <form action="" method="post">
            <?php
            if(isset($_POST['view'])) {
                $a=$_POST['mail'];
                $con=mysqli_connect("localhost", "root", "","fmsdb");
                $sql="select * from booking where mail='$a'";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result)) {
                    echo "<tr><td>Product ID</td><td><input type='text' name='name' value='".$row[0]."'>
                        </td></tr><tr><td>Name</td><td><input type='text' name='gender' value='".$row[1]."'>
                        </td></tr><tr><td>Gender</td><td><input type='text' name='add1' value='".$row[2]."'>
                        </td></tr><tr><td>Address Line 1</td><td><input type='text' name='add2' value='".$row[3]."'>
                        </td></tr><tr><td>Address Line 2</td><td><input type='text' name='state' value='".$row[4]."'>
                        </td></tr><tr><td>State</td><td><input type='text' name='distct' value='".$row[5]."'>
                        </td></tr><tr><td>District</td><td><input type='text' name='pin' value='".$row[6]."'>
                        </td></tr><tr><td>Pincode</td><td><input type='text' name='phno' value='".$row[7]."'>
                        </td></tr><tr><td>Phone Number</td><td><input type='text' name='service' value='".$row[8]."'>
                        </td></tr><tr><td>E-Mail ID</td><td><input type='text' name='date' value='".$row[9]."'>
                        </td></tr><tr><td>Brand Name</td><td><input type='text' name='hour' value='".$row[10]."'>
                        </td></tr><tr><td>Product Name</td><td><input type='text' name='email' value='".$row[11]."'>
                        </td></tr><tr><td>Amount</td><td><input type='text' name='amount' value='".$row[12]."'>
                        </td></tr><tr align='center'><td>Status </td><td> <select name='id' size='1'>
                        <option value='confirmed' selected='selected'>Confirmed</option>
                        <option value='finished'>Finished</option></select></td>
                        </tr><tr align='center'><td colspan='2'><button class='button' name='update'>Update</button><button class='button' name='delete'>Delete</button></td></tr>
                        <tr align='center'><td colspan='2'><button class='back'><a href='confirmbook.php'>Back</a></button></td></tr>";
                }
            }
            if(isset($_POST['update'])) 
			{
                $b=$_POST['name'];
                $c=$_POST['gender'];
                $d=$_POST['add1'];
                $e=$_POST['add2'];
                $f=$_POST['state'];
                $g=$_POST['distct'];
                $h=$_POST['pin'];
                $i=$_POST['phno'];
                $j=$_POST['service'];
                $k=$_POST['date'];
                $l=$_POST['hour'];
                $a=$_POST['email'];
                $m=$_POST['amount'];
                $n=$_POST['id'];
                $con=mysqli_connect("localhost", "root", "","fmsdb");
               //UPDATE `conbook` SET `product_id`=[value-1],`cname`=[value-2],`gender`=[value-3],`add1`=[value-4],`add2`=[value-5],`state`=[value-6],`district`=[value-7],`pincode`=[value-8],`ph_no`=[value-9],`mail`=[value-10],`brand_name`=[value-11],`prod_name`=[value-12],`amount`=[value-13],`status`=[value-14] WHERE 1
                $sql="UPDATE conbook SET product_id='$b', cname='$c', gender='$d', add1='$e', add2='$f', state='$g', district='$h', pincode='$i', ph_no='$j', brand_name='$k', prod_name='$l', amount='$m', status='$n' WHERE mail='$a'";
                mysqli_query($con,$sql);
				echo "<script>closeWindowAndRedirect();</script>";
            }
            else if (isset($_POST['delete']))
			{
                $con=mysqli_connect("localhost", "root", "","fmsdb");
			    $sql="delete from conbook where mail='$a'";
			    mysqli_query($con,$sql);
			    echo"<script>alert('Record Deleted Sucesfully')</script>";
			
			}
            ?>
        </form>
    </table>
</body>
</html>
