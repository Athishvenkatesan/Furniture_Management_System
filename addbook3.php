<?php
                
 if(isset($_POST['book']))
     {
                        
                        
        $a=$_POST['prdid'];
        $k=$_POST['brdnam'];
        $l=$_POST['prdnam'];
        $m=$_POST['amount'];
        $b=$_POST['name'];
        $c=$_POST['gender'];
        $d=$_POST['add1'];
        $e=$_POST['add2'];
        $f=$_POST['state'];
        $g=$_POST['disct'];
        $h=$_POST['pin'];
        $i=$_POST['pho'];
        $j=$_POST['mail'];
                        
                if(($a=="")||($b=="")||($c=="")||($d=="")||($e=="")||($f=="")||($g=="")||($h=="")||($i=="")||($j=="")||($k=="")||($l=="")||($m==""))
					{
					echo("<script>alert('Fill All Detail')</script>");
		 			}
                else
                {
                    $con=mysqli_connect("localhost","root","","fmsdb");
                    $sql="INSERT INTO booking VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";
                    echo("<script>alert('Booking Success and Go to nearby shop to Confirm your Furniture')</script>");
                    if(mysqli_query($con,$sql)) {
                        
                        // Redirect to index page
                        header("Location: adminindex.html");
                        exit(); // Ensure no further code execution after redirection
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }
                }
    
    }
?>
