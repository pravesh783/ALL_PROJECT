<?php
include("connection.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<form action="signup.php" method="post">
		<div id="a">
			<h2>Please fill the details</h2>
			<hr>
			<b>Name:</b><input type="text" name="Name" maxlength="30"/><br>
	<b>Email:</b><input type="text" name="Email"><br>
	<b>Password:</b><input type="Password" name="Password"><br>
	<b>DOB:</b><input type="text" name="DOB"><br>
	<b>MobileNo:</b><input type="text" name="MobileNo"><br>
	<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
<h5>Have an accunt?<a href="http://localhost/project2/login.php">LOGIN</h5>
</div>

</form>
</body>
</html>
<?php

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$DOB=$_POST['DOB'];
$MobileNo=$_POST['MobileNo'];

$query = "INSERT INTO LOGIN VALUES('$Name','$Email','$Password','$DOB','$MobileNo')";

$data=mysqli_query($conn,$query);
if ($data) {
	echo "Data inserted into database";
}


?>