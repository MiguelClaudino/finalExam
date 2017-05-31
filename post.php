<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>newsletter</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
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
$name 		= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email 		= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$sub 		= filter_input(INPUT_POST, 'sub', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO newsletter (name, email, sub) VALUES ('$name','$email','$sub')";

require_once('db_con.php');
$stmt = $con->prepare($sql);
$stmt->bind_param('sss', $name, $email, $sub);
$stmt->execute();
?>
<h3 class="white">Your registration was succesful.</h3>
<a href="../index.html"><h3>Go back</h3></a>
</body>
</html>