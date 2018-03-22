<head>

<?php
	include 'link.php';
	include 'timeoutdcript.php'
?>

</head>

<body onload="StartTimers();" onmousemove="ResetTimers();">



<?php

include 'connect.php';


session_start();// Starting Session 

include 'auth.php';

$id=@$_SESSION['id']; 
if (isset($id)) {


$res=mysqli_query($conn, "SELECT * FROM registration WHERE id='$id'");
$row=mysqli_fetch_array($res);


$first_name = ucfirst($row['first_name']);
$last_name = ucfirst($row['last_name']);


echo "<a href='logout.php'>Logout</a><br>";
echo "Welcome ".$first_name.' '.$last_name;


echo '<h1>'.'Start Entering your students details'.'</h1>';


	// Getting the last word from url

	$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	preg_match("/[^\/]+$/", $url, $matches);
	$last_word = $matches[0]; 



	
?>


<?php

	if ($last_word == 'success') {
		# code...
		?>
			
			  <strong>Records Inserted Successfully</strong>

		<?php
	}

	elseif ($last_word == 'failure') {
		# code...
		?>
			<strong>Unable to insert record</strong>
		<?php
	}

?>



<form action="insert.php" method="post">
	<table border="1">
		<tr>
			<td><input type="text" name="name" placeholder="Name" required></td>
			<td><input type="text" name="fathername" placeholder="Father's Name" required></td>
			<td><input type="text" name="contactnumber" placeholder="Contact Number" required></td>
		</tr>
		<tr>
			<td><input type="text" name="city" placeholder="City" required></td>
			<td><input type="text" name="state" placeholder="State" required></td>
			<td><input type="text" name="pincode" placeholder="Pincode" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
			<td><a href="view.php">View Records</a></td>
			<td><a href="edit.php">Edit Records</a></td>
		</tr>
	</table>
</form>


    
    <div id="timeout">
        <h1>
            Session About To Timeout</h1>
        <p>
            You will be automatically logged out in 1 minute.<br />
        To remain logged in move your mouse over this window.
    </div>



<style>
#timeout {
    display: none;
}
</style>


<?php 
	}
?>
    </body>
    </html>