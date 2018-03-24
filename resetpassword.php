<!DOCTYPE html>
<html>
<head>
	<title>reset password</title>
	<?php include 'link.php'; ?>
</head>
<body>

	<?php 

		include 'connect.php';
		$id = $_GET['id'];


	?>

			<div class="container" style="width: 30%; padding-top: 100px;"> 

			<h1>Reset your password</h1>

			<form action="savenewpassword.php" method="post">


                        <input type="hidden" name="id" value="<?php echo $id; ?>">
				 		<input type="text" autofocus="" placeholder="New password" name="newpass" class="form-control" required>
				 		<input type="text" autofocus="" placeholder="Confirm password" name="confirmpass" class="form-control" required>
			            
			            <button type="submit" class="btn btn-lg btn-login btn-block" name="submit">
			            	SUBMIT
			            </button>
			</form>
			</div>
</body>
</html>