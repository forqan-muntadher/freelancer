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

$sql = mysqli_query($conn , "SELECT * FROM profile_tb WHERE id = $id");
$row = mysqli_fetch_assoc($sql);


if(isset($_POST['button'])){
    
    extract($_POST);
    
    if(isset($namee) && isset($age) && isset($phone) && isset($country) && isset($city) && isset($addresss) && isset($purview) && isset($skills) && isset($otherskills) && isset($languagee) && isset($otherlanguage) && isset($experiences) && isset($rate) && isset($bio) && isset($zip)){
        
        $sql = mysqli_query($conn, "UPDATE profile_tb SET namee = '$namee', age = '$age', phone = '$phone', country = '$country', city = '$city' , addresss = '$addresss' , purview = '$purview' , skills = '$skills', otherskills = '$otherskills', languagee = '$languagee', otherlanguage = '$otherlanguage', experiences = '$experiences', rate = '$rate', bio = '$bio', zip = '$zip' WHERE id = '$id'");
        if($sql){ 
            header("refresh:2;url = profile.php?id=$id");
        } else {
            $message = "This file has not been modified";
        }
    } else {
       
        $message = "Please complete all fields!";
    }
}
?>

<div class="form">
    <a href="profile.php" class="back_btn"><img src="images/back.png"> Back</a>
    <h2>modification to profile : <br> <?=$row['namee']?></h2>
    <p class="erreur_message">
        <?php 
            if(isset($message)){
                echo $message ;
            }
        ?>
    </p>
    <form action="" method="POST">
        <label>Name</label>
        <input type="text" name="namee" value="<?=$row['namee']?>">
        <label>age</label>
        <input type="number" name="age" value="<?=$row['age']?>">
        <label>phone</label>
        <input type="text" name="phone" value="<?=$row['phone']?>">
        <label>country</label>
        <input type="text" name="country" value="<?=$row['country']?>">
        <label>city</label>
        <input type="text" name="city" value="<?=$row['city']?>">
        <label>address</label>
        <input type="text" name="addresss" value="<?=$row['addresss']?>">
        <label>purview</label>
        <input type="text" name="purview" value="<?=$row['purview']?>">
        <label>skills</label>
        <input type="text" name="skills" value="<?=$row['skills']?>">
        <label>otherskills</label>
        <input type="text" name="otherskills" value="<?=$row['otherskills']?>">
        <label>language</label>
        <input type="text" name="languagee" value="<?=$row['languagee']?>">
        <label>otherlanguage</label>
        <input type="text" name="otherlanguage" value="<?=$row['otherlanguage']?>">
        <label>experiences</label>
        <input type="number" name="experiences" value="<?=$row['experiences']?>">
        <label>rate</label>
        <input type="number" name="rate" value="<?=$row['rate']?>">
        <label>bio</label>
        <input type="text" name="bio" value="<?=$row['bio']?>">
        <label>zip</label>
        <input type="number" name="zip" value="<?=$row['zip']?>">
        <input type="submit" value="modification" name="button">
    </form>
</div>
</body>
</html>
