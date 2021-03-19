<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testmit";
$conn = "";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
	# code...
	die("connection failed" . $conn->connect_error);
}  else{
	echo "connected";
}



?>