<!DOCTYPE html>
<html>
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
    <form method="post" action="staffupload.php">
    	<div class="form-group">
       <label for="id">ID:</label>
        <input type="text" class="form-control" id="id" placeholder="Enter your id" name="id">
    </div>
      <div class="form-group">
       <label for="name">First name:</label>
        <input type="text" class="form-control" id="firstname" placeholder="Enter your name" name="first_name">
      </div>
        <div class="form-group">
         <label for="name">Last name:</label>
          <input type="text" class="form-control" id="lastname" placeholder="Enter your last name" name="last_name">
        </div>
        <div class="form-group">
      <label for="pwd">Employee id:</label>
      <input type="text" class="form-control" id="" placeholder="Enter ID" name="employee_id">
    </div>
        <div class="form-group">
      <label for="name">Gender:</label>
      <input text="gender" class="form-control" id="" placeholder="Enter your gender" name="gender">
    </div>
    
    <div class="form-group">
      <label for="salry">Salary:</label>
      <input text="amount" class="form-control" id="email" placeholder="Enter amount" name="salary">
    </div>
    
    <div class="form-group">
      <label for="number">Phone number:</label>
      <input text="phone number" class="form-control" id="" placeholder="Enter phone number" name="phone_number">
    </div>
    <div class="row" style="margin-bottom: 10px;">
    <div class="col">
        <input type="submit" name="save" value="submit record" class="btn-block btn-danger">
  </form>

  <br>

<?php 

include ("public/connect.php");
$sql = "SELECT * FROM mask";
$result = mysqli_query($conn, $sql);

?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">employee_id</th>
      <th scope="col">gender</th>
      <th scope="col">salary</th>
      <th scope="col">phone number</th>
      <th scope="col">reg date</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>

 <?php 
 while ($row = $result->fetch_assoc()):
  ?>
  <tr>
  <th scope="row"><?php echo $row['id']; ?></th>
  <td scope="row"><?php echo $row['firstname']; ?></td>
  <td scope="row"><?php echo $row['lastname']; ?></td>
  <td scope="row"><?php echo $row['employee_id']; ?></td>
  <td scope="row"><?php echo $row['gender']; ?></td>
  <td scope="row"><?php echo $row['salary']; ?></td>
  <td scope="row"><?php echo $row['phone_number'] ?>
  <td scope="row"><?php echo $row['reg_date'] ?></td>

  <td><div class="row">
    <div class="btn-group">
      <a class="btn btn-success" href="public/student.php?id = <?php echo $row['id']; ?>" >edit</a>
      <a class="btn btn-warning" href="public/student.php?delete = <?php echo $row['id']; ?>" >delete</a>
    </div></td>

  </div>

<?php 
endwhile;
 ?>
 </tr>
</tbody>
</table>

 <?php 
 if (isset($_GET['delete'])) {
   # code...
  $id = $_GET['delete'];
  $conn->query("DELETE FROM mask where id=$id") or die($conn->error);

  echo "deleted";
  header('Location: index.php ');
 }
  ?>
  

</div>

</body>
</html>