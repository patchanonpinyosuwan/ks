<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
        <link rel="stylesheet" href="news.css">
    </head>
    <body>
        <nav>
            <h2><a href="">patchanon<a></h2>
            <ul class="set">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="">About</a></li>
                <li><a href="index.php?logout='1'">Logout</a></li>
            </ul>
        </nav>
        <img src="shopee.jpg">
    </body>
</html>