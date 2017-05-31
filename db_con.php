<?php

const HOSTNAME = 'localhost'; //server
const MYSQLUSER = 'root'; //database user
const MYSQLPASS = 'root'; //database password
const MYSQLDB = 'mil'; //database name

//Creat database connection object
$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

//set charset utf8 to match coallation in db
$con->set_charset('utf8');

if($con->connect_error) {
	die('Error: ' . $con->connect_error . ' (' . $con->connect_errno . ')');
}

?>