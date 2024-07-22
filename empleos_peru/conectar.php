<?php
    $servername = "localhost";
    $database = "empleos_peru";
    $username = "root";
    $password = "";
    // Create connection
    $con = mysqli_connect($servername, $username, $password, $database,);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $con->set_charset("utf8");
    date_default_timezone_set("America/Lima");
    setlocale(LC_TIME, "spanish");
    //echo "Connected successfully";
    //mysqli_close($con);
    
?>