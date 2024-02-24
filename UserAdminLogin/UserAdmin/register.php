<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "insert into `users`(name, email) values('$name', '$email')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Data inserted Successfully";
    }else{
        die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Sign up Page ( For User )</h1>
        <form action="" method='post'>
            <div class="name">
            <label for="name">Name :</label>
            <input id="name" type="text" name="name" placeholder="Username"><br><br>
            </div>

        <label for="email">Email :</label>
        <input id="email" type="email" name="email" placeholder="Email id"><br><br>
        <button type="submit" name="submit" >Sign up</button>
        </form>
    </div>
</body>
</html>