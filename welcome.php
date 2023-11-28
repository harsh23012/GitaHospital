<?php
$set = false;
session_start();
if(!isset($_SESSION['loggedin'])){
    header("location: patientlogin.php");
}
else{
    $set = true;
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];
    $username = $_SESSION['username'];
    $Desease = $_SESSION['Desease'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $name ?></title>
    <style>
        .cont h3{
            color: red;
        }
    </style>
</head>
<body>
    <?php require "nav.php" ?>
    <div class="container" class="cont">
    <?php
        if($set){
            echo "Welcome! ". $name."<br>";
            echo "Your age is ". $age;
        }
    
    ?>
    </div>

    <div class="container text-center my-4" class="cont">
        <?php
        echo"<h3 style='color: red;'> Welcome ".$name."</h3>";
        ?>
    </div>

    <div class="container">
        <h4 class="text-center">Your Appointments</h4>
        <table class="table table-primary">
            <thead>
                <tr>
                  <th scope="col">Sno</th>
                  <th scope="col">Date & Time</th>
                  <th scope="col">Department Name</th>
                  <th scope="col">Doctor Name</th>
                  <th scope="col">Download Prescription</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2023-11-27 20:00:38</td>
                  <td>Cardiology</td>
                  <td>DR. Lisa Martin</td>
                  <td><a href="#">Prescription</a></td>
                </tr>
              </tbody>
        </table>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto text-center">
        <a href="about.php"><button class="btn btn-primary" type="button">Book A New Appointment</button></a>
      </div>
</body>
</html>