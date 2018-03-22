<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$fathername = mysqli_real_escape_string($conn, $_POST['fathername']);
	$contactnumber = mysqli_real_escape_string($conn, $_POST['contactnumber']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$pincode = mysqli_real_escape_string($conn, $_POST['pincode']);

	$sql = "INSERT INTO student (name, fathername, contactnumber, city, state, pincode) VALUES ('$name', '$fathername', '$contactnumber', '$city', '$state', '$pincode')";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		# code...
		header("Location: welcome.php/success");
	}
	else
	{
		header("Location: registration.php/failure");
	}



}

?>
