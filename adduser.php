<?php

include 'connect.php';

if(isset($_POST['submit'])){


$user=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="insert into `user` (username,email,password)
values('$user','$email','$pass')";


$result=mysqli_query($con,$sql);

if(!$result){

die(mysqli_error($con));

}

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login And Register</title>
    <script src="https://kit.fontawesome.com/4ed533dc9a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/adduser.css">
</head>

<body>

    <div class="container">

        <div class="over">


            <div class="form signupForm">
                <form method="post">
                    <h1>Add User</h1>
                    <h1>
                        <i class="fa-solid fa-user"></i>

                        <input type="text" name="name" placeholder="Username" required="">
                        <i class="fa-solid fa-envelope"></i>

                        <input type="text" name="email" placeholder="Email Address" required="">

                        <i class="fa fa-lock" aria-hidden="true"></i>

                        <input type="password" name="pass"  placeholder="Password" required="">


                       <center><input type="submit" name="submit" value="Add User" class="btn"></center>
                    </h1>
                </form>


            </div>

        </div>


    </div>

</body>