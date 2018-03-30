<?php

include 'connect.php';

if(isset($_POST['submit']))
{

	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$time = mysqli_real_escape_string($conn, $_POST['time']);
	$day = mysqli_real_escape_string($conn, $_POST['day']);

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$comment = mysqli_real_escape_string($conn, $_POST['comment']);

	$sql = "INSERT INTO comments (email, comment, date, time, day) VALUES ('$email', '$comment', '$date', '$time', '$day')";
	$result = mysqli_query($conn,$sql);

	if ($result) {
			# code...
			 header("Location: commentbox.php?message=1");
		}
		else
		{
			header("Location: commentbox.php?message=2");
		}


}