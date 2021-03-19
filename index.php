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
  <style type="text/css">
    .flex-container {
  display: flex;
  background-color: red;
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 15px;
  padding: 15px;
  font-size: 15px;
}
  </style>
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
		<input type="radio" name="yesorno" value="yes"> Male:
    <input type="radio" name="yesorno" value="no"> Other:
    <input type="radio" name="yesorno" value="no"> 
    
    </div>
    <a class="btn btn-primary" href="staff.php">Go to staff form</a>
	<a class="btn btn-warning" href="student.php">Go to students form</a>


	<div class="row" style="margin-bottom: 10px;">
    <div class="col">
      <br>
        <input type="submit" id="save " name="save" value="submit" class="btn-secondary btn-block"> 
      </div>	
	</div>
  
  
  <h2 style="text-align: center; letter-spacing: 12px;>">About Us</h2>
  <p style="font-style: italic; text"><b>Our school's mission is to learn leadership, the common core, and relationships for life. Our mission is to provide a safe, disciplined learning environment that empowers all students to develop their full potential. We feel strongly about helping to build leaders that have the ability to succeed in whatever endeavor they undertake. Winning is not always the measure of success. Our students understand the "Win, win" philosophy and use it in their daily life. Common standards keeps us focused on learning appropriate content and preparing our students to graduate. Last but just as importantly, setting examples for our students of meaningful and lasting relationships will go with them throughout their lifetime.</b> </p>
  </div>

  <div class="flex-container">
<div> <h4>Contact</h4>
      <p>For more information contact us on +254 7930 15772</p>
      <p>Email @ sangajames909@gmail.com</p>
      <p>@jamessangah@gmail.com</p>
</div>
<div>
    <h4>Social media</h4>
  <a href="https://www.facebook.com/"><p>Facebook page @James Dadiya</a>
  <a href="https://twitter.com/twitter?lang=en"><p>Twitter @James Sangah</p></a>
  <a href="https://www.instagram.com/"><p>Instagram @james Dadiya</p></a>
  <a href="https://www.youtube.com/watch?v=AXnqkVTFUqY">YouTube @James Sangah</a>
</div>
</div>	

</body>
</html>