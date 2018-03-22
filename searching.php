<?php
include 'connect.php';


if(isset($_POST['search']))
{
	$search = mysqli_real_escape_string($conn, $_POST['find']);

	
	if (empty($search)) {
    //Empty
    header("Location: search.php?search=1");
	}

	else
	{
		
		//search with matched field only
		$res=mysqli_query($conn, "SELECT * FROM registration WHERE first_name LIKE '%" . $search ."%'");
		

			/*
		echo $row['first_name'].'<br>';
		echo $row['last_name'].'<br>';
		echo $row['display_name'].'<br>';
		echo $row['email'].'<br>';
		*/
		$counter = 1;


		$product_count = mysqli_num_rows ($res); 

		

		if ($product_count > 0) {

			echo "Total Records found : ".$product_count."<br>";

			while($row=mysqli_fetch_array($res))
			{
					echo "Record No: ".$counter."<br>";
					echo "First Name: ".$row['first_name'].'<br>';
					echo "Last Name: ".$row['last_name'].'<br>';
					echo "Display Name: ".$row['display_name'].'<br>';
					echo "Email: ".$row['email'].'<br>';
					$counter++;
			}
		}
		else
		{
			echo "No records found with your search term : ".$search;
		}

	}
		


		
}

?>