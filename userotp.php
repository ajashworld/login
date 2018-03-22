<?php
	

include 'connect.php';

session_start(); // Starting Session

	if(isset($_POST['otp']))
    {



	    $otp = mysqli_real_escape_string($conn, $_POST['userotp']);
	    $email = mysqli_real_escape_string($conn, $_POST['email']);
	

	   	$res=mysqli_query($conn, "SELECT otp FROM registration WHERE email='$email'");
		$row=mysqli_fetch_array($res);
	   

	   if($row['otp']==($otp))
		{

			

		
			header("Location: welcome.php");
		}

		else
		{
			
			header("Location: login.php?user=1");
		}


	}
		

?>
