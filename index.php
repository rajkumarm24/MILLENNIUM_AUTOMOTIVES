



<?php

$host="localhost";
$user="root";
$password="";
$db="user_operation";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}

if(isset($_POST['login'])){

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
   
    $sql="select * from `user` where username='".$username."' AND password='".$password."'";



    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {
        header("location:userpage.html");
    }
    
    elseif($row["usertype"]=="admin")
    {
        header("location:adminpage.php");
    }

    else{
        echo "username or password incorrect";
    }
}
}
?>

<?php

include 'connect.php';

if(isset($_POST['Register'])){


$user=$_POST['user'];
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="bg">
            <div class="box signin">
                <h2>Already Have An Account ?</h2>
                <button class="inb">Sign In</button>
            </div>
            <div class="box signup">
                <h2>Don't Have An Account ?</h2>
                <button class="upb">Sign Up</button>
            </div>

        </div>
        <div class="over">
 
    

            <div class="form signinForm">
                <form action="#" method="post">
                    <h1>Sign In<h1>
                            <div class="textbox">
                                <i class="fa-solid fa-user"></i>

                                <input type="text" name="username" value="" placeholder="Username" required="">

                            </div>

                            <div class="textbox">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <input type="password" name="password" value="" placeholder="Password" required="">
                            </div>

                            <center> <input type="submit" name="login" value="Login" class="btn"></center>

                </form>

            </div>

       


            <div class="form signupForm">
                <form method="post">
                    <h1>Sign Up<h1>

          

                            <i class="fa-solid fa-user"></i>

                            <input type="text" name="user" value="" placeholder="Username" required="">
                            <i class="fa-solid fa-envelope"></i>

                            <input type="text" name="email" value="" placeholder="Email Address" required="">

                            <i class="fa fa-lock" aria-hidden="true"></i>

                            <input type="password" name="pass" value="" placeholder="Password" required="">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" name="" value="" placeholder="Confirm Password" required="">

                            <center><input type="submit" name="Register" value="Register" class="btn"></center>
                </form>

            </div>
        </div>

        <script>
            const inb = document.querySelector('.inb');
            const upb = document.querySelector('.upb');
            const over = document.querySelector('.over');
            const body = document.querySelector('body');

            upb.onclick = function () {
                over.classList.add('active')
                body.classList.add('active')
            }

            inb.onclick = function () {
                over.classList.remove('active')
                body.classList.remove('active')
            }

        </Script>


        <body>

</html>