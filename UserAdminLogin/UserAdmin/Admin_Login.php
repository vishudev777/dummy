<?php

if($_SERVER['REQUEST_METHOD']=='POST'){ //$_SERVER checks if the REQUEST_METHOD is POST
    include 'connect.php';              //if the above condition is 'TRUE' then from THIS line code is Executed
    $name = $_POST['admin_name'];       // storing value(Priya) of 'admin_name'(line no:36) where (admin_name = Priya) (key = value),    AFTER THIS VALUE of(admin_name) is STORED IN $name( as we will performing SQl Query)
    $email = $_POST['admin_email'];     // in same way KEY(admin_email) on line 40 VALUE(Priya@gmail) is stored as key=value(admin_email=Priya@gmail),   AFTER THIS VALUE of(admin_email) is STORED IN $email( as we will performing SQl Query)

    $sql = "select * from `admin` where admin_name='$name' and admin_email='$email'"; // here (name and email) is the COLUMN NAME of table 'admin' and $name and $email is the variable we got from above code which has value which we entered 
    $result = mysqli_query($con, $sql); // this Query is NECESSARY Bcz this query connects (1)$sql query and connect to Database through (2)$con variable
    if($result){                        // this line checks if the ($result) variable is true or not , if TRUE this CODE inside if(result){CODE} gets executed(kaam pr lagg jana)
        $num = mysqli_num_rows($result); 
            if($num==1){
            //    echo 'you are Logged in ';
               header('location:user_all_data.php' );
            }else{
                echo 'incorrect username or password';
    }
}}

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
        <h1>Admin's Login Page</h1>
        <form action="" method='POST'>
            <div class="name">
            <label for="name">Name :</label>
            <input id="name" type="text" name="admin_name" placeholder="Username"><br><br>  <!--name='admin_name' is very IMP for storing value in DATABASE as whatever we enter in input field of name(form) it is sended in key value form (key:value) example -> if we input(Priya) then (admin_name : Priya)which is same as(key:value) -->
            </div>

        <label for="email">Email :</label>
        <input id="email" type="email" name="admin_email" placeholder="Email id"><br><br>
        <button type="submit" name="submit" >Login</button>
        </form>
    </div>
</body>
</html>