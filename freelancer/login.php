<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);




if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// collect user input from login form
$email = $_POST['email'];
$password = $_POST['password'];

// query the database to check if the email and password match
$sql = "SELECT * FROM login_tb WHERE email='$email' AND passwordd='$password'";
$result = mysqli_query($conn, $sql);

// check if there is a match
if (mysqli_num_rows($result) == 1) {
  // email and password are correct
  echo "Login successful!";
} else {
  // email and/or password are incorrect
  echo "Invalid email or password.";
}

// close the database connection
mysqli_close($conn);


?>