<!DOCTYPE html>
<html>
<head>
	<title>Form processing | Method get</title>
</head>
<body>
	<h2>Form processing | Method get</h2>
	<?php 
       //mehod get will package user details in an associative array called super global

	echo "<pre>";
	print_r($_GET);
	echo "</pre>";
	echo "<hr>For each to iterate my array<br>";
	foreach ($_GET as $value) {
		echo"User input value :" .$value . "<hr>";
	}
	echo "<br>";
	echo "Hi there" . $_GET['name'];
	 ?>

</body>
</html>