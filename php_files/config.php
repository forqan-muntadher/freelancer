<?php
$servername = "localhost:3307";  //my computer
$username = "root";
$password = "";
$db = "freelancer_db";
// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);
 
// Check connection
if ($conn->connect_error) {
   die("Connection failed server: " . $conn->connect_error); 
}
else {
echo "Connected successfully server<br>"; 

}



?>