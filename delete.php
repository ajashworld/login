<?php

include 'connect.php';

$res=mysqli_query($conn, "SELECT * FROM student");


// Getting the last word from url

	$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	preg_match("/[^\/]+$/", $url, $matches);
	$last_word = $matches[0]; 


	if ($last_word == 'success') {
		# code...
		echo "<h3>Deleted successfully</h3>";
	}
	elseif ($last_word == 'failure') {
		# code...
		echo "<h3>Unable to delete record</h3>";
	}

$counter = 1;

$product_count = mysqli_num_rows ($res); 

echo "<form method='post' action='deleterecords.php'>";
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
		 echo "<td><input type='text' name='name' value='$row[name]' readonly='readonly'></td>";
		 echo "<td><input type='text' name='fathername' value='$row[fathername]' readonly='readonly'></td>";
 		 echo "<td><input type='text' name='contactnumber' value='$row[contactnumber]' readonly='readonly'></td>";
 		 echo "<td><input type='text' name='city' value='$row[city]' readonly='readonly'></td>";
 		 echo "<td><input type='text' name='state' value='$row[state]' readonly='readonly'></td>";
 		 echo "<td><input type='text' name='pincode' value='$row[pincode]' readonly='readonly'></td>";
 		 //echo "<td><a href='deleterecords.php?id=$row[id]'>Delete</a></td>";
 		 //echo "<td><input type='submit' name='del' value='Delete'></td>";

 		 echo "<td><button type='submit' name='dell' value='$row[id]'>Delete</button></td>";
 		 //echo "<td><input type='text' name='id[]' value='$row[id]'></td>";
 		 echo "</tr>";
		 $counter++;
	}
	
}

echo "<tr>
<td><a href='edit.php'>Edit Records</a></td>
</tr>";

echo '</table>';
echo "</form>";

?>

