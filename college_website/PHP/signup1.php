<?php
include("signup.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title> 
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body><form action="" method="GET">
	<div id="a">
		<h1>Please fill your Details:-</h1>
		<div id="b">
		name:<input type="text" name="name"><br>
		Fathername:<input type="text" name="Fathername"><br>
		Mothername:<input type="text" name="Mothername"><br>
		Course:<input type="text" name="Course"><br>
		Branch:<input type="text" name="Branch"><br>
		RegistrationNo:<input type="text" name="RegistrationNo"><br>
		Village:<input type="text" name="Village"><br>
		Post:<input type="text" name="Post"><br>
		District:<input type="text" name="District"><br>
		PIN:<input type="text" name="PIN"><br>
		Email:<input type="text" name="Email"><br>
	
		MobileNo:<input type="text" name="MobileNo"><br>
		FatherNo:<input type="text" name="FatherNo"><br>
		RollNo:<input type="text" name="RollNo"><br>
		<input type="submit" name="submit" style="color: blue;margin: 30px;font-weight: bold;font-size: 1.5em;margin-left:80px;">

</div>
	</div>
</form>
<?php
$name=$_GET['name'];
$Fathername=$_GET['Fathername'];
$Mothername=$_GET['Mothername'];
$Course=$_GET['Course'];
$Branch=$_GET['Branch'];
$RegistrationNo=$_GET['RegistrationNo'];
$Village=$_GET['Village'];
$Post=$_GET['Post'];
$District=$_GET['District'];
$PIN=$_GET['PIN'];
$Email=$_GET['Email'];
$MobileNo=$_GET['MobileNo'];
$FatherNo=$_GET['FatherNo'];
$RollNo=$_GET['RollNo'];
//$query="INSERT INTO SIGN VALUES('alok','krishna','radha','bca','ca','53','jfkjf','fsdfd','dfs','223456','fdfv','546382934','432567842','45')";
$query="INSERT INTO SIGN VALUES('$name','$Fathername','$Mothername','$Course','$Branch','$RegistrationNo','$Village','$Post','$District','$PIN','$Email','$MobileNo','$FatherNo','$RollNo')";
$data=mysqli_query($conn,$query);
if ($data) {
	echo "Data inserted into database";
}
?>
</body>
</html>