
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
    <title>หนัาแรก</title>
    <link rel="stylesheet" href="index.css" type="text/css">
    <meta charset="UTF-8">
</head>

<body>
    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
        <?php endif ?>
    </div>
    <nav>
        <h2><a href="https://www.facebook.com/%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87%E0%B8%AB%E0%B8%A1%E0%B8%B6%E0%B8%81%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%8A%E0%B8%B1%E0%B8%A7%E0%B8%A3%E0%B9%8C-753259474733162">kaiser telemart<a></h2>
        <ul class="set">
            <li><a href="#">Home</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="">About</a></li>
            <li><a href="shoppingcart.php"></a></li>
            <li><a href="index.php?logout='1'">Logout</a></li>
        </ul>
    </nav>
    <div class="slide">
        <figure>
            <img src="shopee.jpg">
            <img src="">
            <img src="">
            <img src="">
        </figure>
    </div>
</body>
</html>                                 