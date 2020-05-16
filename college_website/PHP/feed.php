<?php
$sname="localhost";
$uname="arpit";
$pasword="12345678";
$dbname="feed";
$conn=mysqli_connect($sname,$uname,$pasword,$dbname);
if ($conn) {
	echo " connection ok<br>";
}
else{
	die("connection failed because" .mysqli_connect_error());
}


?>