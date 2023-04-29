<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

include_once "config.php";

$id = $_GET['id'];

$sql = mysqli_query($conn , "SELECT * FROM client_tb WHERE id = $id");
$row = mysqli_fetch_assoc($sql);


if(isset($_POST['button'])){
    
    extract($_POST);
    
    if(isset($C_first_name) && isset($C_last_name) && isset($email) && isset($password) && isset($country)){
        
        $sql = mysqli_query($conn, "UPDATE client_tb SET C_first_name = '$C_first_name', C_last_name = '$C_last_name', C_email = '$email', C_password = '$password', C_country = '$country' WHERE id = $id");
        if($sql){ 
            header("location: dashboard.php");
        } else {
            $message = "This file has not been modified";
        }
    } else {
       
        $message = "Please complete all fields!";
    }
}
?>

<div class="form">
    <a href="dashboard.php" class="back_btn"><img src="images/back.png"> Back</a>
    <h2>modification to Client : <br> <?=$row['C_first_name']?> <?=$row['C_last_name']?></h2>
    <p class="erreur_message">
        <?php 
            if(isset($message)){
                echo $message ;
            }
        ?>
    </p>
    <form action="" method="POST">
        <label>Firstname</label>
        <input type="text" name="C_first_name" value="<?=$row['C_first_name']?>">
        <label>Lastname</label>
        <input type="text" name="C_last_name" value="<?=$row['C_last_name']?>">
        <label>Email</label>
        <input type="email" name="email" value="<?=$row['C_email']?>">
        <label>Password</label>
        <input type="password" name="password" value="<?=$row['C_password']?>">
        <label>Country</label>
        <input type="text" name="country" value="<?=$row['C_country']?>">
        <input type="submit" value="modification" name="button">
    </form>
</div>
</body>
</html>
