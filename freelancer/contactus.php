<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);



 // POST the form data

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];




//sql query
$sql = "INSERT INTO contactus_tb ( name , email , message)
         VALUES ( '$name' , '$email' , '$message');";


//check sql process
if (mysqli_query($conn, $sql)) {
  
 header("location: HOME.php");
 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>