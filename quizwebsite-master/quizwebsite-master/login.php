<?php
include("connect.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$User_Id=$_GET['Name'];
$Password=$_GET['Password'];
$query = "INSERT INTO LOGIN VALUES('$Name','$Email','$Password','$DOB','$MobileNo')";

$data=mysqli_query($conn,$query);
if ($data) {
	echo "Data inserted into database";
}
?>
</body>
</html>