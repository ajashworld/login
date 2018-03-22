<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include 'link.php'; ?>

</head>
<body>
	<div class="container">
		<?php 
			include 'search.php';
		?>
	</div>
<div class = "container login">
	<div class="wrapper">
		<form method="post" name="Login_Form" class="form-signin" action="userlogin.php">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  <?php 
			  	$message = @$_GET['user'];
			  	if ($message == '1') {
			  		# code...?>
			  			<div class="alert alert-danger">
						  <strong>Unable to login. Something went wrong</strong>
						</div>
						<?php
			  	}
			  	elseif ($message == '2') {
			  		# code...
			  		?>
			  			<div class="alert alert-danger">
						  <strong>Time Out Errror</strong>
						</div>
			  		<?php
			  	}
			  ?>
			  <input type="text" autofocus="" placeholder="Email" name="name" class="form-control" required>
            <input type="password" class="form-control" placeholder="Password" name="password" >

            <button type="submit" class="btn btn-lg btn-login btn-block" name="login">
            	SUBMIT
            </button>
		</form>			
	</div>
</div>
</body>
</html>