<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head> 
	<title>E-Pay</title>	 
</head>

<body>
	<div class="test" style="color:blue; margin-left: 200px;margin-right: 400px; padding-top: 30px;color: brown;padding-right: 20px;padding-left: 80px;padding-bottom: 50px;">
	<form action="epay.php" method="post"><h1 style=" color: black;text-decoration-line:4px;text-shadow: red">e-court fee Receipt Application Form</h1>
		<div style="color: blue"></div>
		<div class="div" style="color:black">
		 
		<b>Name of litigant(s)</b>
		<input type="text" name="name" placeholder="name" required><br>
		<b>Contact No.</b><select>
			<option>+91</option>
		</select>
		<input type="number " name="phone"><br> 
		<b>e-court fee Amount</b>
		<input type="number" name="amount" placeholder="" required><br>
		<b>Date(DD/MM/YYYY)</b>
		<input type="number" name="date" placeholder="DD/MM/YYYY"><br>
		<label>Case Id</label>
		<input type="text" name="caseid">
		<input style="background-color:blue;" type="submit" name="pay">


	</form>
</div>

</body>
</html>


<?php 
require_once('dbconnection.php');

//Code for payment 
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	
	$phone=$_POST['phone'];
	$amount=$_POST['amount'];
	$date=$_POST['date'];
	$caseid=$_POST['caseid'];
	$msg=mysqli_query($con,"insert into bill(name, phone, amount, date, caseid) values('$name','$phone','$amount','$date','$caseid')");
if($msg)
{
	echo "<script>alert('Your have sent the payment request to your client ');</script>";
}
}else{
	echo "nice";
}

// Code for login 



?>
