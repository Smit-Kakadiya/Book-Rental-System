<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
 
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  width:200px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  width:200px;
  
}
</style>
</head>
<body>
<h2>Your cart Item</h2>
<table id="customers">
  <tr>
    <th>Bookid</th>
     <th>img</th>
    <th>Name</th>
    <th>price</th>
     <th>status</th>
     <th>Quanty</th>>
  </tr>
  
</table>
</body>
</html>

<?php
session_start();
//echo $_SESSION['cartid'];
$id=$_POST['id'];
//echo $id;
if(isset($_POST['addtocart']))
{
  $id=$_POST['id'];
  $status="ON RENT";
  $qua=1;
  $cheak=0;
  $cartid=$_SESSION['cartid'];
  $d=date('Y/m/d');
  $con=mysqli_connect("localhost","root","","reg");

  $a="SELECT  `quant` FROM `bookcp` WHERE `id`=$id";
  $b=mysqli_query($con,$a);
  $c=mysqli_fetch_assoc($b);
  
  if($c['quant']!="OUT OF STOCK")
  {
  $sql="INSERT INTO `$cartid` VALUES ('$id','$status','$qua','$d','$cheak')";
  $result = mysqli_query($con,$sql);
    if($result)
    {
    $cartid=$_SESSION['cartid'];
    $con=mysqli_connect("localhost","root","","reg");

    $query = "SELECT * FROM `$cartid`";
    $result = mysqli_query($con,$query);
  

    while($row = mysqli_fetch_assoc($result))
    {
    $query1 = "SELECT * FROM bookcp where id=".$row['id'];
    $result1 = mysqli_query($con,$query1);
    $result2 = mysqli_fetch_assoc($result1);
    echo '<table id="customers"><tr>
    <td>'.$result2['id'].'</td>
    <td><img style="width=100px;height=100px;" src="img/'.$result2['img'].'"></td>
    <td>'.$result2['bname'].'</td>
    <td>'.$result2['price'].'</td>
    <td>'.$row['status'].'</td>
    <td>'.$row['qua'].'</td>
    </tr>';
    }
   header("Location:book.php");
  
  }
  else{
    echo "<script type='text/javascript'>alert('BOOK ALREADY RENTED BY YOU OR ALREADY IN YOUR CART');history.go(-1);</script>";
   
  }
}
else
{
  echo "<script type='text/javascript'>alert('BOOK IS OUT OF STOCK');history.go(-1);</script>";
}
}




?>