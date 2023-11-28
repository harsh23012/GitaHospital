<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hms";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Cannot be connected".mysqli_connect_error());
    }
?>