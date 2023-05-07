<?php

include("config.php");

if (isset($_POST['input'])) {
    
    $input = $_POST['input'];

    $query = "SELECT * FROM srch_data WHERE C_first_name LIKE '{$input}%' OR C_last_name LIKE '{$input}%'  OR C_email LIKE '{$input}%' 
    OR C_password LIKE '{$input}%'  OR  C_country  LIKE '{$input}%' LIMIT 4 ";

    $result = mysqli_query($conn , $query);

    if (mysqli_num_rows($result) > 0) {
?>
 
         <table class="table table-bordered table-striped mt-4">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>firstname</th>
                        <th>lastnaem</th>
                        <th>email</th>
                        <th>password</th>
                        <th>country</th>
                    </tr>
            </thead>

            <tbody>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $id = $row['id'];
                    $firstnaem = $row['C_first_name'];
                    $lastname = $row['C_last_name'];
                    $email = $row['C_email'];
                    $password = $row['C_password'];
                    $country = $row['C_country'];


                    ?>

                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $firstnaem;?></td>
                        <td><?php echo $lastname;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $password;?></td>
                        <td><?php echo $country;?></td>
                        <td><a href="C_modification.php?id=<?=$row['id']?>"><img id="image" src="images/pen.png"></a></td>
                        <td><a href="delete_client.php?id=<?=$row['id']?>"><img id="image" src="images/trash.png"></a></td>
                    </tr>

                    <?php
                }
                
                ?>
            </tbody>

         </table>

<?php
       
    }else {
        echo "<h6 class= 'text-danger text-center mt-3'>NO data found</h6>";
    }
}

?>