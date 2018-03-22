<?php
	
include 'connect.php';
session_start();// Starting Session 
$id=$_SESSION['id']; 


$res=mysqli_query($conn, "SELECT * FROM registration WHERE id='$id'");
$row=mysqli_fetch_array($res);

$email = $row['email'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include 'link.php'; ?>

</head>
<body onload="countDown();">

<div class="container">
	
	
</div>

<div class = "container login">
	<div class="wrapper">
		<form method="post" name="Login_Form" class="form-signin" action="userotp.php">       
		    <h3 class="form-signin-heading">Please ENTER OTP</h3>
			  <hr class="colorgraph"><br>


			 Time Left: <input type="text" name="seconds" size="3">
			 <input type="hidden" value="<?php echo $email; ?>" name="email">
			  <input type="text" autofocus="" placeholder="OTP" name="userotp" class="form-control" required>
            

            <button type="submit" class="btn btn-lg btn-login btn-block" name="otp">
            	SUBMIT
            </button>
		</form>			
	</div>
</div>


<script language="javascript" type="text/javascript">
var myTime = "60";
function countDown() {
	document.Login_Form.seconds.value = myTime;
	if (myTime == 0)
	{
		location.href="login.php?user=2";
	}
	else if (myTime > 0)
	{
		myTime--;
		setTimeout("countDown()",1000);
	}
}
</script>
</body>
</html>