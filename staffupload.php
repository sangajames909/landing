 <?php 


$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "testmit";


$conn = new mysqli($servername, $username, $password, $dbname);

$first_name = '';
$last_name = '';
$employee_id = '';
$gender = '';
$salary = '' ;
$phone_number = '';



if (isset($_POST['save'])) {
  # code...
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$employe_id  = $_POST['employee_id'];
$gender  = $_POST['gender'];
$salary = $_POST['salary'];
$phone_number= $_POST['phone_number'];


$sql = ("INSERT INTO mask (id,firstname,lastname,employee_id,gender,salary,phone_number) VALUES('$first_name','$last_name','$employee_id','$gender','$salary','$phone_number')");

if ($conn->query($sql) === TRUE) {
	# code...
	echo "works";
}
}


 // $sql = "CREATE TABLE mask (
 // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 // firstname VARCHAR(30) NOT NULL,
 // lastname VARCHAR(30) NOT NULL,
 // employee_id INT(11),
 // gender VARCHAR(20),
 // salary INT(20),
 // phone_number INT(20),
 // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 // )"; 


 // if ($conn->query($sql) === TRUE) {
 //  	# code...
 //  	echo "Table created";
 // } else {
 //  	echo "table not created" . $conn->error;
 // } 

//   $sql = 'INSERT INTO mask (firstname,lastname,employee_id,gender,salary,phone_number) VALUES("Temwa", "Sanga", "8548089", "male", "190000", "0793015772" )';

//     if ($conn->query($sql) === TRUE) {
//     	# code...
//    	echo "data inserted";
//    } else {
//   	echo "data not inserted" . $conn->error;
//    }

// ?>
