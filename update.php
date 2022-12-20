<?php

include 'connect.php';

$id=$_GET['updateid'];
$sql="Select * from `user` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST['update'])){


$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="update `user` set id='$id',username='$username',email='$email',password='$password' where id=$id";



$result=mysqli_query($con,$sql);

if($result){
    echo "updated successfully";
}else{
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
                    <h1>Update User</h1>
                    <h1>
                        <i class="fa-solid fa-user"></i>

                        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                        <i class="fa-solid fa-envelope"></i>

                        <input type="text" name="email" placeholder="Email Address" value="<?php echo $email; ?>">

                        <i class="fa fa-lock" aria-hidden="true"></i>

                        <input type="password" name="password"  placeholder="Password" value="<?php echo $password; ?>">


                       <center><input type="submit" name="update" value="update" class="btn"></center>
                    </h1>
                </form>


            </div>

        </div>


    </div>

</body>