<?php

    $servername = "localhost";
    $username = "root";
    $password = "133279";
    $dbname = "register_db";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check connection 
    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }
    
?>