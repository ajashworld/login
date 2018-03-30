<?php
include 'connect.php';

	$id=count($_POST['id']);

	$eid = mysqli_real_escape_string($conn, $_POST['id']);


	




		for($i=0;$i<$id;$i++){

	

			$result1=mysqli_query($conn, "UPDATE comments set status='" . $_POST["stat"][$i] . "' where id = '".$eid."'");

		}


		if ($result1) {
				# code...
				header("Location:commentadmin.php?message=1");
			}
			else
			{
				header("Location:commentadmin.php?message=2");
			}
	



?>