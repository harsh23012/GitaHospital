<?php
    $login = false;
    $showError = false;
if($_SERVER['REQUEST_METHOD']== 'POST'){
    include "basic/_dbconnect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from isecure where username = '$username' AND password ='$password' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $row = mysqli_fetch_assoc($result);
        $login =true; 
        $city = $row['city'];
        $name = $row['name'];
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['city'] = $city;
        $_SESSION['name'] = $name;
        header("location: welcome.php");
    }
    else{
        $showError = true;
    }    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
        .container form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container form .buttons{
            display: flex;
            flex-direction: row;
        }
        .container .logins{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login{
            margin-top: 200px;
        }
</style>
<body>
    <?php require "nav.php" ?>
    <?php
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Logged in .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Username or password is wrong.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="container mx-auto login">

        <h1 class="text-center">Login with Admin Id</h1>
        <form action="/hms/login.php" method="post" >
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Admin Id</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
                <button type="submit" class="btn btn-primary p-2 g-col-6" id="login">Login</button>
                <button type="submit" class="btn btn-primary p-2 g-col-6" id="login">Forget password?</button>
            </div>
        </form>
    </div>
</body>
</html>