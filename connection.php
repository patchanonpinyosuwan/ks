<?php

    $conn = mysqli_connect("localhost","root","","loginadmiuser");

    if(!$conn) {
        die("Fail to connec to databse" . mysqli_error($conn));
    }


?>