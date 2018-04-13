<!DOCTYPE html>
<html>
<head>
	<title>ALLY ACCOUNT </title>
</head>
<body>

<?php

echo "YOUR DATA IS STORED";

$name = $_POST['name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];
$phone_no = $_POST['phone_no'];
$pan_no = $_POST['pan_no'];
$permanent_address = $_POST['permanent_address'];
$permanent_pin = $_POST['permanent_pin'];
$temporary_address = $_POST['temporary_address'];
$temporary_pin = $_POST['temporary_pin'];
$email = $_POST['email'];
$country = $_POST['country'];
$home_branch = $_POST['home_branch'];
$aadhar_no = $_POST['aadhar_no'];
	

$dbc = mysqli_connect('localhost','root','','bank_database')	
	or die('Error connecting server');
	
$query = "INSERT INTO customer_details VALUES('$name', '$father_name',".
		 "'$mother_name', '$phone_no', '$gender', '$dob', '$occupation', '$aadhar_no',". 
		 "'$pan_no', '$email', '$country', '$home_branch', '$permanent_address', '$permanent_pin',". 
		 " '$temporary_address', '$temporary_pin', NULL, NULL, NULL, NULL, NULL, NULL)";	

$result = mysqli_query($dbc,$query)
or die('<br/>'.'Error in processing');

mysqli_close($dbc);
 
?>






<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>













</body>

</html>