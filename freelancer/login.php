<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);



 // POST the form data

$email = $_POST['email'];
$password = $_POST['password'];




//sql query
$sql = "INSERT INTO login_tb ( email, passwordd )
         VALUES ( '$email', '$password');";

//check sql process
if (mysqli_query($conn, $sql)) {
  
  echo "process completed";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>