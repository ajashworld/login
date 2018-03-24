<?php

include 'connect.php';

if(isset($_POST['submit']))
{

	$email = mysqli_real_escape_string($conn, $_POST['email']);

	$res=mysqli_query($conn, "SELECT email, otp FROM registration WHERE email='$email'");
	$row=mysqli_fetch_array($res);

	$otp = $row['otp'];

	if ($row['email']==($email)) {
			# code...

				$to = $email;
				$subject = "Please don't share this to anyone";
				$body = $otp;
				if (mail($to, $subject, $body));
				header("Location: enterotp.php");


		}
	else
	{
		header("Location: forgetpassword.php?message=1");
	}

}

?>