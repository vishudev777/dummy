<?php 
// created object ($con) of class mysqli  
$con = new mysqli('localhost','root','','user_db'); // user_db is the Database Name
if(!$con){
    die(mysqli_error($con));
}

?>