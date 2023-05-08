<?php



include("config.php");
$id = $_GET['id'];


$sql = "SELECT * FROM `profile_tb` where id = '$id' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $name = $row["namee"];
  $age = $row["age"];
  $purview = $row["purview"];
  $country = $row["country"];
  $city = $row["city"];
  $address = $row["addresss"];
  $zip = $row["zip"];
  $language = $row["languagee"];
  $language2 = $row["otherlanguage"];
  $skill = $row["skills"];
  $skill2 = $row["otherskills"];
  $experiences = $row["experiences"];
  $rate = $row["rate"];
  $bio = $row["bio"];
  $phone = $row["phone"];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Freelancer Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
  <header>
    <div class="container">
      <img src="freelancer.png" alt="Profile picture">
      <div class="header-info">
        <h1><?php
        echo $name;
        ?></h1>
        <p><?php
        echo $purview;
        ?></p><br>
        <ul class="header-nav">
          <li><a href="./HOME.php">Home</a></li>

          <a href="profile_modification.php?id=<?=$row['id']?>">modify</a>
        </ul>
        <hr>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
      <section class="about">
        <h2>Bio</h2>
        <p><?php
        echo $bio;
        ?></p>
      </section>
      <section class="skills">
        <h2>Skills</h2>
        <ul>
          <li><?php
        echo $skill;
        ?></li>
          <li><?php
        echo $skill2;
        ?></li>
        </ul>
      </section>
      <hr>
      <section class="skills">
        <h2>language</h2>
        <ul>
          <li><?php
        echo $language;
        ?></li>
          <li><?php
        echo $language2;
        ?></li>
        </ul>
      </section>
<hr>
      <section class="skills">
        <ul>
          <label>Experiences</label>
          <li><?php
        echo $experiences;
        ?></li><br>
          <label>Hourly Rate</label>
          <li><?php
        echo $rate;
        ?>$</li><br>
        </ul>
      </section>
      
      <hr>
      <section class="skills">
        <h2>info</h2>
        <ul>
          <label>Age:</label>
          <li><?php
        echo $age;
        ?></li>
          <label>Phone:</label>
          <li><?php
        echo $phone;
        ?></li>
          <label>Country:</label>
          <li><?php
        echo $country;
        ?></li>
          <label>City:</label>
          <li><?php
        echo $city;
        ?></li>
          <label>Address:</label>
          <li><?php
        echo $address;
        ?></li>
          <label>Zipcode:</label>
          <li><?php
        echo $zip;
        ?></li>
        </ul>
      </section>
      <hr>
      <!-- <section class="portfolio">
        <h2>Portfolio</h2>
        <ul>
          <li>
            <a href="#">
              <img src="./Images/unnamed.jpg" alt="Project 1">
              <div class="overlay">
                <h3>Project 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="./Images/unnamed.jpg" alt="Project 2">
              <div class="overlay">
                <h3>Project 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="./Images/unnamed.jpg" alt="Project 3">
              <div class="overlay">
                <h3>Project 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </a>
          </li>
        </ul>
      </section> -->
      <!-- <section class="contact">
        <h2>Contact</h2>
        <form>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
          <label for="message">Message</label>
          <textarea id="message" name="message" required></textarea>
          <button type="submit">Send</button>
        </form>
      </section>
    </div>
     -->
  </main>

    
</body>
</html>