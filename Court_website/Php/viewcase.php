
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Case</title>
    <link href="css/uploadcase.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">

	<title>View Case</title>
	<style type="text/css">
 #info{
    flex-flow: row nowrap;
    justify-content: center;
    align-items: center;
 	border: 1px solid black;
   
 }
 P{
    font-size: 28px;
 }
 h1{
    text-align: center;
    text-transform: uppercase;
    margin-top: -30px;
 }
	</style>
</head>
<body>
<div class="conainer">
	<h1>Case Information</h1>

<form action="viewcase.php" method="post">
  
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input name="caseid" type="text" class="form-control" name="caseid" placeholder="Enter Your CaseId">
     <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit" value="Submit">
  </div>
  
</form>



</div>
</body>
</html>



<?php
include_once 'dbconnection.php';

if (isset($_POST['submit'])) {



$id = $_POST['caseid'];

$sql = "SELECT * FROM usercases where caseid = $id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        /**echo "id: " . $row["name"]. "&nbsp &nbsp &nbsp &nbsp - Name: " . $row["email"]. "&nbsp &nbsp &nbsp &nbsp " . $row["pincode"]. "&nbsp &nbsp &nbsp &nbsp<br>";**/
        echo "<div id='info'> <p>
        Name: " .$row['name']."&nbsp &nbsp &nbsp &nbsp So/Do/W/o: " .$row['so']. "&nbsp &nbsp &nbsp &nbsp Address: " .$row['address']. "&nbsp &nbsp &nbsp &nbspAddhar No.: " .$row['aadhar']. "<br> <br>  Pin Code: " .$row['pincode']. "<br>  Nationality: " .$row['nationality']. "<br> Gender: " .$row['gender']. "<br> Email: " .$row['email']. "<br>Contact: " .$row['phone']. "&nbsp &nbsp &nbsp &nbsp Police Station: " .$row['station'] . "&nbsp &nbsp &nbsp &nbsp DOB: " .$row['dob']." &nbsp &nbsp &nbsp &nbsp Act/Session: " .$row['act']." &nbsp &nbsp &nbsp &nbsp F.I.R No: " .$row['firno']."</p></div>" ;
    }
} else {
    echo "<h1>There is no case for this caseid</h1>";
}
$con->close();
}
?>

