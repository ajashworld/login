<!DOCTYPE html>
<html>
<head>
	<title>forget password</title>
	<?php include 'link.php'; ?>
</head>
<body>
<div class="container" style="width: 30%; padding-top: 100px;">

<h1>Enter your email to get your password</h1>

<form action="verifyemail.php" method="post">
	 		<input type="text" autofocus="" placeholder="Enter your email" name="name" class="form-control" required>
            
            <button type="submit" class="btn btn-lg btn-login btn-block" name="submit">
            	SUBMIT
            </button>
</form>
</div>

</body>
</html>