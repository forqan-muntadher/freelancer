<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLES </title>
    <link rel="stylesheet" href="create_databases.css">
</head>
<body>
    <div class="container">
    <a href="index.php" class="back_btn"><img src="images/back.png"> back</a>


<?php
// include the database connection file
include_once "config2.php";

// check if the database name is set in the URL parameter
if(isset($_GET['db'])){
    $db = $_GET['db'];
    
    // run the query to show tables in the selected database
    $req = mysqli_query($conn , "SHOW TABLES FROM $db;");
    
    // check if there are any tables
    if(mysqli_num_rows($req) == 0){
        echo "No tables found in database $db.";
    }else {
        // display the list of tables in a table
        echo "<table>";
        echo "<tr><th> <h3>$db</h3><hr> Tables</th></tr>";
        while($row=mysqli_fetch_row($req)){
            echo "<tr><td>" . $row[0] . "</td></tr>";
        }
        echo "</table><br>";
    }
}else{
    // if the database name is not set, display an error message
    echo "No database name specified.";
}

                echo "<a class=\"Btn_add\"  href=\"create_table.php?db=" .  $db . "\"><img src=\"images/plus.png\">Create</a>";

?>
   
    </div>
</body>
</html>


