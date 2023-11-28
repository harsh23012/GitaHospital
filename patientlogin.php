<?php
    $login = false;
    $showError = false;
if($_SERVER['REQUEST_METHOD']== 'POST'){
    include "_dbconnect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from patient where username = '$username' AND password ='$password' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $row = mysqli_fetch_assoc($result);
        $login =true; 
        $age = $row['Age'];
        $name = $row['Patient Name'];
        $Gender = $row['Gender'];
        $Desease = $row['Desease'];
        $Phoneno = $row['Phoneno'];
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['age'] = $age;
        $_SESSION['name'] = $name;
        $_SESSION['Gender'] = $Gender;
        $_SESSION['Desease'] = $Desease;
        $_SESSION['Phoneno'] = $Phoneno;
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

        <h1 class="text-center">Login with patient Id</h1>
        <form action="/hms/patientlogin.php" method="post" >
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Patient Id</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 col-md-6">
                <button type="submit" class="btn btn-primary p-2 g-col-6" id="login">Login</button>
                <button type="submit" class="btn btn-primary p-2 g-col-6" id="login">Forget password?</button>
            </div>
            <p>Not Registerd yet? <a href="patient_register.php">Register Yourself</a></p>
        </form>
    </div>
</body>
</html>