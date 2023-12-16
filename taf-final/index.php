<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
                include("php_config/config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $password = mysqli_real_escape_string($conn, $_POST['password']);

                    $select = "SELECT * FROM users WHERE Email='$email' AND Password ='$password'" or die('Select error');
                    $result = mysqli_query($conn, $select);

                    $row = mysqli_fetch_assoc($result);


                    if(is_array($row) && !empty($row) ){
                        $_SESSION['valid'] = $row['email'];
                        $_SESSION['username'] = $row['user_name'];
                        $_SESSION['age'] = $row['age'];
                        $_SESSION['id'] = $row['id_user'];
                    }else{
                        echo "<div class= 'message'>
                            <p> wrong Username or Password </p>
                                </div> <br>";
                        echo "<a href='index.php'> <button class='btn'> Go Back</button>";
                    }
                    if(isset($_SESSION['valid'])){
                        header("Location: home.php");
                    }
                }else{
            ?>
        <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="username">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field">
                    
                    <input type="submit" name="submit" class="btn" value="Login" required>
                </div>
                <div class="links">
                    Don't have an account? <a href="registration.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>