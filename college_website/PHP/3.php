<?php
include("1.php");
error_reporting(0);
$nm=$_GET['Name'];
$em=$_GET['Email'];
$ms=$_GET['Message'];
$query="INSERT INTO GET VALUES('$nm','$em','$ms')";
 $data=mysqli_query($conn,$query);

if ($data) {
echo "<h1>thanks for your supporting.We will contact you soon</h1>";
}

?>