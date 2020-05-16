<?php
include("feed.php");
error_reporting(0);

$query="INSERT INTO FEAR VALUES('Pravesh','786049542','hello')";
 $data=mysqli_query($conn,$query);

if ($data) {
echo "<h1>thanks for your supporting</h1>";
}

?>