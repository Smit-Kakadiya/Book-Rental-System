<?php 
   $con=mysqli_connect("localhost","root","","reg");

   $query = "SELECT * FROM `8153832282255`";
  $result = mysqli_query($con,$query);
  //$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
  {

    $query1 = "SELECT * FROM bookcp where  `checkout`='0' ";
    $result1 = mysqli_query($con,$query1);
   while($result2 = mysqli_fetch_assoc($result1))
   {
    //if($result['checkout']==0)
	//{
		echo $result2['bname'];
//	}

}
}
    ?>