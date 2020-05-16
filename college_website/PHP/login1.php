<?php
error_reporting(0);
include("connection.php") 
 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login1.css">
</head>
<body style="color: pink;">
   <form action="login.php" method="post">
	<div id="a">
		<h1 style="color: blue">Login</h1>
		<hr>
		<b>Username:</b><input style="padding: 10px" type="text" name="Username" placeholder="email"><br><br>
		<b>Password:</b><input style="padding: 10px" type="text" name="Password" placeholder="Password">
		<hr>
		<input type="Submit" name="submit" style="font-weight: bolder;font-size: 1em; color: green;">
		<a href="http://localhost/website/welcome1.php">reset</a>
		<hr>
		<h5>Do not have an account ?<b style="color: blue;"><a href="http://localhost/project2/signup.php">Sign Up</a></b></h5>
   
	</div>
   </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
$email = $_POST['Username'];
$password = $_POST['Password'];

$query = "SELECT * FROM login WHERE Username = '$email' && Password = '$password'";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($conn,$result);
echo $row;
if ($row==1) {
	
	header("Location:welcome.php");
}
else {
	echo "login fail";
	echo "<h2>Your username and password does not match!</h2>";
}
}
?>