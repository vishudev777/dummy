<?php

include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td { 
            border: 1px solid black; 
        } 
    </style>
</head>
<body>
    <h1>User Data</h1>
<table style="width:50%"> 
        <tr> 
            <th>sr.no</th> 
            <th>Name</th> 
            <th>Email</th> 
        </tr> 
        <?php
            $sql = "select * from `users`";
            $result = mysqli_query($con, $sql);
            if($result){
                while ($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    echo '
                    <tr> 
                        <td>'. $id .'</td> 
                        <td>'. $name .'</td> 
                        <td>'. $email .'</td> 
                    </tr>
                        ';
                }

            }
        ?>
        
    </table> 
</body>
</html>