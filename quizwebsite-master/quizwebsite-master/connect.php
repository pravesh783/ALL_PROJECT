<?php
$sname="localhost";
$uname="arpit";
$pasword="12345678";
$dbname="quiz";
$conn=mysqli_connect($sname,$uname,$pasword,$dbname);
if ($conn) {
	echo "connected <br>";
}
else{
	die("connection failed because" .mysqli_connect_error());
}


?>s