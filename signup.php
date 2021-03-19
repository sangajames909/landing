<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div  class="container jumbotron">
		<h2>Create Account</h2>
		<form action="register.php" method="post">
		<h3>
			<?php
			if (isset($_SESSION['userTaken'])) {
				# code...
				echo $_SESSION['userTaken'];
				// unsset($_SESSION['userTaken']);
				session_destroy();
			}
			?>
        </h3>
    <div class="row">
        <div class="col">
          <input type="text" name="username"  class="form-control" placeholder="enter username" required="">
    </div>
    
    <div class="col">
        <input type="email" class="form-control" name="emailSignup" placeholder="enter email" required="">
    </div>
    
    <div class="col">
     <select class="form-control" name="role" id="role">
     	<option value="">Select User role</option>
     	<option value="student">Student</option>
     	<option value="admin">Administration</option>	
     </select> 
     </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col">
        <input onkeyup="check();" id="password" type="password" class="form-control" name="passRed" placeholder="enter password" required=""> 
    </div>
    <br>

    <div class="col">
    	<input onkeyup="check();" id="conpass" type="password" class="form-control" name="conpass" placeholder="confirm password" required="">
    	<span id="message"></span>
    </div>
    <br>

    <div class="col">
    	<a href="login.php"><p style="text-align: center;">Already have an account? Login here.</p></a>
    </div>
    <br>

    <div class="row">
    	<div class="col">
    		<input type="submit" value="create account" id="save" name="save" class="btn btn-warning btn-block"/>
    	</div>
    </div>

</div>
</form>
</div>
<script type="text/javascript">
	let check = function(){
		if (document.getElementById('password').value === document.getElementById('conpass').value) {

			document.getElementById('message').style.color ='blue';
			document.getElementById('message').innerHTML = 'Password Match';
			document.getElementById('save').disabled = false;

		} else {
			document.getElementById('message').style.color ='green';
			document.getElementById('message').innerHTML = 'Password do not Match';
			document.getElementById('save').disabled = true;

		}
	}
</script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>