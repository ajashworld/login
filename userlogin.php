<?php
	
include 'connect.php';

session_start(); // Starting Session

	if(isset($_POST['login']))
    {
	    $email = mysqli_real_escape_string($conn, $_POST['name']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	    $res=mysqli_query($conn, "SELECT * FROM registration WHERE email='$email'");
		$row=mysqli_fetch_array($res);
	   

	   if($row['password']==($password))
		{

			$_SESSION['id'] = $row['id'];
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['last_name'] = $row['last_name'];
			$_SESSION['email'] = $row['email'];


			$randno = rand(0,100000);

			
			$data = mysqli_query($conn, "UPDATE registration SET otp ='$randno' WHERE email= '$email'");


/*****************email otp***************/

				/*$to = $email;
				$subject = "Please don't share this to anyone";
				$body = $randno;
				if (mail($to, $subject, $body))*/


/*****************email otp ends***************/

			header("Location: otp.php");
		}

		else
		{
			
			header("Location: login.php?user=1");
		}


	}
		

?>
