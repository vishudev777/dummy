<?php

if($_SERVER['REQUEST_METHOD']=='POST'){  //$_SERVER checks if the REQUEST_METHOD is POST 
    include 'connect.php';  //if the above condition is 'TRUE' then from THIS line code is Executed
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "select * from `users` where name='$name' and email='$email'";
    $result = mysqli_query($con, $sql);
    if($result){
        $num = mysqli_num_rows($result);
            if($num==1){
                echo 'Welcome '. $name .' you are Logged in ';
            }else{
                echo 'incorrect username or password';
    }
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
        <h1>User's Login Page</h1>
        <form action="" method='POST'>
            <div class="name">
            <label for="name">Name :</label>
            <input id="name" type="text" name="name" placeholder="Username"><br><br>
            </div>

        <label for="email">Email :</label>
        <input id="email" type="email" name="email" placeholder="Email id"><br><br>
        <button type="submit" name="submit" >Login</button>
        </form>
    </div>
</body>
</html>