<!DOCTYPE html>
<html lang="en">
<?php
 session_start();
 if(isset($_SESSION['uname']))
{
 $abc=$_SESSION['uname'];
}
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>About Us</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
			<h1 style="color:#228B22;"><center><u><b>One Stop Shop For Engineer'S</b></u></center></h1>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>                                    
                                    <li><a href="#">Book Details</a>
                                        <div class="megamenu">
                                            <ul class="dropdown">                                                
                                                <li><a href="book.php">Computer Eng.</a></li>                            
                                                <li><a href="mech.php">Mechanical Eng.</a></li>
                                                <li><a href="el.php">Electronics Eng.</a></li>
												                       
												                        <li><a href="civil.php">Civil Eng.</a></li>
                                            </ul>                                                                                       
                                        </div>
                                    </li>
									
                                    <li><a href="aboutus.php">About Us</a></li>                                  
                                    <li><a href="contact.php">Contact Us</a></li>
                                     <li> <b><a href="view.php">view cart</a></b></li>
									  <li> <b><a href="view1.php">My Orders</a></b></li>
                                    <li><a href="Logout.php">Logout</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                               <B> <?php  echo "welcome ".$abc; ?></B>
                                <!-- <a href="login1.php"></i> <span>Login / Sign Up</span></a> -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Cart & CheckOut</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
	
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
</body>
</html>
<html>
<body><br><br><br>
<h2>Your Orders</h2>
<table id="customers">
<br>
  <tr>
   
     <th>img</th>
    <th>Name</th>
    <th>price</th>
     <th>status</th>
     <th>Date</th>
     

  </tr>
  
</table>
</body>
</html>
<?php
$total_pricee=0;


 // session_start();
  $cartid=$_SESSION['cartid'];
  $con=mysqli_connect("localhost","root","","reg");


  $a=$cartid; 
  $query = "SELECT * FROM `$cartid` where `checkout`=1";
  $result = mysqli_query($con,$query);
  

  while($row = mysqli_fetch_assoc($result))
  {
    $query1 = "SELECT * FROM bookcp where id=".$row['id'];
    $result1 = mysqli_query($con,$query1);
   while( $result2 = mysqli_fetch_assoc($result1))
   {
  
       # code...
    
  echo '<table id="customers"><tr>
    
    <td><img style="width:80px; height:100px;" src="aditimg/'.$result2['img'].'"></td>
    <td>'.$result2['bname'].'</td>
    <td>'.$result2['price'].'</td>
   <td>'.$row['status'].'</td>
   <td>'.$row['due'].'</td>
  


  
  
  </tr>';
  if($result2['price']!=null)
  {
     $total_pricee+=$result2['price'];
  }
  
   }
   
  }

  

  ?>


 
    
    <!-- ##### About Us Area End ##### -->

    
    <!-- ##### Footer Area Start ##### -->
    <!-- ##### Footer Area Start ##### -->
	
	
   

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>