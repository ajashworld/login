
<?php
$message = @$_GET['search'];
if($message)
{
	echo "Search field is empty";
}
?>

<div class="search">
	<form method="post" action="searching.php">
		<input type="text" name="find" placeholder="Search here..."><input type="submit" name="search" value="GO!">
	</form>


<!--

	Note : We can also use required to field instead of creating php validation

-->