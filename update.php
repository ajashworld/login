<?php
include 'connect.php';
if(isset($_POST['editbutton']))
{
	$id=count($_POST["id"]);
	




		for($i=0;$i<$id;$i++){
			$result1=mysqli_query($conn, "UPDATE student set name='" . $_POST["name"][$i] . "', fathername='" . $_POST["fathername"][$i] . "', contactnumber='" . $_POST["contactnumber"][$i] . "', city='" . $_POST["city"][$i] . "', state='" . $_POST["state"][$i] . "', pincode='" . $_POST["pincode"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");


			if ($result1) {
				# code...
				header("Location:edit.php/success");
			}
			else
			{
				header("Location:edit.php/failure");
			}
			}



			
		
	


}

?>