<?php

include 'connect.php';

$res=mysqli_query($conn, "SELECT * FROM student");

$counter = 1;

$product_count = mysqli_num_rows ($res); 


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
 		 echo "<td>" .$row['name']. "</td>";
 		 echo "<td>" .$row['fathername']. "</td>";
 		 echo "<td>" .$row['contactnumber']. "</td>";
 		 echo "<td>" .$row['city']. "</td>";
 		 echo "<td>" .$row['state']. "</td>";
 		 echo "<td>" .$row['pincode']. "</td>";
 		 echo "</tr>";
		$counter++;
	}
	
}

echo "<tr>
<td><a href='edit.php'>Edit Records</a></td>
<td><a href='delete.php'>Delete Records</a></td>
</tr>";

echo '</table>';

?>

