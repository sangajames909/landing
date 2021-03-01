<!DOCTYPE html>
<html lang="en">
<head>
  <title>Staff</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #90CAF9;">
<div class="container container-fluid">
  <h3 style="text-align: center; background-color: blue;">STAFF</h3>
 
  
<a class="btn btn-success" href="student.php">Go to student form</a>
  <br>
   <hr>
    <form method="post" action="staff.php">
    	<div class="form-group">
       <label for="name">ID:</label>
        <input text="name" class="form-control" id="" placeholder="Enter your id" name="id">
    </div>
      <div class="form-group">
       <label for="name">First name:</label>
        <input text="name" class="form-control" id="" placeholder="Enter your name" name="">
      </div>
        <div class="form-group">
         <label for="name">Last name:</label>
          <input text="name" class="form-control" id="" placeholder="Enter your last name" name="">
        </div>
        <div class="form-group">
      <label for="name">Gender:</label>
      <input text="gender" class="form-control" id="" placeholder="Enter your gender" name="">
    </div>
    <div class="form-group">
      <label for="email">Salary:</label>
      <input text="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Employee id:</label>
      <input text="ID" class="form-control" id="" placeholder="Enter ID" name="pswd">
    </div>
    <div class="form-group">
      <label for="number">Phone number:</label>
      <input text="phone number" class="form-control" id="" placeholder="Enter phone number" name="number">
    </div>
    <div class="row" style="margin-bottom: 10px;">
    <div class="col">
        <a class="btn btn-danger btn-block">Submit</a> 
      </div>
  </form>
</div>




</body>
</html>