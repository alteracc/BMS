<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
<?php
	$name = $_POST['name'];
	$account_no = $_POST['account_no'];
	$email = $_POST['email'];
	$aadhar_no = $_POST['aadhar_no'];

	echo "You are creating online account ".'<br/>';
	echo "Your entered details : ".'<br/>';
	echo "NAME : $name".'<br/>';
	echo "ACCOUNT NUMBER : $account_no".'<br/>';
	echo "E-MAIL ID : $email".'<br/>';
	echo "AADHAR NUMBER : $aadhar_no".'<br/>';
	
	
	
?>

</body>

</html>