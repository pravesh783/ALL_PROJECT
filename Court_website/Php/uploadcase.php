<?php
// Start the session
session_start();
?>

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
    <script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script> 
   <style type="text/css">
   	
   	h1{
   		text-align: center;
   		margin-top: -30px;
   	}
   	form{
   		margin: 10px 30px 0px 30px;
   	}
   	input{
      margin: 20px;
    }
    form{
      padding: 40px;
      border: 1px solid black;
      font-size: 20px;
      background-color: rgba(23,200,234,0.5);
    }
    .header{
      background-color: skyblue;
      padding-top: 40px;
    }
   </style>
</head>
<body>
<div class="header">
   <h1><?php echo "Welcome ". $_SESSION['name']. " to E-Court";?> <br> Upload Your case</h1>
</div>

 <form action="uploadcase.php" method="post">
  <label>Name of Plaintiff/ Complainant etc.</label>
  <input type="text" name="name" placeholder="name" required="*"><br> 
    <b>s/o,d/o,w/o</b>
    <input type="text" name="so" placeholder="name" required=""><br>
    <b>Address</b>
    <input type="text" name="address"><br>
    <b>Aadhaar no.</b>
    <input type="number" name="aadhar"><b>Pin code:</b><input type="number" name="pincode">
    <br>
    <b>Gender</b>
    <input type="radio" name="gender" value="male">male
    <input type="radio" name="gender" value="female">female<b>Nationality:</b><input type="text" name="nationality"><br>
    <b>Email id:</b>
    <input type="email" name="email" placeholder="email@123" required>
    <b>Contact No.</b><select>
      <option>+91</option>
    </select>
    <input type="number " name="phone"><br> 
    <b>Date Of Birth(DD MM YYYY)</b>
    <select placeholder="DD" name="dd">
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>10</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
      <option>31</option>
    </select>
      <select placeholder="mm" name="mm">
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
    </select>
    <select name="yy">
      <option>1960</option>
      <option>1961</option>
      <option>1962</option>
      <option>1963</option>
      <option>1964</option>
      <option>1965</option>
      <option>1966</option>
      <option>1967</option>
      <option>1968</option>
      <option>1969</option>
      <option>1970</option>
      <option>1971</option>
      <option>1972</option>
      <option>1973</option>
      <option>1974</option>
      <option>1975</option>
      <option>1976</option>
      <option>1977</option>
      <option>1978</option>
      <option>1979</option>
      <option>1980</option>
      <option>1981</option>
      <option>1982</option>
      <option>1983</option>
      <option>1984</option>
      <option>1985</option>
      <option>1986</option>
      <option>1987</option>
      <option>1988</option>
      <option>1989</option>
      <option>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
      <option>1995</option>
      <option>1996</option>
      <option>1997</option>
      <option>1998</option>
      <option>1999</option>
      <option>2000</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
      <option>2020</option>
      </select><br>

      <label>Select Lawyer</label>
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
      <b>Age</b><input type="number" name="age" required="*">
      <b>Act/session*</b><input type="number" name="act" required="*"><br>
      <b>Police Station </b><input type="text" name="station" required="*"><br>
      <b>F.I.R. No.& Year</b><input type="number" name="firno" required="*"><br>

  

  <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit" value="Submit">
</form>
</body>
</html>


<?php


if (isset($_POST['submit'])) {

 include_once 'dbconnection.php';

$name=$_POST['name'];
  $email=$_POST['email'];
  $so=$_POST['so'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $aadhar=$_POST['aadhar'];
  $phone=$_POST['phone'];
  $dd=$_POST['dd'];
  $mm= $_POST['mm'];
  $yy=$_POST['yy'];
  $age=$_POST['age'];
  $act=$_POST['act'];
  $station=$_POST['station'];
  $firno=$_POST['firno'];
  $dob = $dd. $mm. $yy;
  $pincode = $_POST['pincode'];
  $nationality = $_POST['nationality'];
  $lawyer = $_POST['lawyer'];
//for case id 
  $caseid = date("dmysh");
 $msg=mysqli_query($con,"insert into usercases(name, so, address, aadhar, pincode, gender, nationality, email, phone, dob, age, act, station, firno, caseid, lawyer) values('$name','$so','$address','$aadhar','$pincode','$gender','$nationality','$email','$phone','$dob','$age','$act','$station','$firno','$caseid','$lawyer')");

$sql = "UPDATE lawyer SET yourcaseid ='$caseid' WHERE fname='$lawyer'";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
if($msg)
{
  echo "<script>alert('Register successfully');</script>";

}
else{
  echo "<script>alert('Some went woring');</script>";
}
}

?>

