<?php

include 'connect.php';

if(isset($_POST['submit']))
{
	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$display_name = mysqli_real_escape_string($conn, $_POST['display_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);


if (empty($first_name) || empty($last_name) || empty($display_name) || empty($email) || empty($password) || empty($confirm_password)) {
    //Empty
    header("Location: registration.php?message=4");
}
else {
    //Not Empty

		$res=mysqli_query($conn, "SELECT email FROM registration WHERE email='$email'");
		$row=mysqli_fetch_array($res);
		if ($row['email']==($email)) {
			# code...
			header("Location: registration.php?message=6");
		}
	



	elseif ($password == $confirm_password) {
		# code...
		$sql = "INSERT INTO registration (first_name, last_name, display_name, email, password) VALUES ('$first_name', '$last_name', '$display_name', '$email', '$password')";
		$result = mysqli_query($conn,$sql);
		if ($result) {
			# code...
			 header("Location: registration.php?message=1");
		}
		else
		{
			header("Location: registration.php?message=2");
		}
	}
	else
	{
		header("Location: registration.php?message=3");
	}
}
}
else
{
	$first_name = empty($_POST['first_name']);
		header("Location: registration.php?message=4");
}


?>