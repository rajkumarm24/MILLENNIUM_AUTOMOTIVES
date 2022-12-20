<?php

include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>AdminPage</title>
    <link rel="stylesheet" href="css/adminpage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> >
    <link rel="stylesheet" href="css/color.css">
</head>

<body>
<div class="colors">
    <span class"active" onclick="changecolor('#1dd1a1')" style="--clr:#1dd1a1;"></span>
    <span  onclick="changecolor('#ff6b6b')" style="--clr:#ff6b6b;"></span>
    <span  onclick="changecolor('#2e86de')" style="--clr:#2e86de;"></span>
    <span  onclick="changecolor('#f368e0')" style="--clr:#f368e0;"></span>
    <span  onclick="changecolor('#ff9f43')" style="--clr:#ff9f43;"></span>
    <span  onclick="changecolor('#6f0000')" style="--clr:#6f0000;"></span>
    
    <span  onclick="changecolor('#ffd700')" style="--clr:#ffd700;"></span>
    <span  onclick="changecolor('#00ffff')" style="--clr:#00ffff;"></span>
    <span  onclick="changecolor('#0000ff')" style="--clr:#0000ff;"></span>
    <span  onclick="changecolor('#00ff00')" style="--clr:#00ff00;"></span>
    <span  onclick="changecolor('#ff00ff')" style="--clr:#ff00ff;"></span>
    <span  onclick="changecolor('#dddddd')" style="--clr:#dddddd;"></span>
    <span  onclick="changecolor('#405612')" style="--clr:#405612;"></span>
    <span  onclick="changecolor('#d1f9c2')" style="--clr:#d1f9c2;"></span>
    <span  onclick="changecolor('#000080')" style="--clr:#000080;"></span>
    <span  onclick="changecolor('#f5f5f5')" style="--clr:#f5f5f5;"></span>

</div>

<script>
    function changecolor(color){
        document.body.style.background = color;
    }
    </script>
    <div class="container">


            <center> <button class="btn btn-primary my-5" type="submit">
                    <a class="text-light" href="adduser.php" target="_blank">AddUser</a></center>
            </button>
            <br>

       

            <table class="table table-hover" style="border:2px solid black">

                <tr>
                    <th scope="col">SI.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>

                <?php

                $sql="Select * from `user`";
                $result=mysqli_query($con,$sql);
                if($result){
                   
                    while( $row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['username'];
                        $email=$row['email'];
                        $password=$row['password'];
                        {
                            $id      =$row['id'];
                            $name    =$row['username'];
                            $email =$row['email'];
                            $password=$row['password'];
                            echo '<tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$password.'</td>

                                    <td>
                                    <button class="btn btn-primary" ><a href="update.php? updateid='.$id.'" class="text-light" target="_blank"">Update</a></button>
                                    </td>
                                    <td>
                                    <button class="btn btn-danger" ><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                                    </td> 
                                    <tr>';
                                    
                        }
                    }
                }

                ?>

               





            </table>

            <br>

            <center> <button class="btn btn-danger my-5" type="submit">
                    <a class="text-light" href="logout.php">Logout</a></center>
            </button>
    </div>

</body>

</html>