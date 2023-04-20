<?php
$servername = "localhost:3307";  //my computer
$username = "root";
$password = "";
$db = "freelancer_db";
// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);
 

// to calculate number of user
$sql = "SELECT COUNT(*) as user_count FROM login_tb;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $user_count = $row["user_count"];
}


//to calculate Freelancers
  $sql = "SELECT COUNT(*) as user_count FROM freelancer_tb;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $user_count_f = $row["user_count"];
}

  //to calculate Clients
  $sql = "SELECT COUNT(*) as user_count FROM client_tb;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $user_count_c = $row["user_count"];


}




?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/unnamed.jpg">
            </div>

            <span class="logo_name">Admin | Mysql</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/unnamed.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        

                        <span class="text">Total Users</span>
                        <span class="number">
                            <?php
                            echo $user_count;
                            ?>
                        </span>
                    </div>
                    <div class="box box1">
                        
                    <span class="text">Client</span>
                        <span class="number">
                            <?php

                               echo $user_count_c;

                             ?>
                        </span>
                    </div>
                    <div class="box box1">
                        
                    <span class="text">Freelancer</span>
                        <span class="number">
                            <?php

                               echo $user_count_f;

                             ?>
                        </span>
                  </div>
                  
                </div>
            </div>
             
            
            <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Database Action</span>
                </div>


                <div class="overview">

                <div class="boxes">
                    <div class="box box3">
                        
                        <span class="text">CREATE</span>
                        
                    </div>
                    <div class="box box3">
                        
                        <span class="text">UPDATE</span>
                        
                    </div>
                    <div class="box box3">
                        
                        <span class="text">DELETE</span>
                       
                  </div>
                  
                </div>
            </div>


            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Database Action</span>
                </div>

                <div class="boxes">
                    <div class="box box2">
                        
                        <span class="text">RETREVE</span>
                       
                        </span>
                    </div>
                   
               
                  
                </div>
            </div>
            
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>