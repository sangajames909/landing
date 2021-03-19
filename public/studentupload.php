<?php 

$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "testmit";

$conn = new mysqli($servername, $username, $password, $dbname);


$first_name = '' ;
$last_name = '';
$employee_id= '' ;
$gender = '' ;
$admission_number = '';

if (isset($_POST['save'])) {
  # code...
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$employee_id = $_POST['employee_id'];
$gender = $_POST['gender'];
$admission_number = $_POST['admission_number'];


// if ($conn->query($sql) === TRUE) {
//   # code...
//   echo "works";
// }
// } 

   // $sql = "CREATE TABLE numb (
   // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   // firstname VARCHAR(30) NOT NULL,
   // lastname VARCHAR(30) NOT NULL,
   // employee_id INT(11),
   // gender VARCHAR(20),
   // admission_number INT(11),
   // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   // )";

   // if ($conn->query($sql) === TRUE) {
   //   # code...
   //   echo "Table created";
   // } else {
   //  echo "table not created" . $conn->error;
   // } 




     $sql = 'INSERT INTO numb (firstname,lastname,employee_id,gender,admission_number) VALUES("James", "Sanga", "73580", "male", "84920")';

      if ($conn->query($sql) === TRUE) {
        # code...
        echo "data inserted";
    } else {
      echo "data not inserted" . $conn->error;
    }





 ?>
 