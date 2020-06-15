<?php

session_start();
if(isset($_SESSION['uname']))
{
$abc=$_SESSION['uname'];
}
else
{
    echo "<script>alert('Please login first!'); window.top.location='index.php';</script>";
    
}
if(isset($_SESSION['cartid']))
{
    $_SESSION['cartid'];
}
         ?>
<html lang="en">

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
                                    <li><a href="view1.php">MY ORDERS</a></li>
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
            <h2>Computer Engineering</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->






    <!DOCTYPE html>
<html>
<head>
<!--    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css"> -->
    <style type="text/css">
        
    </style>
    <script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }

    // code for IE7+, Firefox, Chrome, Opera, Safari
   var xmlhttp=new XMLHttpRequest();

    
  
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","sea.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
    <br /><br /><br />

    <!--<nav class="navbar navbar-inverse navbar-fixed-top">  -->
      <form>
	  <br>
       <h5 style="padding:70px">Search Book: <input type="text" size="30" placeholder="Enter Book's Name or Author or Publisher" onkeyup="showResult(this.value)">
        <div id="livesearch"></div></h5>
        </form>  
 
    <div class="container" id="m2">
        

        <div class="row">
            
                      <!--  <form name="f2" method="post"  action="view.php"><input type="submit" name="view" value="view"></form> -->
                       
        
                        <?php
                        
                //echo $_SESSION['cartid'];
                $con=mysqli_connect("localhost","root","","reg");
                $query = "SELECT * FROM bookcp";
                $result = mysqli_query($con,$query);

               
                while($row = mysqli_fetch_assoc($result))
                { 
                    if($row['cat']==3)
                    {
                         echo '<div class="col-md-6 col-sm-12">
                            <div class="thumbnail">
                            <p><img style="width=100px;height=100px;" src="aditimg/'.$row['img'].'"></p>
                            <p> Name:  '.$row['bname'].'</p>
                            <p> Price:  '.$row['price'].'</p>
                            <p> Available:  '.$row['quant'].'</p>
                            <p> publisher:  '.$row['publisher'].'</p>
                            <p><form name="f1" method="post"  action="viewcart.php"><input type="hidden" name="id"  value="'.$row['id'].'"><input type="submit" name="addtocart" class="btn btn-success" value="add to cart"></form></p></div></div>';
                    }
                }
                //echo '<script>alert("BOOK ADD ON YOUR CART")</script>';
 ?>
    </div></div>
                       









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
                                <p>Main: 96015-50987 <br>Office: 98982-42240 </p>
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
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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