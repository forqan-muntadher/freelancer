<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);



 // POST the form data

$namee = $_POST['namee'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$city = $_POST['city'];
$addresss = $_POST['addresss'];
$purview = $_POST['purview'];
$skills = $_POST['skills'];
$otherskills = $_POST['otherskills'];
$languagee = $_POST['languagee'];
$otherlanguage = $_POST['otherlanguagee'];
$experiences = $_POST['experiences'];
$rate = $_POST['rate'];
$bio = $_POST['bio'];
$zip = $_POST['zip'];



//sql query
$sql = "INSERT INTO profile_tb (namee,  purview  ,age  , country  ,city ,  addresss,   zip,  languagee   , otherlanguage, skills,otherskills   ,experiences  ,rate  ,bio ,phone)
                        VALUES ('$namee', '$purview' ,'$age' , '$country' ,'$city' , '$addresss',  '$zip', '$languagee' ,'$otherlanguage','$skills','$otherskills'  ,'$experiences' ,'$rate' ,'$bio' ,'$phone');";

//check sql process
if (mysqli_query($conn, $sql)) {
  
  echo "insert record sccessfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>