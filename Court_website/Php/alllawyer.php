<?php session_start();
require_once('dbconnection.php');



$sql = "SELECT id, fname, lname, email, password, contact FROM lawyer";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>Id:</b> " . $row["id"]. " <b> Name</b>" . $row["fname"]. " " .$row["lname"] . "<b> Email</b>" .$row["email"]. " <b> Contact</b> " .$row["contact"] ."<br>";
    }
} else {
    echo "0 results";
}

?>
