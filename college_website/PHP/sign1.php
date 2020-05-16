<?php
include("signup.php");
error_reporting(0);
$n=$_GET['name'];
$fn=$_GET['Father Name'];
$mn=$_GET['Mother Name'];
$c=$_GET['Course'];
$b=$_GET['Branch'];
$rn=$_GET['Registration no'];
$v=$_GET['Village'];
$p=$_GET['Post'];
$d=$_GET['District'];
$pn=$_GET['PIN'];
$e=$_GET['Email'];
$m=$_GET['Mobile No'];
$f=$_GET['Father No'];
$r=$_GET['Roll No'];
$query="INSERT INTO SIGN VALUES('$n','$fn','$mn','$c','$b','$rn','$v','p','$d','$pn','$e','$m','$f','$r')";
$data=mysqli_query($conn,$query);
if ($data) {
	echo "Data inserted into database";
}
?>