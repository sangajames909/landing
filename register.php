<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "testmit");

//global varriable  to check whether name exists
$_SESSION['userTaken'] = "username is already taken";
$_SESSION['userRegistered'] = "registration successful";

//set variables
$username = $email = $password = '';

//check if login has been clicked
if (isset($_POST['save'])) {
	# code...
	//get inputs from user
	$username = $_POST['username'];
	$email = $_POST['emailSignup'];
	$password = $_POST['passReg'];
	$role = $_POST['role'];

	 //encrypt password
 $encrypted_pass = md5($password);

 //fetch records from db 
 $regsql = "SELECT * FROM users WHERE username='$username'";
 $result = mysqli_query($conn,$regsql);
 $num = mysqli_num_rows($result);

 //checking for name
 if ($num==1) {
 	# code...
 	$_SESSION['userTaken'];
 	header('location: signup.php');

 } else {
 	$sql = "INSERT INTO users(username,email,password,role) VALUES('$username','$email','$encrypted_pass','$role')";

 	$result = mysqli_query($conn,$sql);
 	if ($result) {
 		# code..
 			echo "registration successful";
 	$_SESSION['userRegistered'];

 	header('location: login.php?registered=true');
 	}
 
 }
}





?>