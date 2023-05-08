<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);

$freelancer_id = $_GET['id'];


if(isset($_POST['button'])) {
  extract($_POST);
        
  $sql = mysqli_query($conn, "INSERT INTO profile_tb (namee, purview, age, country, city, addresss, zip, languagee, otherlanguage, skills, otherskills, experiences, rate, bio, phone ,freelancer_id)
                              VALUES ('$namee', '$purview', '$age', '$country', '$city', '$addresss', '$zip', '$languagee', '$otherlanguage', '$skills', '$otherskills', '$experiences', '$rate', '$bio', '$phone' , '$freelancer_id')");
                              
  if($sql) {           
    $id = mysqli_insert_id($conn); // get the ID of the newly inserted row
    header("refresh:2;url=profile.php?id=$id"); // redirect the user to the profile page
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
	<title>Create Profile | Freelancer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="create_profile.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	<header>
		<div class="container1">
			<a href="#" class="logo">Smart</a>
			<nav>
				<ul>
					<li><a href="HOME.php">Home</a></li>
					<li><a href="">How IT Work</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section class="hero">
		<div class="container1">
			<h1>Create Your Freelancer Profile</h1>
		</div>
	</section>

	<section class="form">
		<div class="container">
			<form  action="" method="post">
				<label >Name</label>
				<input type="text"  name="namee" required>

				<label >Age</label>
				<input type="number" name="age" required>

				<label >Phone</label>
				<input type="tel"  name="phone" required>

				<label >Country</label>
				<input type="text"  name="country" required>

				<label >City</label>
				<input type="text"  name="city" required>

				<label >Address</label>
				<input type="text"  name="addresss" required>

				<label >Zip code</label>
				<input type="text"  name="zip" required>

				<label >Purview</label>
				<input type="text" name="purview" required>

				
				<label >your skills</label>
				<select  name="skills" required>
				
			    <option >IT</option>
				<option >Programming</option>
				<option >Front_end</option>
				<option >DBA</option>
				<option >Penetration testing</option>
				<option >Back_end</option>
				<option >Scrum master</option>
				<option >designer</option>
							    </select>

				<label >Other Skills</label>
				<input type="text"  name="otherskills" required>

				<label >Lnguage</label>
				<select  name="languagee" required>
				
			    <option >English</option>
				<option >Arabic</option>
				<option >French</option>
				<option >Spanish</option>
				<option >Indian</option>
				<option >Russian</option>
				<option >Portuguese</option>
				<option >Latin language</option>
							    </select>

				<label >Other Lnguage</label>
				<input type="text" name="otherlanguage" required>


				<label >Experiences (y)</label>
				<input type="number"  name="experiences" required>

				<label >Hourly Rate ($)</label>
				<input type="number" name="rate" min="0" step="1" required>

				<label >Bio</label>
				<textarea id="bio" name="bio"></textarea>

				<button id="button" class="last" type="submit" name="button">Create Profile</button>

			</form>
		</div>
	</section>


</body>
</html>
