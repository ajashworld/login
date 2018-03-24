<?php
include 'connect.php';

if(isset($_POST['submit']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$newpass = mysqli_real_escape_string($conn, $_POST['newpass']);
	$confirmpass = mysqli_real_escape_string($conn, $_POST['confirmpass']);


	if ($newpass == $confirmpass) {
		# code...

		$result1=mysqli_query($conn,"UPDATE registration set password = '$confirmpass' where id = '$id'");
		header("Location: login.php");
	}

	else
	{
		header("Location: resetpassword.php");
	}
}
?>