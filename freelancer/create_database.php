<?php

$servername = "localhost:3307";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD DATABASE</title>
    <link rel="stylesheet" href="create_databases.css">
</head>
<body>
    <?php
    
       if(isset($_POST['button'])){

           extract($_POST);

           if(isset($name)){


                $req = mysqli_query($conn , "CREATE DATABASE $name");
                if($req){
                    header("location: index.php");
                }else {
                    $message = "create database not successful";
                }

           }else {
               $message = "try agin";
           }
       }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> back</a>
        <h2>Create Database</h2>
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>name</label>
            <input type="text" name="name">
            <input type="submit" value="CREATE" name="button">
        </form>
    </div>
</body>
</html>