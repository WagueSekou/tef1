<?php
    session_start();
    include("php_config/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>

<header>
        <nav>
            <a href="" class="active">Home</a>
            <a href="joins/innerjoin.php">Inner join</a>
            <a href="joins/leftjoin.php">Left join</a>
            <a href="joins/rightjoin.php">Right join</a>
            <a href="joins/crossjoin.php">Cross join</a>
            <a href="joins/fulljoin.php">Full join</a>
        </nav>
    </header>
    <div class="nav">
        <div class="logo">
            <p> <a href="home.php"> Logo</a></p>
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <?php

            $id = $_SESSION['id'];
            
            $query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = $id");

            while($result = mysqli_fetch_assoc($query)){
                $res_uname = $result['user_name'];
                $res_Email = $result['email'];
                $res_Age = $result['age'];
                $res_id = $result['id_user'];
            }
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            
            <a href="php_config/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>hey <b><?php echo $res_uname ?></b>, you are welcom  </p>
                </div>
                <div class="box">
                    <p>your email is <b><?php echo $res_uname ?></b>. </p>
                </div>
            </div>
            <div class="botton">
                <div class="box">
                    <p>And you are <b><?php echo $res_Age ?></b>.</p>
                </div>
            </div>
        </div>

    </main>
</body>
</html>