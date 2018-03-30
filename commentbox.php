
<!DOCTYPE html>
<html>
<head>
	<title>Comment Box</title>
	<?php include 'link.php' ?>
</head>
<body>


<div class="container">


  <h2>Comments your views</h2>
  <p>In the comment box below</p>
  <form method="POST" action="comment.php">
    <div class="form-group">
    	<input type="hidden" name="date" value="<?php echo date("d-m-Y"); ?>">
    	<input type="hidden" name="time" value="<?php date_default_timezone_set("Asia/Kolkata");; echo date("h:i:sa"); ?>">
    	<input type="hidden" name="day" value="<?php echo date("l"); ?>"><br><br>
    	<label for="comment">Email:</label><br>
      <input class="form-control" type="text" name="email" placeholder="Enter your email"><br><br>
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" name="comment"></textarea><br>
      <input type="submit" name="submit" value="Submit"><br>
      <?php 

      	$message = @$_GET['message'];

      	if ($message == '1') {
      		# code...
      		?>
      			<div class="alert alert-success">
				  <strong>Comment submitted successfully</strong>
			  </div>
      		<?php
      	}

      	elseif ($message == '2') {
      		# code...
      		?>
      			<div class="alert alert-danger">
				  <strong>OOPS! something went wrong</strong>
			  </div>
      		<?php
      	}


      ?>

    </div>
  </form>
</div>

<div class="container">

<?php

include 'connect.php';

$res=mysqli_query($conn, "SELECT * FROM comments");
$comment = mysqli_num_rows ($res); 

$counter = 1;

if ($comment > 0) {

		echo "Total Number of comments : ".$comment.'<br>';

		while($row=mysqli_fetch_array($res))
		{
			if ($row['status'] == 'Approved') {
				# code...
				echo "Comment No: ".$counter.'<br>';
				echo "Comment posted on ".$row['date'].','.$row['day'].','.$row['time'].'<br>';
				echo $row['comment'].'<br>';

				$counter++;
			}
			
			
		}
	}

	else
	{
		echo "No comment found";
	}

?>
</div>

</body>
</html>