<!DOCTYPE html>
<html>
<head>
	<title>Landing page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #BBDEFB;">
	
<div class="jumbotron jumbotron-fluid" style="border-bottom: groove; background-color: 
#1565C0;">
  <div class="container">
    <h1>Create your account</h1>      
  </div>
</div>
<div class="container container-fluid">
	<form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Email or Phone number:</label>
      <input type="text" class="form-control" id="" placeholder="Enter email or number" name="" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <br>
      Enter your date of birth: <br>
		<input type="date" name="day">

	     <br>
	     <br>
        <h6>Gender</h6>
        Female:
		<input type="radio" name="yesorno" value="yes"> <br>
		Male:
		<input type="radio" name="yesorno" value="no"> <br>
		Other:
		<input type="radio" name="yesorno" value="no">



    </div>
    <a class="btn btn-primary" href="staff.php">Go to staff form</a>
	<a class="btn btn-warning" href="student.php">Go to students form</a>

	<div class="row" style="margin-bottom: 10px;">
    <div class="col">
        <a class="btn btn-danger btn-block">Submit</a> 
      </div>
		
	</div>

	
</div>
</body>
</html>