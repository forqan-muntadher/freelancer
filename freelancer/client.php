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
$sql = "INSERT INTO client_tb ( C_first_name , C_last_name , C_email, C_password , C_country)
         VALUES ( '$firstname' , '$lastname' , '$email' , '$password' , '$country');";

$sql .= "INSERT INTO login_tb (email, passwordd)
        SELECT C_email , C_password FROM client_tb
        WHERE C_email = '$email' AND C_password = '$password'; ";

//check sql process
if (mysqli_multi_query($conn, $sql)) {
  

 header("location: CLIENT.HTML");
 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>