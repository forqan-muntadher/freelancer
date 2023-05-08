<?php

include('config.php');


$conn = mysqli_connect($servername, $username, $password,$db);
 

// to show subscriber
$sql = "SELECT COUNT(*) as count FROM srch_data;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $count = $row["count"];
}


//to show stackholders
  $sql = "SELECT COUNT(*) as count FROM client_tb;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $count_c = $row["count"];
}

  //to show Freelancers
  $sql = "SELECT COUNT(*) as count FROM freelancer_tb;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $count_f = $row["count"];


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART</title>
    <link rel="stylesheet" href="./HOME.css">
    <script src="https://kit.fontawesome.com/03d2d6f6a2.js" crossorigin="anonymous"></script>
</head>
<body>

            <!-- section main --> 


    <section id="main">

        <div class="main_cont">

            <div class="sub_main_cont1">

                <h4 style="font-size: 30px;margin: auto;margin-top: 5px;margin-left: 8px;">Smart</h4>

                <ul>

                    <li class="fa-solid fa-house">&nbsp;&nbsp;<a href="#main">Home</a> </li>
                    <li class="fa-solid fa-address-card">&nbsp;&nbsp;<a href="create_profile.php" >Create Profile</a> </li>
                    <li class="fa-solid fa-inbox">&nbsp;&nbsp;<a href="#Contact_Us"> Contact Us</a></li>

                </ul>

                <hr>

                <ul>

                <li class="fa-solid fa-arrow-right-to-bracket" style="margin-right: 40px;">&nbsp;&nbsp;<a href="login.html">Log in</a> </li>
                <li class="fa-solid fa-user-plus"><a href="SIGN UP.html">&nbsp;&nbsp; Sign Up</a></li>
                </ul>

            </div>

            <div class="sub_main_cont2">

<pre style="color: white;font-size: 40px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">     Best place for get 
    all things you want it</pre>

    <div class="search">

        <input style="text-align: center;" type="search" placeholder="search">

    </div>
            </div>

        </div>

        <style>
            a{ text-decoration: none; color: #13544e;}
        </style>


    </section>



    <!-- section resulte project -->  



   
    
    <section id="resulte" class="resulte"> 
        
        
        <div class="box-container"> 
            
         
            
            <div class="box"> 
                
                <i class="fas fa-code"></i> 
                <h3>subscriber</h3> 
                <p>
                    <?php
                    echo $count;
                    ?>
                </p> 

            </div> 
            
            <div class="box"> 
                
                <i class="fas fa-bullhorn"></i> 
                <h3>stackholders</h3> 
                <p>
                    <?php
                    echo $count_c;
                    ?>
                </p> 
            
            </div> 
            
            <div class="box"> 

                <i class="fas fa-paint-brush"></i> 
                <h3>Freelancers</h3> 
                <p>
                    <?php
                    echo $count_f;
                    ?>
                </p> 

            </div> 
        
        </div> 
    
    </section> 
   




        <div class="cont_more">
<div class="more">

    <button type="submit">more</button>

</div>
        </div>








                <!-- section contact us --> 




                <section id="Contact_Us">




                    
                    <div class="main3">

                    <form action="contactus.php" method="post">

                        <div class="cont_main3">


                            <p style="color:white;font-size: 30px;">CONTACT US</p>


                            
                            <div class="input1">
                                <span><i class="fa-solid fa-user"></i></span>
                                <input type="text" placeholder="name" name="name">
                            </div>
                            <div class="input1">
                                <span><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" placeholder="email" name="email">
                            </div>
                            <div class="input2">
                                <span><i class="fa-solid fa-inbox"></i></span>
                                <input type="text" placeholder="message" name="message">
                            </div>
                            <div class="input1">
                                <span><i class="fa-solid fa-paper-plane"></i></span>
                                <input type="submit" value="send">

                            </div>


                        </div>
                    </form>

                    </div>





                </section>


                <!-- About section -->


                <section id="About">

                    <div class="About">
                        <h1 class="About_h1">ABOUT</h1>
                        <hr>
                        <p style="color: #fff; font-size: 25px; padding: 15px;letter-spacing: 2px;padding-left: 60px;padding-right: 60px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laborum unde at deleniti. Voluptatum, cum ducimus, quibusdam, assumenda laboriosam placeat illo molestiae ipsam animi voluptate et impedit. Dolores, temporibus delectus assumenda labore perferendis quas corrupti minima numquam reiciendis! Eius, iure id soluta nulla illo error assumenda facere! Facilis veniam, ullam dolores ex excepturi quos modi, porro voluptas repudiandae, eaque nobis.</p>
                    </div>

                </section>    
    
</body>
</html>