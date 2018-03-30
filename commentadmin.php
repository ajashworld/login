<?php

include 'connect.php';

$res=mysqli_query($conn, "SELECT * FROM comments");


// Getting the last word from url

	$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	preg_match("/[^\/]+$/", $url, $matches);
	$last_word = $matches[0]; 


	if ($last_word == 'success') {
		# code...
		echo "<h3>Status Changed</h3>";
	}
	elseif ($last_word == 'failure') {
		# code...
		echo "<h3>Opps!</h3>";
	}

$counter = 1;

$product_count = mysqli_num_rows ($res); 

echo "<form method='post' action='admincommentstatus.php'>";
echo "<table border='1'>

<tr>

<th>Sr No</th>

<th>Email</th>

<th>Comment</th>

<th>Day</th>

<th>Time</th>

<th>Date</th>

<th>Status</th>

</tr>";

if ($product_count > 0) {


	while($row=mysqli_fetch_array($res))
	{

		 echo "<tr>";

 		 echo "<td>" .$counter. "</td>";
		 echo "<td><input type='text' name='email[]' value='$row[email]' readonly='readonly'></td>";
		 echo "<td><input type='text' name='comment' value='$row[comment]' readonly='readonly'></td>";
 		 echo "<td><input type='text' name='day' value='$row[day]' readonly='readonly'></td>";
 		 echo "<td><input type='text' name='time' value='$row[time]' readonly='readonly'></td>";
 		 echo "<td><input type='text' name='date' value='$row[date]' readonly='readonly'></td>";


				if (!empty($row['status'])) {
					# code...
					 		 
					if ($row['status'] == 'Approved') {
						# code...
				
							echo "<td><select name='stat[]'>
					 		  <option value='$row[status]'>$row[status]</option>
							  <option value='Not Approved'>Not Approved</option>
							   </select></td>";


					}
					elseif ($row['status'] == 'Not Approved') {
						# code...
							echo "<td><select  name='stat[]'>
					 		  <option value='$row[status]'>$row[status]</option>
							  <option value='Approved'>Approved</option>
							   </select></td>";
						
					}
					

						

				}
				else
				{
					 		 echo "<td><select  name='stat[]'>
 		 <option value='' readonly>Select</option>
  <option value='Approved'>Approved</option>
  <option value='Not Approved'>Not Approved</option>

</select></td>";
				}


 		 //echo "<td><a href='deleterecords.php?id=$row[id]'>Delete</a></td>";
 		 //echo "<td><input type='submit' name='del' value='Delete'></td>";



 		 echo "<td><button type='submit' name='id' value='$row[id]'>Submit</button></td>";

		//echo "<td><input type='text' name='id[]' value='$row[id]'></td>";
 		//echo "<td><input type='text' name='id' value='$row[id]'></td>";


 		 echo "</tr>";
		 $counter++;
	}
	
}


echo "<tr>
</tr>";

echo '</table>';
echo "</form>";

$message = @$_GET['message'];

if ($message == '1') {
	# code...
	echo "Status updated successfully.";
}
elseif ($message == '2') {
	# code...
	echo "OPPS! Something went wrong.";
}

?>

