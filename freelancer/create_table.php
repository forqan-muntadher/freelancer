<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = $_GET['db'];
$conn = mysqli_connect($servername, $username, $password,$db);

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

           if(isset($name) && isset($column1) && isset($column2) && isset($column3) ){


                $req = mysqli_query($conn , "CREATE TABLE $name (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    $column1 VARCHAR(30) NOT NULL,
                    $column2 VARCHAR(30) NOT NULL,
                    $column3 VARCHAR(50) NOT NULL );");
                if($req){
                    // header("location: show_tables.php");
                    header("refresh:1;url= show_tables.php?db=$db"); // redirect the user to the profile page

                }else {
                    $message = "create Table not successful";
                }

           }else {
               $message = "try agin";
           }
       }
    
    ?>
    <div class="form">
        <a href="show_tables.php" class="back_btn"><img src="images/back.png"> back</a>
        <h2>Create Tables</h2>
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Table Name</label>
            <input type="text" name="name">
            <label>Column</label>
            <input type="text" name="column1">
            <label>Column</label>
            <input type="text" name="column2">
            <label>Column</label>
            <input type="text" name="column3">
            <input type="submit" value="CREATE" name="button">
        </form>
    </div>
</body>
</html>