<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<select name="lawyer" id="lawyer">

<option value="">Select Lawyer</option>

<?php

//Include database configuration file

include_once 'dbconnection.php';

//Get all country data

$sql = "SELECT * FROM lawyer ";

//Count total number of rows
$result = $con->query($sql);


if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

echo '<option value="'.$row['fname'].'">'.$row['fname'].'</option>';

}

}else{
echo '<option value="">Country not available</option>';

}

?>

</select>
</body>
</html>