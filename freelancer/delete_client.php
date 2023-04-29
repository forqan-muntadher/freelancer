<?php
include('config.php');// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);
 


  $id= $_GET['id'];
  $req = mysqli_query($conn , "DELETE FROM client_tb WHERE id = $id");
  header("Location:dashboard.php")
?>