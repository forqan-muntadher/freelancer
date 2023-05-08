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
    
    <link rel="stylesheet" href="dashboard.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


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
                <li><a href="index.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">CREATE DATABASE</span>
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

        </div>

        <div class="dash-content">


        <div class="container" style="max-width: 50%;">

<div class="text-center mt-5 mb-4">
    <h2>php mysql search</h2>
</div>

<input type="text" class="form-control"  id="live_search" autocomplete="off" placeholder="search ...">

</div>

<div id="searchresult"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<script type="text/javascript">

    $(document).ready(function(){

        $("#live_search").keyup(function(){

            var input = $(this).val();

           if (input !="") {
            
            $.ajax({
                url:"dashboard_search.php",
                method:"POST",
                data:{input:input},

                success:function(data){
                    $("#searchresult").html(data);
                    $("#searchresult").css("display","block");

                }

            });
           }else {

            $("#searchresult").css("display","none");

           }
        });
    });

</script>





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
                    <div class="box box3" style="cursor: cell;" onclick="location.href='index.php'">
                        
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











        <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent client Activity</span>
                </div>
        
        <div class="activity-data"> 
                 





<style>

    
    table {
        
        border-collapse: collapse;
        width: 100%;
        height: 200px;
        border: 1px solid #bdc3c7;
    }

    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #16a085;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
        color: #fff;
        padding: 10px 0px;
    }
    #image {
    height: 25px;
   
}
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>

    <table>
        <tr id="header">
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Password</th>
            <th>Country</th>
            <th >View</th>
            <th >Delete</th>

        </tr>
       

        <?php

$sql =  "SELECT * FROM client_tb ORDER BY id DESC LIMIT 5";
$req = mysqli_query($conn ,$sql);
if(mysqli_num_rows($req) == 0){
    echo "not successful" ;
    
}else {
    while($row=mysqli_fetch_assoc($req)){

  ?>
        <tr>

        <td><?=$row['id']?></td>
        <td><?=$row['C_first_name']?></td>
        <td><?=$row['C_last_name']?></td>
        <td><?=$row['C_password']?></td>
        <td><?=$row['C_country']?></td>
        <td><a href="C_modification.php?id=<?=$row['id']?>"><img id="image" src="images/pen.png"></a></td>
        <td><a href="delete_client.php?id=<?=$row['id']?>"><img id="image" src="images/trash.png"></a></td>

        </tr>

        <?php
                }
            }

?>
    </table>

                </div>
        </div>


        <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent freelancer Activity</span>
                </div>
        
        <div class="activity-data"> 
                 






    <table>
        <tr id="header">
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Password</th>
            <th>Country</th>
            <th >View</th>
            <th >Delete</th>

        </tr>
       

        <?php

$sql =  "SELECT * FROM freelancer_tb ORDER BY id DESC LIMIT 5";
$req = mysqli_query($conn ,$sql);
if(mysqli_num_rows($req) == 0){
    echo "not successful" ;
    
}else {
    while($row=mysqli_fetch_assoc($req)){

  ?>
        <tr>

        <td><?=$row['id']?></td>
        <td><?=$row['F_first_name']?></td>
        <td><?=$row['F_last_name']?></td>
        <td><?=$row['F_password']?></td>
        <td><?=$row['F_country']?></td>
        <td><a href="F_modification.php?id=<?=$row['id']?>"><img id="image" src="images/pen.png"></a></td>
        <td><a href="delete_freelancer.php?id=<?=$row['id']?>"><img id="image" src="images/trash.png"></a></td>

        </tr>

        <?php
                }
            }

?>
    </table>

                </div>
        </div>


            </div>
            
        </div>

        <br><br><br>


    </section>

    <script src="script.js"></script>
</body>
</html>