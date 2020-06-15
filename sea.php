<?php 
$q =$_GET['q'];

$databaseHost = 'localhost';
$databaseName = 'reg';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM bookcp WHERE bname LIKE '%{$q}%'";
$result = mysqli_query($con,$sql);

$a="";

 while($row=mysqli_fetch_assoc($result))
    {
    	
    	 echo "<h5><a href=\"seabook.php?id=$row[id]\">".$row['bname']."</a><br/></h5>";
    	 //break;
    }

 $sql="SELECT * FROM bookcp WHERE author LIKE '%{$q}%'";
$result = mysqli_query($con,$sql);

$a="";

 while($row=mysqli_fetch_assoc($result))
    {
    	
    	 echo "<a href=\"seabook.php?author=$row[author]\">".$row['author']."</a><br/>";
    	 break;
    }
     $sql="SELECT * FROM bookcp WHERE publisher LIKE '%{$q}%'";
$result = mysqli_query($con,$sql);
$a="";
    while($row=mysqli_fetch_assoc($result))
    {
        
         echo "<a href=\"seabook.php?author=$row[publisher]\">".$row['publisher']."</a><br/>";
         break;
    }
    
mysqli_close($con);
?>