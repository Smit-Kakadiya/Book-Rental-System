<?php
//including the database connection file
session_start();
include_once('config.php');
echo $_SESSION['cartid'];
$id=$_SESSION['cartid'];
echo $id;
//getting id of the data from url
$id = $_GET['id'];
 $cartid=$_SESSION['cartid'];
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM `$cartid` WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:view.php");
?>

