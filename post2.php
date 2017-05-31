<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>petition</title>
<style>
body {background-color: #424242; font-family: 'Roboto', sans-serif; text-align: center;}
a {text-decoration: none; color: #35D0DC;}
h3 {font-weight: 100;}
.white {margin-top: 25%; color: #DDDDDD;}
</style>
</head>
<body>
<?php
ini_set("display_errors", 0);
$fname 		= filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname 		= filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$address 	= filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$email 		= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO petition (fname, lname, address, email) VALUES ('$fname', '$lname', '$address', '$email')";

require_once('db_con.php');
$stmt = $con->prepare($sql);
$stmt->bind_param('ssss', $fname, $lname, $address, $email);
$stmt->execute();
?>
<h3 class="white">Your registration was succesful.</h3>
<a href="../index.html"><h3>Go back</h3></a>
</body>
</html>