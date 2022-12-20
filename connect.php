<?php

$con=new mysqli('localhost','root','','user_operation');

if(!$con){
    die(mysqli_error($con));
}

?>