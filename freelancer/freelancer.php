<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);



 // POST the form data

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];




//sql query
$sql = "INSERT INTO freelancer_tb ( F_first_name , F_last_name , F_email, F_password , F_country)
         VALUES ( '$firstname' , '$lastname' , '$email' , '$password' , '$country');";

//check sql process
if (mysqli_query($conn, $sql)) {
  
 header("location: FREELANCER.HTML");
 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>