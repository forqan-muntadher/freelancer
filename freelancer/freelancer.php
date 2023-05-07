<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);



//  // POST the form data

// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $country = $_POST['country'];




// //sql query
// $sql = "INSERT INTO freelancer_tb ( F_first_name , F_last_name , F_email, F_password , F_country)
//          VALUES ( '$firstname' , '$lastname' , '$email' , '$password' , '$country');";

// $sql .= "INSERT INTO login_tb (email, passwordd)
//         SELECT F_email , F_password FROM freelancer_tb
//         WHERE F_email = '$email' AND F_password = '$password'; ";

// //check sql process
// if (mysqli_multi_query($conn, $sql)) {

//   echo "<script>alert('add information successful')</script>";
//  header("refresh:2;url = create_profile.php?id=$id");
//  exit;

// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }


if(isset($_POST['button'])) {
  extract($_POST);
        
  $sql = mysqli_query($conn, "INSERT INTO freelancer_tb ( F_first_name , F_last_name , F_email, F_password , F_country)
     VALUES ( '$firstname' , '$lastname' , '$email' , '$password' , '$country');");
                              
  if($sql) {           
    $id = mysqli_insert_id($conn); // get the ID of the newly inserted row
    header("refresh:2;url= create_profile.php?id=$id"); // redirect the user to the profile page
  } else {
    $message = "Error: " . mysqli_error($conn); // display the error message
  }
} else {
  $message = "Please complete all fields!";
}


?>










<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Freelancer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="FREELANCER.CSS">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container1">
			<a href="#" class="logo">Smart</a>
			<nav>
				<ul>
					<li><a href="#">Find Work</a></li>
					<li><a href="HOME.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section class="hero">
		<div class="container1">
			<h1>Sign as Freelancer</h1>
		</div>
	</section>

	<section class="form">
		<div class="container">
			<form  action="" method="post">


				<label >Firstname</label>
				<input type="text"  name="firstname" required>

                <label >Lastname</label>
				<input type="text"  name="lastname" required>
		

				<label >Email</label>
				<input type="email" name="email" required>


				<label >Password</label>
				<input type="password" name="password" required>


                <label >Country</label>
				<select  name="country" required>
				
			    <option >Iraq</option>
				<option >Iran</option>
				<option >America</option>
				<option >French</option>
				<option >Spanish</option>
				<option >India</option>
				<option >Russia</option>
				<option >Italy</option>
							    
                </select>

				<button id="button" class="last" type="submit" name="button">Sign UP</button>
				

			</form>
		</div>
	</section>

	

</body>
</html>
