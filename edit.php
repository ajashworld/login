<?php

include 'connect.php';

$res=mysqli_query($conn, "SELECT * FROM student");


// Getting the last word from url

	$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	preg_match("/[^\/]+$/", $url, $matches);
	$last_word = $matches[0]; 


	if ($last_word == 'success') {
		# code...
		echo "<h3>Records updated successfully</h3>";
	}
	elseif ($last_word == 'failure') {
		# code...
		echo "<h3>Unable to update records</h3>";
	}

$counter = 1;

$product_count = mysqli_num_rows ($res); 
echo "<form method='post' action='update.php'>";
echo "<table border='1'>

<tr>

<th>Sr No</th>

<th>Name</th>

<th>Father's Name</th>

<th>Contact Number</th>

<th>City</th>

<th>State</th>

<th>Pincode</th>

</tr>";

if ($product_count > 0) {


	while($row=mysqli_fetch_array($res))
	{

		 echo "<tr>";

 		 echo "<td>" .$counter. "</td>";

		 echo "<td><input type='text' name='name[]' value='$row[name]'></td>";
		 echo "<td><input type='text' name='fathername[]' value='$row[fathername]'></td>";
 		 echo "<td><input type='text' name='contactnumber[]' value='$row[contactnumber]'></td>";
 		 echo "<td><input type='text' name='city[]' value='$row[city]'></td>";
 		 echo "<td><input type='text' name='state[]' value='$row[state]'></td>";
 		 echo "<td><input type='text' name='pincode[]' value='$row[pincode]'></td>";
 		 echo "<input type='hidden' name='id[]' value='$row[id]'>";
 		 echo "</tr>";
		$counter++;
	}
	
}

echo "<tr>
<td><input type='submit' name='editbutton' value='Submit'></td>
<td><a href='view.php'>View Records</a></td>
</tr>";

echo '</table>';
echo "</form>";

?>

