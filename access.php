<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'mitDatabase');

$_SESSION['userUnavailable'] = "Please try again, incorrect credentials";
$emaillog = '';
$passwordLog = '';

if (isset($_POST['login_button'])) {
	# code...
	$emaillog = $_POST['emaillog'];
	$passwordLog = $_POST['passlog'];
}

$sql="SELECT * FROM user WHERE email='emaillog' && password= '".md5($password)."'";

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if ($num==1){
	$_SESSION['activeUser']= $username;

	header('location: signup.php');
}

else{
	header('location: login.php');
}




?>