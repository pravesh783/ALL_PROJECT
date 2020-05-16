<!DOCTYPE html>
<html>
<head>
	<title>Notification For Lawyer</title>
</head>
<body>
<div class="notification">
	<h2>Hey You have a new case</h2>




<form action="lawyercasenotification.php">
	<input type="text" name="nmae">
    	  <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit" value="Submit">
    </form>


<?php 

if(isset($_POST['submit'])){



	echo "nice";
}

 ?>

</div>
</body>
</html>


<?php
session_start();
include_once 'dbconnection.php';

if(isset($_POST['check']))
{
$name = $_SESSION['name'];



$id = $_POST['caseid'];
echo "thisi";
$sql = "SELECT * FROM lawyer where fname = $name";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        /**echo "id: " . $row["name"]. "&nbsp &nbsp &nbsp &nbsp - Name: " . $row["email"]. "&nbsp &nbsp &nbsp &nbsp " . $row["pincode"]. "&nbsp &nbsp &nbsp &nbsp<br>";**/
        echo "Your current Case is ".$row['yourcaseid'] ;
    }
} else {
    echo "<h1>There is no case for your</h1>";
}
}
?>

