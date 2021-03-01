<!DOCTYPE html>
<html>
<head>
	<title>student</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body style="background-color: #B2EBF2;">
  <div class="container container-fluid">
  <h3 style="text-align: center; background-color: blue;">STUDENTS</h3>
  

  <a class="btn btn-secondary" href="staff.php">Go to staff form</a>
  <br>
  <hr>
  <form method="post" action="student.php">
    <div class="form-group">
      <label for="name">ID:</label>
      <input text="name" class="form-control" id="name" placeholder="Enter your id" name="email">
    </div>
    <div class="form-group">
      <label for="">First Name:</label>
      <input text="name" class="form-control" id="name" placeholder="Enter first name" name="name">
    </div>
    <div class="form-group">
      <label for="">Last name:</label>
      <input text="ID" class="form-control" id="" placeholder="Enter last name" name="">
    </div>
    <div class="form-group">
      <label for="number">Employee ID:</label>
      <input text="id" class="form-control" id="" placeholder="Enter employee id number" name="">
    </div>
    <div class="form-group">
      <label for="number">Gender:</label>
      <input text="phone number" class="form-control" id="" placeholder="Enter gender" name="gender">
    </div>
    <div class="form-group">
      <label for="number">Admission number:</label>
      <input text="phone number" class="form-control" id="" placeholder="Enter admission number" name="number">
    </div>
    <br>
    <div class="row" style="margin-bottom: 10px;">
    <div class="col">
        <a class="btn btn-primary btn-block">Submit</a> 

    </div>
  </form>
</div>






</body>
</html>