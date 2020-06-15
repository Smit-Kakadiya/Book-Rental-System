<?php

	session_start();
	//$banme=$_SESSION['BOOK'];
	//echo $banme."<br />";
	//echo $_SESSION['id'];
     
	$databaseHost = 'localhost';
	$databaseName = 'reg';
	$databaseUsername = 'root';
	$databasePassword = '';

	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
   
  	//$result = mysqli_query($mysqli, "SELECT * FROM `bookcp` WHERE `bname`= '$banme' ");


	@$id = $_GET['id'];
	//echo $id;

	//selecting data associated with this particular id
		$a="SELECT * FROM bookcp WHERE id=$id";
		$result = mysqli_query($mysqli,$a);

		while($res = mysqli_fetch_array($result))
		{
			$a=$res['bname'];
			$_SESSION['id']=$a;
		//$email = $res['email'];
		}
	

	if(empty($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
	}
	if(in_array($a,$_SESSION['cart']))
	{
		echo "<script>alert('Book alreay in cart')</script>";
		header("Location:bookcp.php");
		
	}

	
	
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	<form action="viewcart.php" method="post">

  		<input type="submit" name="submit" value="viewcart">
  		<a href="book.php"><input type="button" name="a" value="BACK TO SHOOPING"></a>
  	</form>
  
  </body>
  </html>
<?php

array_push($_SESSION['cart'],$_SESSION['id'])

?>
  