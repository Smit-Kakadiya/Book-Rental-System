<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>One Stop Shop For Engineer'S</title>

    
    <link rel="icon" href="img/core-img/favicon.ico">

    
    <link rel="stylesheet" href="style.css">
	<style>
    input[type=submit] {
    background-color: #4CAF50;
    color:white;
    border-radius: 4px;
    }
    
   
    
    ::placeholder{
    color :red
    }
    
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

.error {color: #FF0000;}
</style>

      <?php
      
      session_start();
      //echo $_SESSION['name'];
      if(!isset($_SESSION['name']))
      {
        header("Location:loginadmin.php");
      }
      
$databaseHost = 'localhost';
$databaseName = 'reg';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
   
  $result = mysqli_query($mysqli, "SELECT * FROM bookcp ORDER BY id DESC");
  
 ?>

</head>

<body>
    
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
                                   <li><a href="admin.php">Home</a></li>                                    
                                    <li><a href="#">Book</a>
                                        <div class="megamenu">
                                            <ul class="dropdown">                                                
                                                <li><a href="cpedit.php">Computer Eng.</a></li>                            
                                                <li><a href="mechedit.php">Mechanical Eng.</a></li>
                                                <li><a href="eledit.php">Electronics Eng.</a></li>
                                                
                                                <li><a href="civiledit.php">Civil Eng.</a></li>
                                            </ul>                                                                                       
                                        </div>
                                    </li>
                  
                                    <li><a href="user.php">User</a></li>                                  
                                    <li><a href="order.php">Order</a></li><li><a href="report.php">Report</a></li> 
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="logout.php"></i> <span>Welcome Admin</span></a>
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
            <h2>Electronics Book</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

	<form action="<?php $_PHP_SELF ?>" style="border:1px solid #ccc" method="post">
  <div class="container">
	<br>
	<br>
	<br>
	
     <table width="100%">
     <tr>
     
     <tr bgcolor='#CCCCCC'>
    <td>Bname</td>
    <td>author</td>
    <td>Quantity</td>
    <td>Price</td>
    <td>Publisher</td>
    <td>Update</td>

  </tr>
  <?php 
  //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
  while($res = mysqli_fetch_array($result)) {  
  if($res['cat']==3)   
   {
     echo "<tr>";
    echo "<td>".$res['bname']."</td>";
    echo "<td>".$res['author']."</td>";
    echo "<td>".$res['quant']."</td>";
    echo "<td>".$res['price']."</td>";
    echo "<td>".$res['publisher']."</td>";
    
    
    echo "<td><a href=\"editcp.php?id=$res[id]\">Edit</a> | <a href=\"deletecp.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
   }   
  }
  ?>
   </table>
  </div>
</form>

<center><h1><u><a href="add.php">Add Book</a></u></h1></center>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <div class="widget-title">
                                <h6>Developers</h6>
                            </div>
                            </div>
                            <p>Adit Patel (16IT666)</p>
							<p>Yash Sohagia (16IT470)</p>
							<p>Smit Kakadiya (16IT474)</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Information Technology Department, BVM Engineering College, Vallabh Vidhyanagar, Anand</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main: 96015-51022 <br>Office: 98982-42240 </p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>bookrentalsystem@bvmengineering.ac.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    
    <script src="js/bootstrap/popper.min.js"></script>
    
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <script src="js/plugins/plugins.js"></script>
    
    <script src="js/active.js"></script>
</body>

</html>