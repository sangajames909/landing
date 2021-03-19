<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Login</title>
</head>
<body>
	<div class="container jumbotron">
		<h2>Create Account</h2>
	<form action="access.php" method="post">
		<h3>
			<?php
			 // if ($_GET['registered'] == 'true') {
				// # code...
				// echo "your account has been created";

				if (isset($_SESSION['userRegistered'])) {
					echo $_SESSION['userRegistered'];
					unset($_SESSION['userRegistered']);
                    session_destroy();

				} else {
					echo "login here";
				}
			

			?>
		</h3>


	<div class="row">
		<div class="col">
			<input type="email" name="emaillog" class="form-control" placeholder="enter email address" required="">
			<br>
			<input type="password" class="form-control" name="passlog" placeholder="enter password" required="">
			<br>
			<button name="login_button" id="login_button" class="btn btn-primary btn-block">Login</button>
			<br>
			<a href="signup.php"><p style="text-align: center;">Do not have account? signup here.</p></a>
  </form>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>