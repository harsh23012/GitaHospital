<?php
    $showAlert = false;
    $showError = false;
    $exists =false;
if($_SERVER['REQUEST_METHOD']== 'POST'){
    include "_dbconnect.php";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $desease = $_POST['desease'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existsql = "SELECT * FROM patient WHERE username = '$username'";
    $result = mysqli_query($conn, $existsql);
    $num = mysqli_num_rows($result);
    if($num==0){
        $exists = false;
    }
    else{
        $exists = true;
    }
    if(($password==$cpassword) && $exists== false){
       $sql = "INSERT INTO `patient` (`Patient Name`, `Age`, `Gender`, `Desease`, `Phoneno`, `username`, `password`, `Date & Time`) VALUES ('$name', '$age', '$gender', '$desease', '$phone', '$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
        }
        else{
            $showError = true;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

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
        

</style>
<body>
    <?php require "nav.php" ?>
    <?php
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> SignUp is successful.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Password doesnot match.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($exists){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Username already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>

    <div class="container" style="margin-top: 75px;">
        <form action="/hms/patient_register.php" method="post" >
            <h1 class="text-center">Regsiter Yourself To our Hospital</h1>
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                
            </div>
            <div class="mb-3 col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="city" aria-describedby="emailHelp" name="age">
                
            </div>
            <div class="mb-3 col-md-6">
                <label for="gender">Gender</label>
                <select id="cars" name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            
            <div class="mb-3 col-md-6">
                <label for="desease" class="form-label">Desease</label>
                <input type="text" class="form-control" id="desease" aria-describedby="emailHelp" name="desease">
                
            </div>
            <div class="mb-3 col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" aria-describedby="emailHelp" name="phone">
                
            </div>
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">UserName</label>
                <input type="" class="form-control" id="username" aria-describedby="emailHelp" name="username">
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 col-md-6">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Make sure your password is same.</div>
            </div>
            <div class="buttons grid gap-0 column-gap-3">
                <button type="submit" class="btn btn-primary p-2 g-col-6" id="signup">Signup</button>
                <button type="reset" class="btn btn-primary p-2 g-col-6" id="reset">Reset</button>
            </div>
        </form>
    </div>

</body>
<footer>
<?php require "footer.php" ?>
</footer>
</html>