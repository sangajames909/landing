<?php

//create  a connection to the database
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "testMit";


//use mysqli extension to connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// //check if the connection is valid
// if ($conn->connect_error) {
// 	# code...
//   die("Connection failed: " . $conn->connect_error);
// }

   
//  echo "successfully connected ";

// //create database
// $sql = 'CREATE DATABASE testMit';


// //checkinf if db has been created
//  if ($conn->query($sql) === TRUE) {
//  	# code...
//  	echo "database created";
//  } else {
//  	echo "failed : " - $conn->error;
//  }



// //creating table
// $sql = 'CREATE TABLE students (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )';

// if ($conn->query($sql) === TRUE) {
// 	# code...
// 	echo "Table created";
// } else {
// 	echo "table not created" . $conn->error;
// } 

// $sql = 'INSERT INTO students (firstname, lastname, email)
// VALUES ('James', 'Sanga', 'sangajames909@example.com')';

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $sql = 'CREATE TABLE staff (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// gender VARCHAR(20),
// phone_number INT(20),
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )';

// if ($conn->query($sql) === TRUE) {
// 	# code...
// 	echo "Table created";
// } else {
// 	echo "table not created" . $conn->error;
// } 

// $sql = 'INSERT INTO staff (firstname,lastname,gender,phone_number,email) VALUES("James", "Sanga", "male", 0793015772, "sangajames909")';

//  if ($conn->query($sql) === TRUE) {
//  	# code...
//  	echo "data inserted";
//  } else {
//  	echo "data not inserted" . $conn->error;
//  }



$sql = 'INSERT INTO students (firstname,lastname,email) VALUES("James", "Sanga", "sangajames909")';

 if ($conn->query($sql) === TRUE) {
 	# code...
 	echo "data inserted";
 } else {
 	echo "data not inserted" . $conn->error;
 }

$conn->close(); //closes the connection


 ?>