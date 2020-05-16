<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="slogin.css">
</head>
<body style="color: pink;">

	<div id="a">
		<form action="slogin.php" method="post">
		<h1 style="color: blue">Login</h1>
		<hr>
		<b>Username:</b><input type="text" name="Username">(email)<br><br>
		<b>Password:</b><input type="Password" name="Password">(rollno)
		<hr>
		<input type="Submit" name="submit" style="font-weight: bolder;font-size: 1em; color: green;">
		<hr>
		<h5>Do not have an account ?<b style="color: blue;"><a href="http://localhost/website/signup1.php">Sign Up</a></b></h5>
</form>
	</div>

</body>
</html>

<?php
include_once 'signup.php';

$email = $_POST['Username'];
$rollno = $_POST['Password'];

$query = "select * from sign where username = $email"


?>