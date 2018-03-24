<?php

include 'connect.php';

if(isset($_POST['submit']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$otp = mysqli_real_escape_string($conn, $_POST['otp']);


	$res=mysqli_query($conn, "SELECT * FROM registration WHERE id='$id'");
	$row=mysqli_fetch_array($res);


	if ($id == $row['id']) {
		# code...
		header("Location: resetpassword.php?id=$id");
	}
	else{
		header("Location: forgetpassword.php");
	}
}


?>