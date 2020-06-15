<?php
session_start();

if(isset($_POST['submit']))
{
	if(isset($_SESSION['otp']))
	{
	$otp=$_POST['OTP'];
	if(($_SESSION['otp'])==$otp)
	{
		echo "its real otp";
		$_SESSION['otp']=NULL;
		
	}
	else
	{
		echo "hello";
	}
}
}

?>