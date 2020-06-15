<?php 
$q =$_GET['q'];

$con = mysqli_connect('localhost','root','','test2');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM users WHERE name LIKE '%{$q}%'";
$result = mysqli_query($con,$sql);

$a="";

 while($row=mysqli_fetch_assoc($result))
    {
    
		 echo $row['name']."<br>";
    }
    
mysqli_close($con);
?>