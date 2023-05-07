<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE DATABASE </title>
    <link rel="stylesheet" href="create_databases.css">
</head>
<body>
    <div class="container">
        <a href="create_database.php" class="Btn_add"> <img src="images/plus.png"> Create</a>
        
        
    <?php 
        include_once "config2.php";

        $req = mysqli_query($conn , "SHOW DATABASES;");

        if(mysqli_num_rows($req) == 0){
            echo "No databases found.";
        }else {
            echo "<table>";
            echo "<tr><th>Database Name</th></tr>";
            while($row=mysqli_fetch_assoc($req)){
                echo "<tr><td><a href=\"show_tables.php?db=" . $row['Database'] . "\">" . $row['Database'] . "</a></td></tr>";
            }
            echo "</table>";
        }
    ?>

   
   
    </div>
</body>
</html>


