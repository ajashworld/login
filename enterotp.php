<!DOCTYPE html>
<html>
<head>
	<title>enter otp</title>
	<?php include 'link.php'; ?>
</head>
<body>

<?php

include 'connect.php';
$id = $_GET['otp'];



	$res=mysqli_query($conn, "SELECT * FROM registration WHERE id='$id'");
	$row=mysqli_fetch_array($res);

	$first_name = $row['first_name'];
     echo $id;
     echo $first_name;

	


               
		if($row['id'] == $id)
		{
			?>



			<div class="container" style="width: 30%; padding-top: 100px;"> 

			<h1>Enter your otp</h1>

			<form action="verifyotp.php" method="post">


                                                 <input type="hidden" name="id" value="<?php echo $id; ?>">
				 		<input type="text" autofocus="" placeholder="Enter your OTP" name="otp" class="form-control" required>
			            
			            <button type="submit" class="btn btn-lg btn-login btn-block" name="submit">
			            	SUBMIT
			            </button>
			</form>
			</div>




			<?php
		}

?>



</body>
</html>

