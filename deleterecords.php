<?php
include 'connect.php';

	 $id = mysqli_real_escape_string($conn,$_POST['dell']); 

/*foreach ($id as $value) { 
    $call = $value;
    echo $call;
}*/  
			$res = mysqli_query($conn, "Delete from student where id = '$id'");

			if ($res) {
				# code...
				header("Location: delete.php/success");
			}
			else
			{
				header("Location: delete.php/failure");
			}
		

	




?>